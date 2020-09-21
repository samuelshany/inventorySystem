@extends('product.employee')
@section('content')
<div class="container w-50">
            <h1 class=" mt-3 text-center"> بيانات العميل </h1>
            <div class="row" id="productForm">
            <div class="col-md-12">
            <div class="product">
                <form method="post" action="{{url('/addSupplier')}}">
                    @csrf
        <div class="form-group text-right">
            <label >اسم المورد </label>
            <input  class="form-control" type="text" name="name" >
        </div>
        <div class="form-group text-right">
            <label >رقم المورد</label>
            <input class="form-control" name="phone" type="text"   >
        </div>
        <div class="form-group text-right">
            <label >عنوان المورد </label>
            <input class="form-control" name="address" type="text"   >
        </div>
       
        <button  id="addbtn" class="btn btn-outline-primary align-right">اضافة مورد</button>
        </form>
    </div>
</div>
            </div>
        </div>

@endsection