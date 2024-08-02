<div id="newOrderPopup" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-gray-900 bg-opacity-50">
    <div class="bg-white p-8 rounded-lg shadow-xl max-w-sm w-full">
        <h4 class="text-2xl font-bold text-blue-700 mb-4">New Orders</h4>
        <p class="text-gray-800 text-lg mb-4">Total New Orders: <span class="text-blue-600 font-bold">{{ $totalNewOrders }}</span></p>
        <div class="flex justify-center">
            <button type="button" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition-colors" onclick="closePopup()">
                Close
            </button>
        </div>
    </div>
</div>
