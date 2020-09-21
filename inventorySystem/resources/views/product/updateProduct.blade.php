@extends('product.employee')
@section('content')
<div class="container w-50">
            <h1 class=" mt-3 text-center"> بيانات المنتج </h1>
            <div class="row" id="productForm">
            <div class="col-md-12">
            <div class="product">
                @foreach($product as $pro)
                <form method="post" action="{{url('/updateProduct',$pro->id)}}">
                    @csrf
        <div class="form-group text-right">
            <label >اسم المنتج </label>
            <input  class="form-control" value="{{$pro->productName}} " type="text" name="name" id="productNameInp">
        </div>
        <div class="form-group text-right">
        <label> النوع</label>
            <select class="custom-select" value="{{$pro->productCat}} " name="category" id="productCatInp" aria-label="Example select with button addon">
           
                <option value="mobile">mobile</option>
                <option value="TV">TV</option>
                <option value="other">other</option>
              </select>
        </div>
        <div class="form-group text-right">
            <label >سعر الشراء</label>
            <input class="form-control" value="{{$pro->buyPrice}} " name="buyprice" type="text"   >
        </div>
        <div class="form-group text-right">
            <label >سعر البيع </label>
            <input class="form-control" value="{{$pro->sellPrice}} " name="sellprice" type="text"   >
        </div>
        <div class="form-group text-right">
            <label > الكمية </label>
            <input class="form-control" value="{{$pro->productAmount}}" name="amount" type="text"   >
        </div>
        <div class="form-group text-right">
            <label >الوصف</label>
            <textarea class="form-control" name="desc"  id="productDescInp">{{$pro->productDesc}}</textarea>
        </div>
        <button  id="addbtn" class="btn btn-outline-primary align-right">تعديل منتج</button>
        </form>
    </div>
    @endforeach
</div>
            </div>
        </div>

@endsection