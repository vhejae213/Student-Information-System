@extends('layouts.app')

@section('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Department
  </button>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{action('SchoolController@store')}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <label for="">Name</label>
            <input type="text" name="DepartmentName" id="" class="form-control">
            <label for="">Abbreviation</label>
            <input type="text" name="DepartmentAbbreviation" id="" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit" value="dept">Add Depertment</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1">
      Add Subject
    </button>
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{action('SchoolController@store')}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Subject</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <label for="">Code</label>
            <input type="text" name="code" id="" class="form-control">
            <label for="">Descriptive</label>
            <input type="text" name="descriptive" id="" class="form-control">
            <label for="">Time(Format HH:mm tt or 00:00 pm/am)</label>
            <input type="text" name="time" id="" class="form-control">
            <label for="">Day</label>
            <input type="text" name="day" id="" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit" value="sub">Add Subject</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<br><br>

<div class="row">

    @if (count($depts) > 0)
        @foreach ($depts as $dept)
        <div class="col-md-auto border-left-info border-bottom-info">
                <button type="button" class="btn-sm btn btn-success" data-toggle="modal" data-target="#exampleModal{{$dept->id}}">
                        Add Course To This Department
                      </button>
                      <form action="{{action('SchoolController@store')}}" method="post">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <input name="dept_id" type="hidden" value="{{$dept->id}}"/>
                      <div class="modal fade" id="exampleModal{{$dept->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Course</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                
                                    <label for="">Name</label>
                                    <input type="text" name="CourseName" id="" class="form-control">
                                    <label for="">Abbreviation</label>
                                    <input type="text" name="CourseAbbreviation" id="" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="submit" value="course">Add Course</button>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </form><br>
            <label for="" style="color:black">{{$dept->Departent}} ({{$dept->d_Abbreviation}})</label>
            <ul>
                @if (count($courses) > 0)
                    @foreach ($courses as $course)
                        @if ($course->Departent_id == $dept->id)
                        <li><label for="" class="d-inline-block">{{$course->Course}} ({{$course->c_Abbreviation}})</label><form action="{{action('SchoolController@update', $course->id)}}" class="d-inline-block" method="post"><input type="hidden" name="_method" value="PUT"><input name="_token" type="hidden" value="{{ csrf_token() }}"/><button type="submit" name="submit" value="delc" class="btn-sm btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash fa-sm" aria-hidden="true"></i></button></form> </li>   
                        @endif
                    
                    @endforeach
                @endif
            </ul>
            <form action="{{action('SchoolController@update', $dept->id)}} "method="post">
                <input type="hidden" name="_method" value="PUT">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <button type="submit" name="submit" value="deld" class="btn-sm btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                    <i class="fa fa-trash fa-sm" aria-hidden="true"></i> Remove Department
                </button>
                </form> 
        </div>
        @endforeach

        @else
            No Inputs
    @endif
    
    <table class="table">
        <tr>
            <th>Code</th>
            <th>Descriptive</th>
            <th>Time</th>
            <th>Day</th>
            <th>Action</th>
        </tr>
        @if (count($subjects) > 0)
          @foreach ($subjects as $subject)
              <tr>
                <td>{{$subject->code}}</td>
                <td>{{$subject->descriptive}}</td>
                <td>{{$subject->time}}</td>
                <td>{{$subject->day}}</td>
                <td>
                    <button type="button" class="btn-sm btn btn-primary" data-toggle="modal" data-target="#example{{$subject->id}}">
                        View
                      </button>
                      
                  <form action="{{action('SchoolController@update', $subject->id)}} "method="post">
                    <input type="hidden" name="_method" value="PUT">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <button type="submit" name="submit" value="dels" class="btn-sm btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="fa fa-trash fa-sm" aria-hidden="true"></i>
                    </button>
                    </form> 
                  </td>
              </tr>
              <div class="modal fade" id="example{{$subject->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="{{action('SchoolController@update', $subject->id)}}" method="post">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                      <input name="_method" type="hidden" value="PUT"/>
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Subject</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <label for="">Code</label>
                          <input type="text" name="code" id="" value="{{$subject->code}}" class="form-control">
                          <label for="">Descriptive</label>
                          <input type="text" name="descriptive" id="" value="{{$subject->descriptive}}" class="form-control">
                          <label for="">Time</label>
                          <input type="text" name="time" id="" value="{{$subject->time}}" class="form-control">
                          <label for="">Day</label>
                          <input type="text" name="day" id="" value="{{$subject->day}}" class="form-control">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit" value="subu">Update Subject</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
          
          @endforeach
        @endif
    </table>
</div>

@endsection