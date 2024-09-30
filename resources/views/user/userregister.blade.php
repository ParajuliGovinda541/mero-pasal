<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom animation for error messages */
        @keyframes shake {
            0%, 100% {
                transform: translateX(0);
            }
            25% {
                transform: translateX(-5px);
            }
            50% {
                transform: translateX(5px);
            }
            75% {
                transform: translateX(-5px);
            }
        }

        .shake {
            animation: shake 0.3s ease;
        }

        /* Custom shadow for interactive fields */
        input:focus {
            box-shadow: 0 0 10px rgba(72, 187, 120, 0.5);
        }
    </style>
</head>

<body class="bg-gradient-to-r from-green-400 to-blue-500 min-h-screen flex items-center justify-center">
    <div class="container mx-auto">
        <div class="bg-white px-8 py-10 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-4xl font-bold text-center text-gray-700 mb-6">Create Account</h1>

            <form id="signupForm" action="{{ route('user.store') }}" method="POST" onsubmit="return validateForm()">
                @csrf

                <div class="relative mb-4">
                    <input type="text" id="name" class="block w-full p-4 border border-gray-300 rounded-lg text-lg outline-none focus:border-green-500 transition" name="name" placeholder="Full Name" />
                    <span id="nameError" class="hidden text-red-600 text-sm absolute top-14 shake">Please enter your Full Name.</span>
                </div>

                <div class="relative mb-4">
                    <input type="text" id="phone" class="block w-full p-4 border border-gray-300 rounded-lg text-lg outline-none focus:border-green-500 transition" name="phone" placeholder="Phone" />
                    <span id="phoneError" class="hidden text-red-600 text-sm absolute top-14 shake">Please enter a valid Phone number.</span>
                </div>

                <div class="relative mb-4">
                    <input type="text" id="address" class="block w-full p-4 border border-gray-300 rounded-lg text-lg outline-none focus:border-green-500 transition" name="address" placeholder="Address" />
                    <span id="addressError" class="hidden text-red-600 text-sm absolute top-14 shake">Please enter your Address.</span>
                </div>

                <div class="relative mb-4">
                    <input type="text" id="email" class="block w-full p-4 border border-gray-300 rounded-lg text-lg outline-none focus:border-green-500 transition" name="email" placeholder="Email" />
                    <span id="emailError" class="hidden text-red-600 text-sm absolute top-14 shake">Please enter a valid Email address.</span>
                </div>

                <div class="relative mb-4">
                    <input type="password" id="password" class="block w-full p-4 border border-gray-300 rounded-lg text-lg outline-none focus:border-green-500 transition" name="password" placeholder="Password" />
                    <span id="passwordError" class="hidden text-red-600 text-sm absolute top-14 shake">Please enter a Password.</span>
                </div>

                <div class="relative mb-4">
                    <input type="password" id="password_confirmation" class="block w-full p-4 border border-gray-300 rounded-lg text-lg outline-none focus:border-green-500 transition" name="password_confirmation" placeholder="Confirm Password" />
                    <span id="passwordConfirmationError" class="hidden text-red-600 text-sm absolute top-14 shake">Passwords do not match.</span>
                </div>

                <button type="submit" class="w-full py-3 bg-green-500 hover:bg-green-600 text-white rounded-lg text-lg font-semibold transition-all duration-300 ease-in-out">
                    Create Account
                </button>

                <div id="successMessage" class="hidden text-center text-green-600 mt-4">
                    Registered Successfully! Redirecting to login page...
                </div>
            </form>

            <div class="text-center text-gray-600 mt-4">
                Already have an account?
                <a href="{{ route('userlogin') }}" class="text-blue-500 hover:text-blue-700">Log in</a>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const address = document.getElementById('address').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const password_confirmation = document.getElementById('password_confirmation').value.trim();

            let isValid = true;

            if (name === '') {
                showError('name', 'Please enter your Full Name.');
                isValid = false;
            } else {
                hideError('name');
            }

            if (!/^\d{10}$/.test(phone)) {
                showError('phone', 'Phone number must be 10 digits.');
                isValid = false;
            } else {
                hideError('phone');
            }

            if (address === '') {
                showError('address', 'Please enter your Address.');
                isValid = false;
            } else {
                hideError('address');
            }

            if (!isValidEmail(email)) {
                showError('email', 'Please enter a valid Email address.');
                isValid = false;
            } else {
                hideError('email');
            }

            if (password === '') {
                showError('password', 'Please enter a Password.');
                isValid = false;
            } else if (password !== password_confirmation) {
                showError('password_confirmation', 'Passwords do not match.');
                isValid = false;
            } else {
                hideError('password');
                hideError('password_confirmation');
            }

            if (isValid) {
                showSuccessMessage();
            }

            return isValid;
        }

        function showError(field, message) {
            const errorSpan = document.getElementById(`${field}Error`);
            errorSpan.innerText = message;
            errorSpan.classList.remove('hidden');
            errorSpan.classList.add('shake');
            setTimeout(() => errorSpan.classList.remove('shake'), 500);
        }

        function hideError(field) {
            const errorSpan = document.getElementById(`${field}Error`);
            errorSpan.classList.add('hidden');
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function showSuccessMessage() {
            const successMessage = document.getElementById('successMessage');
            successMessage.classList.remove('hidden');
            setTimeout(() => {
                window.location.href = "{{ route('userlogin') }}";
            }, 3000);
        }
    </script>
</body>

</html>
