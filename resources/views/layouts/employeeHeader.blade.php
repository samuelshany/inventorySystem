
    <html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/css')}}/index.css">
        <link rel="stylesheet" href="{{asset('assets/css')}}/all.min.css">
        @yield('style')
        <title id="title">@yield('title')</title>
    </head>
    <body>
      <div class="naav fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg d-flex justify-content-end  ">
  
<div class="d-flex justify-content-end ">

  <div class="collapse navbar-collapse justify-content-end   " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      @if((Auth::user()->sales)&&(Auth::user()->custumerService))
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('./newProduct')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          اضافة منتج
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item a"href="{{url('./newProduct')}}">اضافة منتج</a>
          <a class="dropdown-item" href="{{url('/viewAll')}}"> كل المنتجات</a>
          <a class="dropdown-item" href="{{url('/viewAvailable')}}">المتوفر</a>
          <a class="dropdown-item" href="{{url('/viewNotAvailable')}}">غير المتوفر</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  href="{{url('./newClient')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         اضافة عميل
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="{{url('./newClient')}}">اضافة عميل</a>
          <a class="dropdown-item" href="{{url('/viewAllClients')}}">كل العملاء </a> 
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  href="{{url('./newClient')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         اضافة مورد
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="{{url('./newSupplier')}}">اضافة مورد</a>
          <a class="dropdown-item" href="{{url('/viewAllSuppliers')}}">كل الموردين </a> 
        </div>
      </li>
     
   
      @elseif((Auth::user()->sales)&&(Auth::user()->acountant))
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('./newProduct')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          اضافة منتج
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="{{url('./newProduct')}}">اضافة منتج</a>
          <a class="dropdown-item" href="{{url('/viewAll')}}"> كل المنتجات</a>
          <a class="dropdown-item" href="{{url('/viewAvailable')}}">المتوفر</a>
          <a class="dropdown-item" href="{{url('/viewNotAvailable')}}">غير المتوفر</a>
        </div>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          المعملات
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="{{url('/viewAllBuyTransactions')}}">كل معملات الشراء</a>
          <a class="dropdown-item" href="{{url('/viewAllSellTransactions')}}">كل معملات البيع </a>
         
        </div>
      </li>
      @elseif(Auth::user()->sales)
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('./newProduct')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          اضافة منتج
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="{{url('./newProduct')}}">اضافة منتج</a>
          <a class="dropdown-item" href="{{url('/viewAll')}}"> كل المنتجات</a>
          <a class="dropdown-item" href="{{url('/viewAvailable')}}">المتوفر</a>
          <a class="dropdown-item" href="{{url('/viewNotAvailable')}}">غير المتوفر</a>
        </div>
      </li>
      
      @elseif(Auth::user()->acountant)
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          المعملات
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="{{url('/viewAllBuyTransactions')}}">كل معملات الشراء</a>
          <a class="dropdown-item" href="{{url('/viewAllSellTransactions')}}">كل معملات البيع </a>
         
        </div>
      </li>
      @elseif(Auth::user()->custumerService)
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  href="{{url('./newClient')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         اضافة عميل
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="{{url('./newClient')}}">اضافة عميل</a>
          <a class="dropdown-item" href="{{url('/viewAllClients')}}">كل العملاء </a> 
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  href="{{url('./newClient')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         اضافة مورد
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="{{url('./newSupplier')}}">اضافة مورد</a>
          <a class="dropdown-item" href="{{url('/viewAllSuppliers')}}">كل الموردين </a> 
        </div>
      </li>
      @elseif(Auth::user()->manager)
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('./newProduct')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          اضافة منتج
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item a "href="{{url('./newProduct')}}">اضافة منتج</a>
          <a class="dropdown-item a" href="{{url('/viewAll')}}"> كل المنتجات</a>
          <a class="dropdown-item a" href="{{url('/viewAvailable')}}">المتوفر</a>
          <a class="dropdown-item a" href="{{url('/viewNotAvailable')}}">غير المتوفر</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle a"  href="{{url('./newClient')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         اضافة عميل
        </a>
        <div class="dropdown-menu a" aria-labelledby="navbarDropdown">
          <a class="dropdown-item a"  href="{{url('./newClient')}}">اضافة عميل</a>
          <a class="dropdown-item a" href="{{url('/viewAllClients')}}">كل العملاء </a> 
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle a"  href="{{url('./newClient')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         اضافة مورد
        </a>
        <div class="dropdown-menu a" aria-labelledby="navbarDropdown">
          <a class="dropdown-item a"  href="{{url('./newSupplier')}}">اضافة مورد</a>
          <a class="dropdown-item a" href="{{url('/viewAllSuppliers')}}">كل الموردين </a> 
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          المعملات
        </a>
        <div class="dropdown-menu a" aria-labelledby="navbarDropdown">
          <a class="dropdown-item a"  href="{{url('/viewAllBuyTransactions')}}">كل معملات الشراء</a>
          <a class="dropdown-item a" href="{{url('/viewAllSellTransactions')}}">كل معملات البيع </a>
         
        </div>
      </li>
      @endif
      <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



    </ul>
    
  </div>
</div>
 
</nav>

     
@if(Auth::user())
    <form class="form-inline x my-2 my-lg-0" action="{{url('/logout')}}">
      @csrf
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-sign-out-alt"></i>خروج</button>
    </form>
    @else
    <form action="{{url('/signUpForm')}}" class="mx-3 x">
    <button class="btn btn-outline-primary " type="submit">signUp</button></form>
    <form action="{{url('/loginForm')}}" >
    <button class="btn btn-outline-primary " type="submit">login</button></form>
    @endif
</div >