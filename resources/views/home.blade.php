@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  
                    You are a User.
                </div>
                <div class="pull-right">
                <a class="btn btn-info" href="{{ route('prescriptions.create') }}"> Create New Prescription</a>
            </div>

            </div>
        </div>
    </div>
</div>
@endsection