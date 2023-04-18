<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryImage;
use App\Models\Title;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryImageController extends Controller
{

    //category Image index function
    public function index(){
        $title = Title::all();
        $categories = Category::all();
        $category_images = CategoryImage::all();
        return view('admin-index', compact('categories', 'category_images', 'title'));

    }

     //category Image store function
    public function store(Request $request){

        $request->validate([
            'cat_id'    => 'required',
            'image'     => 'required|image'
        ]);
        $category_image = CategoryImage::create($request->except('_token'));
        $image = $request->file('image');
        $filename = rand().time().".".$image->extension();
        $location = public_path('uploads/category/image');
        $image->move($location,$filename);
        $category_image->image = $filename;
        $category_image->save();
        return to_route('index.category.image');
    }

    //category Image store function

    public function edit($id){
        $category_image = CategoryImage::find($id);
        $categories = Category::all();
        return view('admin-image-edit', compact('category_image', 'categories'));
    }

    public function update(Request  $request , $id){

        $category_image = CategoryImage::find($id);

        if($request -> cat_id){
            $category_image->update($request->except('_token'));
        }
        if($request->file('image' )){
            $image = $request->file('image');
            $filename = rand().time().".".$image->extension();
            $location = public_path('uploads/category/image');
            $image->move($location,$filename);
            $category_image->image = $filename;
        }
        $category_image->save();
        return to_route('index.category.image');
    }

    public function destroy($id){
        $category_image = CategoryImage::find($id);
        $category_image->delete();
        return back();
    }


}
