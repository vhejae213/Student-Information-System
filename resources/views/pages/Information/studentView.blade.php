@extends('layouts.app')

@section('content')
    <a href="generate-pdf/{{$student->id}}">Print</a>
    <a href="/student" class="btn btn-primary">Go Back</a>
    <br><br>
    <p><b>Name</b><i>(First name, Middle name, Last Name)</i></p>
    <p class="text-capitalize">{{$student->Fname}} {{$student->Mname}} {{$student->Lname}}</p>
    <p><b>Gender</b></p>
    <p class="text-capitalize">{{$student->Gender}}</p>
    <p><b>Contact</b></p>
    <p class="text-capitalize">{{$student->Contact}}</p>
    <p><b>Address</b></p>
    <p class="text-capitalize">{{$student->Address}}</p>
    <p><b>Course</b></p>
    <p class="text-capitalize">{{$student->Course}}<p>
    <hr>

    <div class="row">

    <a href="/student/{{$student->id}}/edit" class="btn btn-primary col-md-2">Edit</a>
    <form method="POST" action="{{action('StudentController@destroy', $student->id)}}" method="post">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <input name="_method" type="hidden" value="DELETE"/>
            <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    </div>

@endsection