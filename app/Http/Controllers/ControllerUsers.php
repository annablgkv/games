<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;

class ControllerUsers extends Controller
{
    public function getUsers() {
        $temp =User::all();
        return response()->json($temp);
    }

    public function getOneUser(Request $request) {
        $temp = $request->all();

        $mod = User::find($temp['id']);
        return response()->json($mod);
    }

    public function updateUser(Request $request) {
        $temp = $request->all();

        $mod = User::find($temp['id']);
        $mod->id_role = $temp['id_role'];
        $mod->name = $temp['name'];
        $mod->email = $temp['email'];
        $mod->password = bcrypt($temp['password']);
        $mod->avatar = $temp['avatar'];
        $mod->save();
    }
    
    public function deleteUser(Request $request) {
        $temp = $request->all();

        User::where('id', $temp['id'])->delete();
    }
}
