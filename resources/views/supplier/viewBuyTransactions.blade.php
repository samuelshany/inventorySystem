@extends('product.employee')
@section('content')
<form class="form-inline  d-flex justify-content-center mt-5" action="{{url('/searchSupplierTransaction')}}" method="post" >
    @csrf
      <input class="form-control " name="start" type="date"  aria-label="start" >
      <input class="form-control " name="end" type="date"  aria-label="Search">
      <button class="btn btn-outline-success mx-2 my-sm-0" type="submit">Search</button>
    </form>
<table class="table table-striped text-center ">
  <thead  style="background-color: green;">
    <tr class="">
    <th class="" scope="col">التاريخ</th>
    <th class="" scope="col">التكلفة</th>
    <th class="" scope="col">السعر</th>
    <th class="" scope="col">الكمية</th>
    <th class="" scope="col">اسم المنتج</th>
    <th class=" " scope="col">اسم المورد</th>
    </tr>
  </thead>
  <tbody>
      @foreach($transactions as $transaction)
    <tr>
    <td>{{$transaction->date}}</td>
    <td>{{$transaction->totalPayment}}</td>
    <td>{{$transaction->price}}</td>
    <td>{{$transaction->amount}}</td>
    <td>{{$transaction->pName}}</td>
    <th >{{$transaction->sName}}</th>
    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection
