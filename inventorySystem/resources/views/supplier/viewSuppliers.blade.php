@extends('product.employee')
@section('content')
<div class="container d-flex justify-content-right mt-5 ">
    <div class="row ">
         @foreach($suppliers as $client)
    <div class="col-md-3  ">
        <div class="productt text-right " >
        <img src="images/mofasa.jpg" class="imgg " >    
        
    
       <h2> الاسم :{{$client->supplierName}} </h2>
       <h3>  التليفون :{{$client->supplierPhone}} </h3>
       <h2> العنوان :{{$client->supplierAddress}} </h2>
      
      <form class=" form-inline mx-2 my-lg-0" action="{{url('/updateSupplierForm',$client->id)}}" method="post">
      @csrf
            <button  class="btn btn-warning" >تعديل</button>
            </form>
            <form class="form-inline mx-2 py-2  my-lg-0" action="{{url('/deleteSupplier',$client->id)}}"method="post">
                @csrf
            <button class="btn btn-danger ">مسح</button>
            </form>

            </div>
       </div>
       @endforeach
    </div>
</div>
@endsection