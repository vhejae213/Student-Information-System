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
     <tr>
         <td>Example Name</td>
         <td>College of Computer Studies</td>
         <td>BSIT</td>
         <td><a href="/time=View" class="btn btn-primary">View</a></td>
     </tr>
 </table>
@endsection