@extends('product.employee')
@section('content')
<div class="container w-50 ">
            <h1 class="  h1 text-center"> بيانات المنتج </h1>
            <div class="row" id="productForm">
            <div class="col-md-12">
            <div class="product">
                <form method="post" action="{{url('/addProduct')}}">
                    @csrf
        <div class="form-group text-right">
            <input  class="form-control" type="text" name="name" placeholder="اسم المنتج" id="productNameInp">
        </div>
        <div class="form-group text-right">
                       
                        <select class="custom-select" name="supplier" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        @foreach($suppliers as $supplier)
                            <option value="{{$supplier->supplierName}}">{{$supplier->supplierName}}</option>
                        @endforeach
                        </select>
                    </div>
        <div class="form-group text-right">
        
            <select class="custom-select" name="category" id="productCatInp" aria-label="Example select with button addon">
           
                <option value="mobile">mobile</option>
                <option value="TV">TV</option>
                <option value="other">other</option>
              </select>
        </div>
        <div class="form-group text-right">
            <input class="form-control" placeholder="سعر الشراء" name="buyprice" type="text"   >
        </div>
        <div class="form-group text-right">
            
            <input class="form-control" placeholder="سعر البيع" name="sellprice" type="text"   >
        </div>
        <div class="form-group text-right">
            
            <input class="form-control" name="amount" placeholder="الكمية" type="text"   >
        </div>
        <div class="form-group text-right">
            
            <textarea class="form-control" name="desc" placeholder="الوصف" id="productDescInp"></textarea>
        </div>
        <div class="form-group">
                       
                        <input class="form-control" name="date" type="date" >
                    </div> 
        <button  id="addbtn" class="btn btn-outline-primary align-right">اضافة منتج</button>
        </form>
    </div>
</div>
            </div>
        </div>

@endsection