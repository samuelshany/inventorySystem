@extends('product.employee')
@section('content')

<div class="container">
    <div class="row">
        @foreach($product as $pro)
        <div class="col-md-12">
            <div class="product">
                <form action="{{url('/sellProduct',$pro->id)}}" method="post">
                    @csrf
                    
                    <div class="form-group">
                        <label >اسم العميل</label>
                        <select class="custom-select" name="client" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        @foreach($clients as $client)
                            <option value="{{$client->clientName}}">{{$client->clientName}}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label >الكمية</label>
                        <input class="form-control" type="number" name="sellamount" required placeholder="{{$pro->productAmount}}">
                    </div>
                    <div class="form-group">
                        <label >نسبة الخصم</label>
                        <input class="form-control" number="discound" required type="number">
                    </div>  
                    <div class="form-group">
                        <label > التاريخ</label>
                        <input class="form-control" name="date" required type="date" >
                    </div> 
            <button class="btn btn-primary ">بيع</button>
                    
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection