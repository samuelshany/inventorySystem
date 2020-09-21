@extends('product.employee')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">اسم العميل</th>
      <th scope="col">اسم المنتج</th>
      <th scope="col">الكمية</th>
      <th scope="col">السعر</th>
      <th scope="col">المكسب</th>
      <th scope="col">التاريخ</th>
    </tr>
  </thead>
  <tbody>
      @foreach($transactions as $transaction)
    <tr>
      <th scope="row">{{$transaction->client->clientName}}</th>
      <td>{{$transaction->pName}}</td>
      <td>{{$transaction->amount}}</td>
      <td>{{$transaction->price}}</td>
      <td>{{$transaction->profit}}</td>
      <td>{{$transaction->date}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection
