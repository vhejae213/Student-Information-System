<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\course;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('pages.Information.student')
        ->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $courses = course::all();
        return view('pages.Information.studentCreate')
        ->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|regex:/^[a-zA-Z]+$/u',
            'mname' => 'required|regex:/^[a-zA-Z]+$/u',
            'lname' => 'required|regex:/^[a-zA-Z]+$/u',
            'gender' => 'required',
            'contact' => 'required|integer',
            'address' => 'required|regex:/^[a-zA-Z]+$/u',
            'course' => 'required',
        ]);
        $student = new student;
        $student->Fname = $request->input('fname');
        $student->Mname = $request->input('mname');
        $student->Lname = $request->input('lname');
        $student->Gender = $request->input('gender');
        $student->Contact = $request->input('contact');
        $student->Address = $request->input('address');
        $student->Course = $request->input('course');
        $student->save();
        return redirect('/student')->with('success','Record created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::find($id);
        return view('pages.Information.studentView')
        ->with('student', $student);
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = course::all();
        $student = student::find($id);
        return view('pages.Information.studentEdit')
        ->with('student', $student)
        ->with('courses', $courses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = student::find($id);
        $student->Fname = $request->input('fname');
        $student->Mname = $request->input('mname');
        $student->Lname = $request->input('lname');
        $student->Gender = $request->input('gender');
        $student->Contact = $request->input('contact');
        $student->Address = $request->input('address');
        $student->Course = $request->input('course');
        $student->save();
        return redirect('student/'.$id)->with('success','Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('student')->with('success','Record Deleted successfully!');
    }
}
