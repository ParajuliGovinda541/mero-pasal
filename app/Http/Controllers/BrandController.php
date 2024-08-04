<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands=Brand::all();
        // dd($brands);

        return view('admin.brand.index',compact('brands'));
    }

    public function showbrand()
    {
        $brands=Brand::all();
        // dd($brands);

        return view('user.brand',compact('brands'));
    }





    public function create()
    {
        $allcategory = Category::all();

        return view('admin.brand.create', compact('allcategory'));
    }

    public function store(Request $request)
    {
        // dd($request->name); it prints the  single data

        $data = $request->validate([
            'name'=>'required',
            'photo'=>'required|image|mimes:jpg,jpeg,png'

        ]);
        //dd($request['photo']);
        $data=[
            'name'=>$request['name'],
            'category_id'=>$request['category_id']




        ];

        if($request->hasFile('photo'))
        {
            $image=$request->file('photo');
            $name= time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/brand');
            $image ->move($destinationPath,$name);
            $data['photo']=$name;

        }

       // dd($data); // printing the data


        Brand::create($data);
        return redirect(route('admin.brand.index'))->with('success','brand created sucessfully!');


    }


    public function edit($id)
    {
        $brand= Brand::find($id);
        return view('admin.brand.edit',compact('brand'));
    }
    public function update(Request $request,$id)
    {
        $data= $request->validate([
            'brands_name'=>'required',
            'photo'=>'required|image|mimes:jpg,jpeg,png'



        ]);
        if($request->hasFile('photo'))
        {
            $image=$request->file('photo');
            $name= time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/brand');
            $image ->move($destinationPath,$name);
            $data['photo']=$name;

        }




        $brand= Brand::find($id);
        $brand->update($data);
        return redirect(route('admin.brand.index'))->with('success','brand updated sucessfully!');

    }


    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect(route('admin.brand.index'))->with('success','brand deleted sucessfully!');

    }
}
