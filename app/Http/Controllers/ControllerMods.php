<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mod;

class ControllerMods extends Controller
{
    public function getMods() {
        $temp = Mod::all();
        return response()->json($temp);
    }

    public function getOneMod(Request $request) {
        $temp = $request->all();

        $mod = Mod::find($temp['id']);
        return response()->json($mod);
    }

    public function setMod(Request $request) {
        $temp = $request->all();

        $mod = new Mod();
        $mod->id_user = $temp['id_user'];
        $mod->title = $temp['title'];
        $mod->description = $temp['description'];
        $mod->path = $temp['path'];
        $mod->save();
    }

    public function updateMod(Request $request) {
        $temp = $request->all();

        $mod = Mod::find($temp['id']);
        $mod->id_user = $temp['id_user'];
        $mod->title = $temp['title'];
        $mod->description = $temp['description'];
        $mod->path = $temp['path'];
        $mod->save();
    }
    
    public function deleteMod(Request $request) {
        $temp = $request->all();

        Mod::where('id', $temp['id'])->delete();
    }
}
