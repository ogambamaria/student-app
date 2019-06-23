@extends('layouts.default')
<br>
@section('content')
<div class="container" style="padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="" autocomplete="off">
                        @csrf
                        <div class="form-group row">
                            <label for="student_no" class="col-md-4 col-form-label text-md-right">{{ __('Student Number') }}</label>
                            <div class="col-md-6">
                                <input id="student_no" type="text" class="form-control" name="student_no" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="full_name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>
                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control" name="full_name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control" name="dob" required autofocus>
                                <small>Format: dd/mm/yyyy</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
