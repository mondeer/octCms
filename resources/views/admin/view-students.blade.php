@extends('admin.index')

@section('content')
    <div class="col-md-12">
      <a class="btn btn-success btn-lg pull-right" href="/system/enroll-student">Enroll Student</a>
        <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th> Admission Number</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th> Gender</th>
                <th> DOB</th>
                <th> Course</th>
                <th> Naional ID</th>
                <th> Phone</th>
                <th> Address</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)
                <tr>
                  <td>{{$student->id}}</td>
                  <td>{{$student->reg_no}}</td>
                  <td>{{$student->first_name}}</td>
                  <td>{{$student->middle_name}}</td>
                  <td>{{$student->last_name}}</td>
                  <td>{{$student->gender}}</td>
                  <td>{{$student->dob}}</td>
                  <td>{{$student->course}}</td>
                  <td>{{$student->national_id}}</td>
                  <td>{{$student->mobile}}</td>
                  <td>{{$student->postal_address}}</td>
                  <td>
                    <form class="deletestu" action="/schooladmin/students/{{ $student->id }}/delete" method="post">
                      <input type="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection
