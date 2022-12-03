@extends('prescriptions.layout')
  
@section('content')
<div class="row ">
    <div class="col-lg-12 margin-tb card-header">
        <div class="pull-left">
            <h2>Add New Prescriptions</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('prescriptions.index') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     <div class="row mt-5">

     </div>
<form action="{{ route('prescriptions.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Drug:</strong>
                <input type="text" name="drug" class="form-control" placeholder="Drug">
            </div>
        </div> -->

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DeliveryAddress:</strong>
                <input type="text" name="deliveryAddress" class="form-control" placeholder="deliveryAddress">
            </div>
        </div>

     
       <input type="text" name="user_id" class="form-control" value="{{ Auth::user()->id  }}" hidden>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DeliveryTime:</strong>
                <input type="text" name="deliveryTime" class="form-control" placeholder="deliveryTime">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Note:</strong>
                <textarea class="form-control" style="height:150px" name="note" placeholder="note"></textarea>
            </div>
        </div>

        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity:</strong>
                <input type="number" name="quantity" class="form-control" placeholder="quantity">
            </div>
        </div> -->
     
        <div class="col-xs-12 col-sm-12 col-md-12 text-center my-5">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection