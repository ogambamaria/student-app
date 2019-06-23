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

                            <input id="full_name" type="hidden" class="form-control" name="full_name" required autofocus>

                            <div class="form-group row">
                                <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount Paid') }}</label>
                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control" name="amount" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="payment_date" class="col-md-4 col-form-label text-md-right">{{ __('Date Paid') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="payment_date" id="datepicker">
                                    <small>Format: dd/mm/yyyy</small>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Pay') }}
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
