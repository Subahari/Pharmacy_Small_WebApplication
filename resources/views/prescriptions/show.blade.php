@extends('prescriptions.layout')
   
@section('content')
    <div class="row my-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Prescription</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('prescriptions.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row  mx-5 my-5 pb-5">
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Drug:</strong>
                {{ $prescription->drug }}
            </div>
        </div> -->

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DeliveryAddress:</strong>
                {{ $prescription->deliveryAddress }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DeliveryTime:</strong>
                {{ $prescription->deliveryTime }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/images/{{ $prescription->image }}" width="500px">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
            <div class="form-group">
                <strong>Note:</strong>
                {{ $prescription->note }}
            </div>
        </div>

        
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity:</strong>
                {{ $prescription->quantity }}
            </div>
        </div> -->


    </div>
@endsection