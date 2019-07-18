@extends('layouts.app')

@section('content')

  

<h3>{{$student->Fname}} {{$student->Mname}} {{$student->Lname}}</h3>
<h5>{{$student->Course}}</h5>
<p>{{$dept->Departent}}</p>
<form action="{{action('SchoolController@store')}}" method="post">
<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
<input name="stud_id" type="hidden" value="{{$student->id}}"/>
<div class="row">
    <button type="submit" class="btn btn-primary col-md-2">Add Time</button>
    <select name="" id="" class="form-control col-md-10">
    @if (count($subjects) > 0)
    @foreach ($subjects as $subject)
        <option value="{{$subject->id}}">{{$subject->code}} {{$subject->descriptive}} {{$subject->time}} {{$subject->day}}</option>
    @endforeach
    @endif
    </select>
</div>
</form>
<table class="table">
    <tr>
        <th></th>
        <th>M</th>
        <th>T</th>
        <th>W</th>
        <th>Th</th>
        <th>F</th>
        <th>S</th>
        <th>Su</th>
    </tr>
    <tr>
        <td>07:30 Am</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>08:00 Am</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>SocSci 104</td>
        <td>SocSci 104</td>
    </tr>
    <tr>
        <td>08:30 Am</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>SocSci 104</td>
        <td>SocSci 104</td>
    </tr>
    <tr>
        <td>09:00 Am</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>SocSci 104</td>
        <td>SocSci 104</td>
    </tr>
    <tr>
        <td>09:30 Am</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>SocSci 104</td>
        <td>SocSci 104</td>
    </tr>
    <tr>
        <td>10:00 Am</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>SocSci 104</td>
        <td>SocSci 104</td>
    </tr>
    <tr>
        <td>10:30 Am</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>Elective 104</td>
        <td>SocSci 104</td>
        <td>SocSci 104</td>
    </tr>
    <tr>
        <td>11:00 Am</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>11:30 Am</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>12:00 Pm</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>12:30 Pm</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>01:00 Pm</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>01:30 Pm</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td>Elective 103</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>02:00 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>02:30 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>03:00 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>03:30 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>04:00 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>04:30 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>05:00 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>05:30 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>06:00 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>06:30 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>07:00 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>07:30 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>08:00 Pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
@endsection