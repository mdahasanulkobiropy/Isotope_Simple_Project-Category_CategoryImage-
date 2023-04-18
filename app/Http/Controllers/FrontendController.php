<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryImage;
use App\Models\Title;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $categories = Category::all();
        $category_images =CategoryImage::all();
        $title=Title::all();
        return view('index', compact('categories', 'category_images', 'title'));
    }
}
