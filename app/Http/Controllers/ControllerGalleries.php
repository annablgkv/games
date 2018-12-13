<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Gallery;

class ControllerGalleries extends Controller
{
    public function getGalleries() {
        $temp = Gallery::all();
        return response()->json($temp);
    }

    public function getOneGallery(Request $request) {
        $temp = $request->all();

        $mod = Gallery::find($temp['id']);
        return response()->json($mod);
    }

    public function setGallery(Request $request) {
        $temp = $request->all();

        $mod = new Gallery();
        $mod->id_user = $temp['id_user'];
        $mod->title = $temp['title'];
        $mod->path = $temp['path'];
        $mod->save();
    }

    public function updateGallery(Request $request) {
        $temp = $request->all();

        $mod = Gallery::find($temp['id']);
        $mod->id_user = $temp['id_user'];
        $mod->title = $temp['title'];
        $mod->path = $temp['path'];
        $mod->save();
    }
    
    public function deleteGallery(Request $request) {
        $temp = $request->all();

        Gallery::where('id', $temp['id'])->delete();
    }
}
