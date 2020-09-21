@extends('employee.emp')
@section('content')
<div class="container w-50">
           
            <div class="row" id="productForm">
            <div class="col-md-12">
            <div class="product">
<form action="{{url('/login')}}" method="post">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  
<button class="btn btn-outline-primary" type="submit">login</button>
</form>
</div>
</div>
</div>
</div>

@endsection