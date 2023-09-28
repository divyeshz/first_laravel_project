<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class UserController extends Controller
{
    public function Insert(){
        return view('welcome');
    }
    public function insertdata(Request $data){
        $student = [
            'name' => $data->name,
            'email' => $data->email,
            'number' => $data->number,
        ];

        Student::create($student);
        return redirect('/');
    }

}
