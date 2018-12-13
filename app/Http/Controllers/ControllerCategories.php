<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Category;

class ControllerCategories extends Controller
{
    public function getCategories() {
        $temp = Category::all();
        return response()->json($temp);
    }

    public function getOneCategory(Request $request) {
        $temp = $request->all();

        $mod = Category::find($temp['id']);
        return response()->json($mod);
    }

    public function setCategory(Request $request) {
        $temp = $request->all();

        $mod = new Category();
        $mod->title = $temp['title'];
        $mod->save();
    }

    public function updateCategory(Request $request) {
        $temp = $request->all();

        $mod = Category::find($temp['id']);
        $mod->title = $temp['title'];
        $mod->save();
    }
    
    public function deleteCategory(Request $request) {
        $temp = $request->all();

        Category::where('id', $temp['id'])->delete();
    }
}
