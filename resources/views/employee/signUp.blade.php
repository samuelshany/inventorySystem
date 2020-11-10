@extends('employee.emp')
@section('content')
<div class="container w-50 mt-5">
           
            <div class="row" id="productForm">
            <div class="col-md-12">
            <div class="product">
<form action="{{url('/signup')}}" method="post">
@csrf
<div class="form-group">
    <label>name</label>
<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
<label>email</label>
<input type="email" name="email" class="form-control">
</div>


<div class="form-group">
    <label>password</label>
<input type="password" name="password" class="form-control">
</div>
<div class="form-group">
    <input type="radio" name="manager" value="1">manager
</br>
    <input type="radio" name="manager" value="0">not manager
</div>
<div class="form-group">
    <input type="radio" name="sales" value="1">sales
</br>
    <input type="radio" name="sales" value="0">not sales
</div>
<div class="form-group">
    <input type="radio" name="CS" value="1">Customer service
</br>
    <input type="radio" name="CS" value="0">not customer service
</div>
<div class="form-group">
    <input type="radio" name="Acountant" value="1">Acountant
</br>
    <input type="radio" name="Acountant" value="0">not Acountant
</div>
<div class="form-group">
    <input type="radio" name="HR" value="1">HR
</br>
    <input type="radio" name="HR" value="0">not HR
</div>
<button class="btn btn-outline-primary" type="submit">signup</button>
</form>
</div>
</div>
</div>
</div>

@endsection