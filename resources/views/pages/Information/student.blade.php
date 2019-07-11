@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Student Information</h1>
        <a href="/#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="row">
        <input type="search" name="" id="" class="form-control col-md-6" placeholder="search">
        <a href="/student=Create" class="btn btn-primary offset-md-4 col-md-2">Add Student</a>
    </div>
        <table class="table">
            <tr>
                <th>ID No.</th>
                <th>Name</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>21233212</td>
                <td>Example Name</td>
                <td>BSIT</td>
                <td><a href="/student=View" class="btn btn-primary">View</a> <a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-primary">Delete</a></td>
            </tr>
        </table>
@endsection