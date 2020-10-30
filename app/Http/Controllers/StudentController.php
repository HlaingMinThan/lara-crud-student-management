<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    // index home page function
    public function index () {
        $stuTableDatas=Student::all();
        return view('index',['stuTableDatas'=>$stuTableDatas]);

    }
    public function create(){
        $stuTableDatas=Student::all();
        return view('create',['stuTableDatas'=>$stuTableDatas]);
       
    }
    public function insert(Request $req){
        $student=new Student;
        $student->first_name=$req->first_name;
        $student->second_name=$req->second_name;
        $student->age=$req->age;
        $student->speciality=$req->speciality;
        $student->save();
        return redirect('/');
        // check with dd
        // return dd($student);
    }
    public function update($id){
        $updateData=Student::findOrFail($id);
        $stuTableDatas=Student::all();
        return view('update',[
            "updateData"=>$updateData,
            "stuTableDatas"=>$stuTableDatas
            ]);
    }
    public function edit($id,Request $req){
        $student=Student::findOrFail($id);
        $student->first_name=$req->first_name;
        $student->second_name=$req->second_name;
        $student->age=$req->age;
        $student->speciality=$req->speciality;
        $student->update();
        return redirect('/');
    }
    public function delete($id){
        $deleteData=Student::findOrFail($id);
        $deleteData->delete();
        return redirect('/');
    }
}
        

