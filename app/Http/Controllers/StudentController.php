<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        $students = Student::all();
        return view("student.listing",compact("students"));
    }

    public function viewAdd(){
        return view("student.form");
    }
    public function add(Request $request){
        $request->validate([
            "name"=>"required|string",
            "age"=>"required|numeric|min:0"
        ],[
            "required"=>"Information required",
            "string"=> "Input must be text",
            "numeric"=>"Input must be numeric",
            "min"=> "Min value is 0",
        ]);
        try{
            Student::create([
                "name"=>$request->get("name"),
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone")
            ]);
            return redirect()->to("student/listing");
        }catch(\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }
    }
}
