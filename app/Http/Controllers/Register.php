<?php

namespace App\Http\Controllers;

use App\Models\RegisterUser;
use Illuminate\Http\Request;

class Register extends Controller
{
    public function register_state3(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'sazman' => 'required|min:3',
            'semat' => 'required|min:3',
            'phone' => 'required|min:3'

        ]);
        RegisterUser::create([
            'name' => $request->name,
            'sazman' => $request->sazman,
            'semat' => $request->semat,
            'phone' => $request->phone,
            'type' => 3,
            'ip' => $request->ip()
        ]);
        return ['status'=>'200'];
    }

    public function register_state2(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'semat' => 'required|min:3',
            'phone' => 'required|min:3',
            'tashakol' => 'required|min:3'
        ]);
        RegisterUser::create([
            'name' => $request->name,
            'semat' => $request->semat,
            'phone' => $request->phone,
            'tashakol' => $request->tashakol,
            'type' => 2,
            'ip' => $request->ip()
        ]);
        return ['status'=>'200'];
    }

    public function register_state1(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'kind' => 'required|min:3',
            'phone' => 'required|min:3',
            'grade' => 'required|min:3',
            'university' => 'required|min:3',
            'email' => 'required|min:3',
            'field' => 'required|min:3',
        ]);
        RegisterUser::create([
            'name' => $request->name,
            'kind' => $request->kind,
            'phone' => $request->phone,
            'grade' => $request->grade,
            'university' => $request->university,
            'email' => $request->email,
            'field' => $request->field,
            'type' => 1,
            'ip' => $request->ip()
        ]);
        return ['status'=>'200'];
    }

    public function showall(){
        $users = RegisterUser::all();
        return $users;
    }
}
