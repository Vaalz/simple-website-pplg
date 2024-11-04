<?php

namespace App\Http\Controllers;

use app\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request){
        Category::create(atributes: [
            'title' => $request->title,
            'description => $request->description'
        ]);
    }
}
