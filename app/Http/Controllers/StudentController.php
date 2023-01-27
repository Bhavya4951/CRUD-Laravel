<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Student;
class StudentController extends Controller
{
    public function Index(){

        $data = Student::get();

        return view('index',compact('data'));
    }

    public function addstudent()
    {
    
          return view('add-student');
    }

    public function savestudent(Request $request ){

        $request->validate([

            "sname" =>"required",
            "semail" => "required|email",
            "sphone" => "required",
            "address" => "required",
        ]);

       $stud = new Student();
       $stud->name = $request->sname;
       $stud->email = $request->semail;
       $stud->phone = $request->sphone;
       $stud->address = $request->address;

       $stud->save();

       return redirect()->back()->with('message','Student data add Successfully');
    }

    public  function editstudent($id){

        $data  = Student::where('id' ,'=',$id)->first();

        return view('edit-student',compact('data'));
    }

    public function updatestudent(Request $request){
        $request->validate([

            "sname" =>"required",
            "semail" => "required|email",
            "sphone" => "required",
            "address" => "required",
        ]);

        //$student->update($request->all());

        
            $name = $request->sname;
            $email = $request->semail;
            $phone = $request->sphone;
            $address = $request->address;
      
            Student::where('id','=',$request->id)->update([

                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address
                ]);

       return redirect()->back()->with('message','Student data update Successfully');

    }

    public function delete($id){

        Student::where('id','=',$id)->delete();
       return redirect()->back()->with('message','Student data delete Successfully');

    }
}
