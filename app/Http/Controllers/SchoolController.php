<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\course;
use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depts = Department::all();
        $courses = course::all();
        return view('pages.School.school')
        ->with('depts', $depts)
        ->with('courses', $courses);
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
        if($request->submit == "dept"){
            $this->validate($request, [
                'DepartmentName' => 'required',
                'DepartmentAbbreviation' => 'required',
            ]);
            $dept = new Department;
            $dept->Departent = $request->input('DepartmentName');
            $dept->d_Abbreviation = $request->input('DepartmentAbbreviation');
            $dept->save();
            return redirect('/school')->with('success','Item created successfully!');
        }else if($request->submit == "course"){
            $this->validate($request, [
                'CourseName' => 'required',
                'CourseAbbreviation' => 'required',
            ]);
            $Cou = new course;
            $Cou->Departent_id = $request->input('dept_id');
            $Cou->Course = $request->input('CourseName');
            $Cou->c_Abbreviation = $request->input('CourseAbbreviation');
            $Cou->save();
            return redirect('/school')->with('success','Item created successfully!');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            if($request->submit == "delc"){
            $delc = course::find($id);
            $delc->delete();
            return redirect('/school')->with('success','Item deleted successfully!');
        }else if($request->submit == "deld"){
            Department::where('id', $id)->delete();
            course::where('Departent_id', $id)->delete();
            return redirect('/school')->with('success','Item deleted successfully!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
