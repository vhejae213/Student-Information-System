<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
</head>
<body>
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
</body>
</html>