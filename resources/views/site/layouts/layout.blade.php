<!DOCTYPE html>
<html lang="en">
<head>
<title>

Alaa Hamdi-

@yield('title')

</title>
<meta charset="utf-8">

<meta name = "format-detection" content = "telephone=no" />
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="icon" href="{{asset('images/favicon.ico')}}"/>
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
<link rel="stylesheet" href="{{asset('css/touchTouch.css')}}">

<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('out/css/footer2.css')}}">

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.1.1.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script> 
<script src="{{asset('js/superfish.js')}}"></script>
<script src="{{asset('js/jquery.equalheights.js')}}"></script>
<script src="{{asset('js/jquery.mobilemenu.js')}}"></script>
<script src="{{asset('js/tmStickUp.js')}}"></script>
<script src="{{asset('js/jquery.ui.totop.js')}}"></script>
<script src="{{asset('js/touchTouch.jquery.js')}}"></script>
<script src="{{asset('js/jquery.shuffle-images.js')}}"></script>

@yield('head')

@yield('codeJavescript')


<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>

<body class="page1" id="top">
  <div class="main">
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div style="background: #fff;padding: 5px" class="row">
      <div class="grid_12">
        <h1>
          <a href="index.html">
            <img src="{{asset('images/logo.png')}}" alt="Logo alt">
          </a>
        </h1>
        <div class="socials">
          <a href="https://www.facebook.com/profile.php?id=100005271491654" class="fa fa-twitter"></a>
          <a href="{{url('https://www.facebook.com/profile.php?id=100005271491654')}}" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
        </div>
        <div class="navigation ">
          <nav class="nav-bar">
            <ul class="sf-menu">
             <li><a href="{{url('/')}}">الرئيسية</a></li>
             <li><a href="#"></a></li>
             <li><a href="{{url('/gallery')}}">تصميماتى</a></li>
             
             <li><a href="{{url('/order')}}">طلب تصميم</a></li>
             <li><a href="{{url('/teamwork')}}">فريق العمل</a></li>
             <li><a href="{{url('/contactus')}}">أتصل بنا</a></li>
           </ul>
          </nav>
          <div class="clear"></div>
        </div>       
      </div>
    </div>
  </div>
</header>
<!--=====================
          Content
======================-->

@yield('content')

<!--==============================
              footer
=================================-->
<!--
<footer  style="background: #777;" id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12"> 
        <div style="text-align: center;" class="copyright"><a href="#" class="f_logo"><img src="{{asset('images/f_logo.png')}}" alt=""></a> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
          <div class="sub_copyright">
            Website Developed by <a href="https://www.facebook.com/mostafa.m.tefa.5" rel="nofollow"><span style="background: #fff;font-weight: bold;color: #333">Mustapha Aboelshiekh Ahmed</span></a>
          </div>
        </div>
        
      </div>

      <form class=" login-footer form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input style="width: 250px;border: 1px solid #ddd; type="email" class="form-control" placeholder="Your E-mail" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input style="width: 250px;border: 1px solid #ddd;" type="password" class="form-control" name="password" placeholder="Your Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                
                            </div>
                        </div>
      </form>
    </div>

  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</div>

-->

@include('out.footer2')
</body>

</html>

