<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Role;

class ControllerRoles extends Controller
{
    public function getRoles() {
        $temp = Role::all();
        return response()->json($temp);
    }

    public function getOneRole(Request $request) {
        $temp = $request->all();

        $mod = Role::find($temp['id']);
        return response()->json($mod);
    }

    public function setRole(Request $request) {
        $temp = $request->all();

        $mod = new Role();
        $mod->title = $temp['title'];
        $mod->save();
    }

    public function updateRole(Request $request) {
        $temp = $request->all();

        $mod = Role::find($temp['id']);
        $mod->title = $temp['title'];
        $mod->save();
    }
    
    public function deleteRole(Request $request) {
        $temp = $request->all();

        Role::where('id', $temp['id'])->delete();
    }
}
