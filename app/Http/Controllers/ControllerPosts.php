<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Post;

class ControllerPosts extends Controller
{
    public function getPosts() {
        $temp =Post::all();
        return response()->json($temp);
    }

    public function getOnePost(Request $request) {
        $temp = $request->all();

        $mod = Post::find($temp['id']);
        return response()->json($mod);
    }

    public function setPost(Request $request) {
        $temp = $request->all();

        $mod = new Post();
        $mod->id_user = $temp['id_user'];
        $mod->id_category = $temp['id_category'];
        $mod->title = $temp['title'];
        $mod->text = $temp['text'];
        $mod->media = $temp['media'];
        $mod->save();
    }

    public function updatePost(Request $request) {
        $temp = $request->all();

        $mod = Post::find($temp['id']);
        $mod->id_user = $temp['id_user'];
        $mod->id_category = $temp['id_category'];
        $mod->title = $temp['title'];
        $mod->text = $temp['text'];
        $mod->media = $temp['media'];
        $mod->save();
    }
    
    public function deletePost(Request $request) {
        $temp = $request->all();

        Post::where('id', $temp['id'])->delete();
    }
}
