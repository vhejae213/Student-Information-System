@extends('layouts.app')

@section('content')
<form method="POST" action="{{action('StudentController@store')}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>
    <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="fname" value="" required autofocus>
            
        </div>
    </div>
    <div class="form-group row">
    <label for="mname" class="col-md-4 col-form-label text-md-right">Middle Name</label>
    <div class="col-md-6">
    <input id="mname" type="text" class="form-control" name="mname" value="" required autofocus>
    
    </div>
    </div>
    <div class="form-group row">
    <label for="lname" class="col-md-4 col-form-label text-md-right">Last Name</label>
    <div class="col-md-6">
        <input id="lname" type="text" class="form-control" name="lname" value="" required autofocus>
        
    </div>
    </div>
    <div class="form-group row">
    <label for="contact" class="col-md-4 col-form-label text-md-right">Contact No.</label>
    <div class="col-md-6">
        <input id="contact" type="number" class="form-control" name="contact" value="" required autofocus>
    </div>
    </div>

    <div class="form-group row">
    <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
    <div class="col-md-6">
        <input id="address" type="text" class="form-control" name="address" value="" required autofocus>
    </div>
    </div> 
    <div class="form-group row">
        <label for="inputState" class="col-md-4 text-md-right">Course</label>
            <div class="col-md-6">
        <select id="inputState" class="form-control"  name="course">
                @if (count($courses) > 0)
                @foreach ($courses as $course)
                <option value="{{$course->Course}}">{{$course->Course}} {{$course->c_Abbreviation}}</option>
                @endforeach 

            @else
            <option value="">Please Add Course On School tab</option>
             @endif
        </select>
        </div>
    </div>                                    
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Add 
                Student
            </button>
        </div>
    </div>
</form>
@endsection