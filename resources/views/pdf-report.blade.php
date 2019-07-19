<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIS</title>

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Student Information</h1>
    </div>
        <table class="table" border="1">
            <tr>
                <th>ID No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Course</th>
            </tr>
            @if (count($students) > 0)
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->Fname}} {{$student->Mname}} {{$student->Lname}}</td>
                    <td>{{$student->Gender}}</td>
                    <td>{{$student->Course}}</td>
                </tr>
                @endforeach 

            @else
            No Inputs
             @endif
        </table>
        
</body>

</html>