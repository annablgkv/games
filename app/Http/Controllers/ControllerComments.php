<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Comment;

class ControllerComments extends Controller
{
    public function getComments() {
        $temp =Comment::all();
        return response()->json($temp);
    }

    public function getOneComment(Request $request) {
        $temp = $request->all();

        $mod = Comment::find($temp['id']);
        return response()->json($mod);
    }

    public function setComment(Request $request) {
        $temp = $request->all();

        $mod = new Comment();
        $mod->id_user = $temp['id_user'];
        $mod->id_post = $temp['id_post'];
        $mod->text = $temp['text'];
        $mod->save();
    }

    public function updateComment(Request $request) {
        $temp = $request->all();

        $mod = Comment::find($temp['id']);
        $mod->id_user = $temp['id_user'];
        $mod->id_post = $temp['id_post'];
        $mod->text = $temp['text'];
        $mod->save();
    }
    
    public function deleteComment(Request $request) {
        $temp = $request->all();

        Comment::where('id', $temp['id'])->delete();
    }
}
