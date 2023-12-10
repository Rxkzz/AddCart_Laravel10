<!DOCTYPE html>
<html>
<head>
    <title>Laravel Shopping Cart Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>
<body>
  
    <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Djamu Herbal</a>
        <div class="social-media order-lg-last">
            <p class="mb-0 d-flex">
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                <a class="btn btn-outline-dark d-flex align-items-center justify-content-center" href="{{ route('shopping.cart') }}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge text-bg-danger fa fa-dribbble">{{ count((array) session('cart')) }}</span>
                 </a>
            
            </p>
    </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto mr-md-3">
            <li class="nav-item active"><a href="{{route ('home')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#Customer" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Work</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="#contactForm" class="nav-link">Contact</a></li>
          
        </ul>
      </div>
    </div>
  </nav>

  
  

  
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
    @yield('content')
</div>
  
@yield('scripts')
</body>
</html>