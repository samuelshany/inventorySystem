@extends('product.employee')
@section('content')
<div class="container w-50">
            <h1 class=" mt-3 text-center"> بيانات العميل </h1>
            <div class="row" id="productForm">
            <div class="col-md-12">
            <div class="product">
                @foreach($client as $pro)
                <form method="post" action="{{url('/updateClient',$pro->clientName)}}">
                    @csrf
        <div class="form-group text-right">
            <label >اسم العميل </label>
            <input  class="form-control" value="{{$pro->clientName}} " type="text" name="name" id="productNameInp">
        </div>
       
        <div class="form-group text-right">
            <label > التليفون</label>
            <input class="form-control" value="{{$pro->clientPhone}} " name="phone" type="text"   >
        </div>
        <div class="form-group text-right">
            <label >العنوان  </label>
            <input class="form-control" value="{{$pro->clientAddress}} " name="address" type="text"   >
        </div>
        
        <button  id="addbtn" class="btn btn-outline-primary align-right">تعديل عميل</button>
        </form>
    </div>
    @endforeach
</div>
            </div>
        </div>

@endsection