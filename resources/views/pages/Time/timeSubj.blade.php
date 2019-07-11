@extends('layouts.app')

@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add time
</button>

<!-- Modal -->
<div class="row">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div>
      <label for="">Subject</label>
        <select name="" id="" class="form-control">
        <option value="">1</option>
        <option value="">2</option>
        </select>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
<h3>Example Name</h3>
<h5>Bachelor of Science in Information Technology</h5>
<p>College of Computer Studies</p>
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
        <td>SocSci 104</td>
        <td>SocSci 104</td>
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