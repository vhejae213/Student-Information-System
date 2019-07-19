<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;
use App\Subject;
use App\time;
use PDF;

class pdfController extends Controller
{
   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function downloadPDF($id){
        $student = student::find($id);
        $pdf = PDF::loadView('myPDF', compact('student'));
  
        return $pdf->download('Student.pdf');
  
      }

    public function report(){
        $students = student::all();
        $pdf = PDF::loadView('pdf-report', compact('students'));
  
        return $pdf->download('Student.pdf');
  
      }
       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function timereport($id){

       $student = student::find($id);
       $times = DB::table('subjects')
       ->select('subjects.time', 'subjects.code', 'subjects.descriptive', 'times.id')
       ->join('times','times.subject_id','=','subjects.id')
       ->join('students','students.id','=','times.student_id')
       ->where('students.id', $id)
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
        $pdf = PDF::loadView('pages.pdf-timetable', compact('student', 'subjects', 'dept', 'times', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'));
  
        return $pdf->download('timetable.pdf');
  
      }
}
