<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    // GET
        
        // index view (index.blade.php)
        $students = Student::all();
        // Student::all(); get the data from the model, (Student is the name of the model)
        return view('students.index')->with('students', $students);
        // view('students.index'),  directory where to go,
        // ->with('students', $students);, 'students' name of the student variable in foreach, 
    }
    
    public function create()
    {
        // GET

        return view('students.create');

        // students.create, directory where to view
    }

    public function store(Request $request)
    {
        // POST


        $input = $request->all();
        Student::create($input);
        return redirect('game')->with('flash_message', 'Student Addedd!');  
        // 'student is the directory in folder /student in ROUTE:'
    }
    
    public function show($id)
    {
        // GET
        
        $x = Student::find($id);
        return view('students.show')->with('varable', $x);
    }
    
    public function edit($id)
    {
        // GET

        $student = Student::find($id);
        return view('students.edit')->with('varable', $student);
    }
  
    public function update(Request $request, $id)
    {
        // POST, (IF JAVASCRIPT PUT or PATCH)

        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('game')->with('flash_message', 'student Updated!');  
    }
  
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('game')->with('flash_message', 'Student deleted!');  
    }
}
