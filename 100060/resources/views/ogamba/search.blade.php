@extends('layouts.default')
@section('content')
    <style>
        a.custom,
        a.custom:hover {
            color: inherit;
        }
    </style>
    <div class="container-fluid">
        <br><br><br>
        <div class="card">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Student Number</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Payment Date</th>
                    <th scope="col">Amount Paid</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($fees as $fee)
                    <tr>
                        <td>{{$fee->student_no}}</td>
                        <td>{{$fee->full_name}}</td>
                        <td>{{$fee->payment_date}}</td>
                        <td>{{$fee->amount}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tr><td>Total Fees: {{ $totalStudent }}</td></tr>
            </table>
        </div>

        <br>
        <a href="paid" class="custom">
            <div>
                <p class="text-muted">Go Back</p>
            </div>
        </a>

    </div>

@stop
