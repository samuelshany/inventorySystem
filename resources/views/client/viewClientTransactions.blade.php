@extends('product.employee')
@section('content')
<div class="container d-flex justify-content-right mt-5 ">
    <div class="row ">
         @foreach($products as $product)
    <div class="col-md-3  ">
        <div class="productt text-right " >
        <img src="images/mofasa.jpg" class="imgg " >    
        <h2><span class="badge badge-primary w">{{$product->productCat}}</span> {{$product->productName}}</h2>
       <p>{{$product->productDesc}}</p>
       <div class="price"><h4>{{$product->buyPrice}}</h4></div>
       <h2> الكمية :{{$product->productAmount}} </h2>
       <h3> سعر البيع :{{$product->sellPrice}} </h3>
       <h2> الربح :{{$product->profit}} </h2>
       <form class="form-inline mx-2 py-2  my-lg-0" action="{{url('/sellProductForm',$product->id)}}"method="post">
                @csrf
            <button class="btn btn-primary ">بيع</button>
            </form>
      <form class=" form-inline mx-2 my-lg-0" action="{{url('/updateProductForm',$product->id)}}" method="post">
      @csrf
            <button formaction="{{url('/updateProductForm',$product->id)}}" class="btn btn-warning" >تعديل</button>
            </form>
            <form class="form-inline mx-2 py-2  my-lg-0" action="{{url('/deleteProduct',$product->id)}}"method="post">
                @csrf
            <button class="btn btn-danger ">مسح</button>
            </form>

            </div>
       </div>
       @endforeach
    </div>
</div>
@endsection