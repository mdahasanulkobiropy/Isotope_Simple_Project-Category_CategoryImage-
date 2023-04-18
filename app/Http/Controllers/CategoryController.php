<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryImage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    //category Create function
    public function create(){
        $categories = Category::all();
        return view('admin-create', compact('categories'));
    }

    //category store function

    public function store(Request $request){

        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::create($request->except('_token'));
        $category->save();
        return back();
    }



    //category edit function
    public function edit($id){
        $category = Category::find($id);
        return view('admin-category-edit', compact('category'));
    }



    //category update function
    public function update(Request $request, $id){


        $request->validate([
            'name' => 'required'
        ]);

        $category=Category::find($id);
        if($request->name){
            $category->update($request->except('_token'));
        }

        $category->save();
        return to_route('index.category.image');
    }




    //category Destroy function

    public function destroy($id){
        $category = Category::find($id);
        CategoryImage::where('cat_id', $category->id)->get()->each->delete();
        $category->delete();
        return back();
    }

}
