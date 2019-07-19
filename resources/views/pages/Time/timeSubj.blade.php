@extends('layouts.app')

@section('content')
<a href="timepdf/{{$student->id}}" class="btn bnt-primary col-md-2">generate report</a>
<h3>{{$student->Fname}} {{$student->Mname}} {{$student->Lname}}</h3>
<h5>{{$student->Course}}</h5>
<p>{{$dept->Departent}}</p>
<form action="{{action('timeControler@store')}}" method="post">
<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
<input class="d-none" name="stud" type="text" value="{{$student->id}}"/>
<div class="row">
    <button type="submit" class="btn btn-primary col-md-2">Add Time</button>
    
    <select name="sub_id" id="" class="form-control col-md-10">
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
        <th>M</th>
        <th>T</th>
        <th>W</th>
        <th>Th</th>
        <th>F</th>
        <th>S</th>
        <th>Su</th>
    </tr>
    @if (count($times) > 0)
    @foreach ($times as $time)
       <tr>
           <td>
                @if (count($monday) > 0)
                {{$time->descriptive}} <br>
                {{$time->time}}
                <form method="POST" action="{{action('timeControler@destroy', $time->id)}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="_method" type="hidden" value="DELETE"/>
                        <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                @endif
            </td>
            <td>
                @if (count($tuesday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                <form method="POST" action="{{action('timeControler@destroy', $time->id)}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="_method" type="hidden" value="DELETE"/>
                        <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                @endif
            </td>
            <td>
                @if (count($wednesday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                <form method="POST" action="{{action('timeControler@destroy', $time->id)}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="_method" type="hidden" value="DELETE"/>
                        <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                @endif
            </td>
            <td>
                @if (count($thursday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                <form method="POST" action="{{action('timeControler@destroy', $time->id)}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="_method" type="hidden" value="DELETE"/>
                        <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                @endif
            </td>
            <td>
                @if (count($friday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                <form method="POST" action="{{action('timeControler@destroy', $time->id)}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="_method" type="hidden" value="DELETE"/>
                        <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                @endif
            </td>
            <td>
                @if (count($saturday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                <form method="POST" action="{{action('timeControler@destroy', $time->id)}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="_method" type="hidden" value="DELETE"/>
                        <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                @endif
            </td>
            <td>
                @if (count($sunday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                <form method="POST" action="{{action('timeControler@destroy', $time->id)}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input name="_method" type="hidden" value="DELETE"/>
                        <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                @endif
            </td>
       </tr>
    @endforeach
    @endif
@endsection