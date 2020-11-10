@extends('product.employee')
@section('content')
<form class="form-inline  d-flex justify-content-center mt-5" action="{{url('/searchClientTransaction')}}" method="post" >
    @csrf
      <input class="form-control " name="start" type="date"  aria-label="Search">
      <input class="form-control " name="end" type="date"  aria-label="Search">
      <button class="btn btn-outline-success mx-2 my-sm-0" type="submit">Search</button>
    </form>
<table class="table table-striped text-center">
<thead  style="background-color: green;">
    <tr class="">
    <th class="" scope="col">التاريخ</th>
    <th class="" scope="col">التكلفة</th>
    <th class="" scope="col">السعر</th>
    <th class="" scope="col">الكمية</th>
    <th class="" scope="col">اسم المنتج</th>
    <th class=" " scope="col">اسم العميل</th>
    </tr>
  </thead>
  <tbody>
  <tbody>
      @foreach($transactions as $transaction)
    <tr>
    <td>{{$transaction->date}}</td>
    <td>{{$transaction->profit}}</td>
      <td>{{$transaction->price}}</td>
      <td>{{$transaction->amount}}</td>
      <td>{{$transaction->pName}}</td>
      <th scope="row">{{$transaction->client->clientName}}</th>
    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection
