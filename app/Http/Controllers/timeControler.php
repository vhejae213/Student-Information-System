<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;
use App\Subject;
use App\time;

class timeControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('pages.Time.timeTable')
        ->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = new time;
        $time->student_id = $request->input('stud');
        $time->subject_id = $request->input('sub_id');
        $time->save();
        return back()->with('success','Subject created successfully!');
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
        $times = DB::table('subjects')
        ->select('subjects.time', 'subjects.code', 'subjects.descriptive', 'times.id')
        ->join('times','times.subject_id','=','subjects.id')
        ->join('students','students.id','=','times.student_id')
        ->where('students.id', $student->id)
        ->get();
        $dept = DB::table('departments')
        ->select('departments.*')
        ->join('courses','courses.Departent_id','=','departments.id')
        ->where('courses.Course', $student->Course)
        ->first();
        $subjects = Subject::all();

        $monday = DB::table('subjects')
        ->select('subjects.*')
        ->join('times','times.subject_id','=','subjects.id')
        ->Where('subjects.day', 'like', '%M%')
        ->get();
        $tuesday = DB::table('subjects')
        ->select('subjects.*')
        ->join('times','times.subject_id','=','subjects.id')
        ->Where('subjects.day', 'like', '%T%')
        ->get();
        $wednesday = DB::table('subjects')
        ->select('subjects.*')
        ->join('times','times.subject_id','=','subjects.id')
        ->Where('subjects.day', 'like', '%W%')
        ->get();
        $thursday = DB::table('subjects')
        ->select('subjects.*')
        ->join('times','times.subject_id','=','subjects.id')
        ->Where('subjects.day', 'like', '%Th%')
        ->get();
        $friday = DB::table('subjects')
        ->select('subjects.*')
        ->join('times','times.subject_id','=','subjects.id')
        ->Where('subjects.day', 'like', '%F%')
        ->get();
        $saturday = DB::table('subjects')
        ->select('subjects.*')
        ->join('times','times.subject_id','=','subjects.id')
        ->Where('subjects.day', 'like', '%S%')
        ->get();
        $sunday = DB::table('subjects')
        ->select('subjects.*')
        ->join('times','times.subject_id','=','subjects.id')
        ->Where('subjects.day', 'like', '%Su%')
        ->get();
        return view('pages.Time.timeSubj')
        ->with('student', $student)
        ->with('subjects', $subjects)
        ->with('dept', $dept)
        ->with('times', $times)
        ->with('monday', $monday)
        ->with('tuesday', $tuesday)
        ->with('wednesday', $wednesday)
        ->with('thursday', $thursday)
        ->with('friday', $friday)
        ->with('saturday', $saturday)
        ->with('sunday', $sunday);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $time = time::find($id);
        $time->delete();
        return back()->with('success','Record Deleted successfully!');
    }
}
