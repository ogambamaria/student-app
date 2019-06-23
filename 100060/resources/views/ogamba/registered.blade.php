@extends('layouts.default')
@section('content')

    <div class="container-fluid">
        <br><br><br>
        <div class="card">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Student Number</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{$student->student_no}}</td>
                        <td>{{$student->full_name}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->address}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
