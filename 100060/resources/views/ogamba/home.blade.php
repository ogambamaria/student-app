@extends('layouts.default')
@section('content')
  <style>
    a.custom,
    a.custom:hover {
    color: inherit;
    }
  </style>
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Student-Fees Application</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-6">
          <a href="student" class="custom">
            <div>
              <h4 class="service-heading">Students</h4>
              <p class="text-muted">Register a new student.</p>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="fees" class="custom">
            <div>
              <h4 class="service-heading">Fees</h4>
              <p class="text-muted">Record new fees payment for a student.</p>
            </div>
          </a>
        </div>
      </div>

      <br>

      <div class="row text-center">
        <div class="col-md-6">
          <a href="registered" class="custom">
            <div>
              <h4 class="service-heading">Registered Students</h4>
              <p class="text-muted">See more...</p>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="paid" class="custom">
            <div>
              <h4 class="service-heading">Paid Fees</h4>
              <p class="text-muted">See more...</p>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section>
@stop
