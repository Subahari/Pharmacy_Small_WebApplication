@extends('prescriptions.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Prescription</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('prescriptions.index') }}"> Back</a>
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
    
    <form action="{{ route('prescriptions.update',$prescription->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Drug:</strong>
                    <input type="text" name="drug" value="{{ $prescription->drug }}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DeliveryAddress:</strong>
                <input type="text" name="deliveryAddress"  value="{{ $prescription->deliveryAddress }}" class="form-control" placeholder="deliveryAddress">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DeliveryTime:</strong>
                <input type="text" name="deliveryTime"  value="{{ $prescription->deliveryTime }}" class="form-control" placeholder="deliveryTime">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $prescription->image }}" width="300px">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Note:</strong>
                <input type="text" class="form-control" style="height:150px" value="{{ $prescription->note }}" name="note" placeholder="note"></input>
            </div>
        </div>
           

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity:</strong>
                <input type="number" name="quantity" class="form-control" placeholder="quantity" value="{{ $prescription->quantity }}">
            </div>
        </div>

         
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection