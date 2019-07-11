@extends('layouts.app')

@section('content')
    <a href="/student" class="btn btn-primary">Go Back</a>
    <br><br>
    <p><b>Name</b><i>(First name, Middle name, Last Name)</i></p>
    <p class="text-capitalize">Example Name</p>
    <p><b>Contact</b></p>
    <p class="text-capitalize">09140526556</p>
    <p><b>Address</b></p>
    <p class="text-capitalize">asdasdasd</p>
    <p><b>Course</b></p>
    <p class="text-capitalize">BSIT</p>
    <hr>

    <div class="row">

    <a href="/student" class="btn btn-primary col-md-2">Edit</a>
    <form class="col-md-6" action="">
            <input type="hidden" name="_method" value="delete" />
            <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    </div>

@endsection