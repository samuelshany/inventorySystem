@extends('product.employee')
@section('content')
<div class="container w-50">
            <h1 class=" mt-3 text-center"> بيانات المورد </h1>
            <div class="row" id="productForm">
            <div class="col-md-12">
            <div class="product">
                @foreach($supplier as $pro)
                <form method="post" action="{{url('/updateSupplier',$pro->id)}}">
                    @csrf
        <div class="form-group text-right">
            <label >اسم المورد </label>
            <input  class="form-control" value="{{$pro->supplierName}} " type="text" name="name" id="productNameInp">
        </div>
       
        <div class="form-group text-right">
            <label > التليفون</label>
            <input class="form-control" value="{{$pro->supplierPhone}} " name="phone" type="text"   >
        </div>
        <div class="form-group text-right">
            <label >العنوان  </label>
            <input class="form-control" value="{{$pro->supplierAddress}} " name="address" type="text"   >
        </div>
        
        <button  id="addbtn" class="btn btn-outline-primary align-right">تعديل مورد</button>
        </form>
    </div>
    @endforeach
</div>
            </div>
        </div>

@endsection