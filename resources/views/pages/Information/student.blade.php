@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Student Information</h1>
        <a href="/#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="row">
        <input type="search" name="" id="" class="form-control col-md-6" placeholder="search">
        <a href="/student/create" class="btn btn-primary offset-md-4 col-md-2">Add Student</a>
    </div>
        <table class="table">
            <tr>
                <th>ID No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
            @if (count($students) > 0)
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->Fname}} {{$student->Mname}} {{$student->Lname}}</td>
                    <td>{{$student->Gender}}</td>
                    <td>{{$student->Course}}</td>
                <td><a href="/student/{{$student->id}}" class="btn btn-primary">view</a></td>
                </tr>
                @endforeach 

            @else
            No Inputs
             @endif
        </table>
@endsection