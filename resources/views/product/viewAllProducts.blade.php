@extends('product.employee')
@section('content')
<form class="form-inline  d-flex justify-content-center mt-5" action="{{url('/searchProduct')}}" method="post" >
    @csrf
      <input class="form-control " name="name" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success mx-2 my-sm-0" type="submit">Search</button>
    </form>
<div class="container d-flex justify-content-right mt-5 ">
    <div class="row " id="product">
         @foreach($products as $product)
    <div class="col-md-3  " >
        <div class="productt text-right border "  >
          
        <img src="images/mofasa.jpg" class="imgg " >    
        <h2><span class="badge badge-primary w">{{$product->productCat}}</span> {{$product->productName}}</h2>
       <p>{{$product->productDesc}}</p>
       <div class="price"><h4>{{$product->buyPrice}}</h4></div>
       <div class=" " style="margin-left: 50%; width:auto">
       <h2 class=" rounded-pill ml-3 px-3  " style="background-color: green;"> :الكمية  </h2><p style="font-size:30px; font-weight :bold">{{$product->productAmount}}</p>
       <h2 class=" rounded  px-2 py-1  " style="background-color: green;"> :سعرالبيع</h2>{{$product->sellPrice}}
       <h2  class=" rounded ml-3 px-1 py-1 " style="background-color: green;"> :الربح </h2>{{$product->profit}}
       </div>
       
            
       <div class=" d-flex align-items-center justify-content-center">
       <form class=" mx-2 py-2 none  my-lg-0" action="{{url('/sellProductForm',$product->id)}}"method="post">
                @csrf
            <button  class="btn btn-primary ">بيع</button>
            </form>
      <form class=" none mx-2 my-lg-0" action="{{url('/updateProductForm',$product->id)}}" method="post">
      @csrf
            <button  class="btn btn-warning" >تعديل</button>
            </form>
            <form class="none mx-2 py-2  my-lg-0" action="{{url('/deleteProduct',$product->id)}}"method="post">
                @csrf
            <button class="btn btn-danger ">مسح</button>
            </form>
        </div>
            </div>
       </div>
       @endforeach
    </div>
</div>
@endsection