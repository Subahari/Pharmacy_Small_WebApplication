@extends('layouts.app')

     
@section('content')
    <div class="row ">
       
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     <div class="row justify-content-center mx-5 px-5 mt-5">

     <div class="col-lg-12 margin-tb mb-5">
            <div class="pull-left">
                <h2>Prescription Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('prescriptions.create') }}"> Create New Prescription</a>
            </div>
        </div>

<table class="table-primary">
        <tr>
            <th>No</th>
            <th>DeliveryAddress</th>
            <th>DeliveryTime</th>
            <th>Image</th>
            <!-- <th>Name</th> -->
            <th>Note</th>
            <!-- <th >Quantity</th> -->
            <th width="280px">Action</th>
            
        </tr>
        @foreach ($prescriptions as $prescription)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $prescription->deliveryAddress }}</td>
            <td>{{ $prescription->deliveryTime }}</td>
            <td><img src="/images/{{ $prescription->image }}" width="100px"></td>
            <!-- <td>{{ $prescription->drug }}</td> -->
            <td>{{ $prescription->note}}</td>
            <!-- <td>{{ $prescription->quantity}}</td> -->
            <td>
                <form action="{{ route('prescriptions.destroy',$prescription->id) }}" method="POST">
     
                    <a class="btn btn-success" href="{{ route('prescriptions.show',$prescription->id) }}">Show</a>
      
                    <a class="btn btn-warning" href="{{ route('prescriptions.edit',$prescription->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     </div>
    
    
    {!! $prescriptions->links() !!}
        
@endsection