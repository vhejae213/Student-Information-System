<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
  

<h3>{{$student->Fname}} {{$student->Mname}} {{$student->Lname}}</h3>
<h5>{{$student->Course}}</h5>
<p>{{$dept->Departent}}</p>

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
                @endif
            </td>
            <td>
                @if (count($tuesday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                
                @endif
            </td>
            <td>
                @if (count($wednesday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                
                @endif
            </td>
            <td>
                @if (count($thursday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                
                @endif
            </td>
            <td>
                @if (count($friday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                
                @endif
            </td>
            <td>
                @if (count($saturday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                
                @endif
            </td>
            <td>
                @if (count($sunday) > 0)
                {{$time->descriptive}}<br>
                {{$time->time}}
                
                @endif
            </td>
       </tr>
       @endforeach
       @endif
</body>
</html>