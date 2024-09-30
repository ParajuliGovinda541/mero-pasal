<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
     //
     public function index()
     {
         $blogs = Blog::all();
         return view("admin.blogs.index", compact("blogs"));
     }

     public function create()
     {


         return view("admin.blogs.create");
     }

     public function store(Request $request)
     {
         // dd($request);
         $data = $request->validate([
             'blog_date' => 'required',
             'priority' => 'required|integer',
             'author' => 'required',
             'image' => 'required|mimes:jpeg,jpg,png',
             'title' => 'required',
             'description' => 'required',
             'links' => 'required',

         ]);

         if ($request->hasFile('image')) {
             $image = $request->file('image');
             $name = time() . '.' . $image->getClientOriginalExtension();
             $destinationPath = public_path('/images/blogs');
             $image->move($destinationPath, $name);
             $data['image'] = $name;
         }

         $blog = Blog::create($data);
         return redirect()->route('admin.blogs.index')->with('success', 'Created Sucesfully');

     }


     public function edit($id)
     {
         $blog = Blog::find($id);
         return view('admin.blogs.edit', compact('blog'));
     }

     public function update(Request $request, $id)
     {
         $blogs = Blog::find($id);
         // dd($request);
         $data = $request->validate([
             'blog_date' => 'required',
             'priority' => 'required|integer',
             'author' => 'required',
             'image' => 'required|mimes:jpeg,jpg,png',
             'title' => 'required',
             'description' => 'required',
             'links' => 'required',

         ]);

         if ($request->hasFile('image')) {
             $image = $request->file('image');
             $name = time() . '.' . $image->getClientOriginalExtension();
             $destinationPath = public_path('/images/blogs');
             $image->move($destinationPath, $name);
             File::delete('images/blogs/' . $blogs->image);

             $data['image'] = $name;
         }

         $blogs->update($data);
         return redirect()->route('admin.blogs.index')->with('success', 'updated Sucesfully');
     }

     public function destroy(Request $request)
     {
         $blog = Blog::findOrFail($request->dataid);
         $blog->delete();
         return redirect()->route('admin.blogs.index')->with('success','Deleted Sucessfully');
     }
}
