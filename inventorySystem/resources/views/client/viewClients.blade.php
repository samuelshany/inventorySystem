@extends('product.employee')
@section('content')
<div class="container d-flex justify-content-right mt-5 ">
    <div class="row ">
         @foreach($clients as $client)
    <div class="col-md-3  ">
        <div class="productt text-right " >
        <img src="images/mofasa.jpg" class="imgg " >    
        
    
       <h2> الاسم :{{$client->clientName}} </h2>
       <h3>  التليفون :{{$client->clientPhone}} </h3>
       <h2> العنوان :{{$client->clientAddress}} </h2>
      
      <form class=" form-inline mx-2 my-lg-0" action="{{url('/updateClientForm',$client->clientName)}}" method="post">
      @csrf
            <button  class="btn btn-warning" >تعديل</button>
            </form>
            <form class="form-inline mx-2 py-2  my-lg-0" action="{{url('/deleteClient',$client->clientName)}}"method="post">
                @csrf
            <button class="btn btn-danger ">مسح</button>
            </form>

            </div>
       </div>
       @endforeach
    </div>
</div>
@endsection