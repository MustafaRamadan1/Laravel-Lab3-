<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //
    
    public function Create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        //create a new record in db by the model we have and as we said it know it's the model of the table 
        // by naming conviention 

       $student = new Student();
       $student->name = $request->name;
       $student->age = $request->age;
       $student->save();
        return back();
    //     // $post = Post::created(array_merge($request->all(), ['users_id']));
    
    }

    public function index()
    {

        $students =  Student::all();
       
        return view('students.index', ['students' => $students]);
    }

    public function edit(Request $request, $id) 
    {   
        
        return view('students.edit', ['student'=> Student::find($id)]);
    }
    public function update(Request $request, $id) 
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->age = $request->age;
        if($student->save())
        return redirect('students');
    }

    public function destroy($id){
        Student::find($id)->delete();
        return redirect()->route('students.index');
    }
}
