@extends('layouts.app')

@section('content')
<div class="row">
    <input type="search" name="" id="" class="form-control col-md-6" placeholder="search">
</div>
 <table class="table">
     <tr>
         <th>Name</th>
         <th>Course</th>
         <th>Department</th>
         <th></th>
     </tr>
     @if (count($students) > 0)
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->Fname}} {{$student->Mname}} {{$student->Lname}}</td>
                    <td>{{$student->Gender}}</td>
                    <td>{{$student->Course}}</td>
                <td><a href="/time/{{$student->id}}" class="btn btn-primary">view</a></td>
                </tr>
                @endforeach 

            @else
            No Inputs
             @endif
 </table>
@endsection