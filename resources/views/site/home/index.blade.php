@extends('site.layouts.layout')

@section('title')
الرئيسية
@stop

@section('codeJavescript')
<script>
  $(window).load(function(){
    $().UItoTop({ easingType: 'easeOutQuart' });
    $('.gallery .info').touchTouch();
  }); 

   $(document).ready(function(){
       $(".shuffle-me").shuffleImages({
         target: ".images > img"
       });
    });
</script>

@stop


@section('content')

<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 14, 2014!</div>
  <div style="margin-top: -25px" class="container">
    <div class="row">
      <div class="page1_block">
        <div class="grid_6">
          <img style="border: 2px solid #c301a2" src="images/page1_img1.jpg" alt="">
        </div>
        <div class="grid_6">
          <h2 class="intro">أفكار جديدة وحصرية <br> من اجل حفلاتك :)</h2>
          <div class="row">
            <div class="grid_3">
              <img style="border: 2px solid #c301a2"  height="328" width="350" src="{{asset('images/alaa/46.jpg')}}" alt="">
            </div>
            <div class="grid_3">
              <img style="border: 2px solid #c301a2" height="328" width="350" src="{{asset('images/alaa/30.jpg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="grid_10 preffix_1">
        <div class="block1">
          <div class="block1_title">

          	
كل مستلزمات الافراح,المناسبات, اعياد الميلاد ,والسبوع
اى شغل عليه اسم برو برو2 يبقى بحمد الله شغلنا اى صور زياده هى افكار للتغير والتطوير
            
            <span></span>
          </div>
          <a style="font-size: 20px;font-weight: bold;" href="{{url('/gallery')}}" class="btn">مشاهدة التصميمات </a>
        </div>
      </div>   
      
    </div>
  </div>
  <div class="shuffle-group">
    <div class="container">
      <div class="row">
        <div class="grid_8">
           <div data-si-mousemove-trigger="100" class="shuffle-me">
            <a href="{{url('/gallery')}}" class="info"><div class="shuffle_title">حفلات أعياد الميلاد <span>المزيد</span></div></a>
            <div class="images">
              <img src="{{asset('images/page1_img4.jpg')}}" alt="">
              <img src="{{asset('images/shuffle_1.jpg')}}" alt="">
              <img src="{{asset('images/shuffle_2.jpg')}}" alt="">
            </div></div>
        </div>
        <div class="grid_4">
           <div data-si-mousemove-trigger="100" class="shuffle-me shuff__1">
            <a href="{{url('/gallery')}}" class="info"><div class="shuffle_title">حفلات الزفاف <span>المزيد</span></div></a>
            <div class="images">
              <img height="245" width="400" src="{{asset('images/alaa/3.jpg')}}" alt="">
              <img height="245" width="400" src="{{asset('images/alaa/30.jpg')}}" alt="">
              <img height="245" width="400" src="{{asset('images/alaa/70.jpg')}}" alt="">
            </div></div>
             <div data-si-mousemove-trigger="100" class="shuffle-me shuff__1">
            <a href="{{url('/gallery')}}" class="info"><div class="shuffle_title">الأطفال <span>المزيد</span></div></a>
            <div class="images">
              <img height="245" width="400" src="{{asset('images/alaa/46.jpg')}}" alt="">
              <img height="245" width="400" src="{{asset('images/alaa/19.jpg')}}" alt="">
              <img height="245" width="400" src="{{asset('images/alaa/17.jpg')}}" alt="">
            </div></div>
        </div>
        
      </div>
    </div>
  </div>  
  <div class="container gallery">
    <div class="row">
      <div class="grid_8">
        <h4 class="araa-client">أحدث المناسبات</h4>
        <div class="row">
          <div class="grid_4">
            <div class="view">  
              <img height="190" width="450" src="{{asset('images/alaa/5.jpg')}}" alt="" />  
              <div class="mask">
                <a href="images/gallery/big1.jpg')}}" class="info fa fa-search" title="Full Image"></a>  
              </div>  
            </div>   
          </div>
          <div class="grid_4">
            <div class="view">  
              <img height="190" width="450" src="{{asset('images/alaa/2.jpg')}}" alt="" />  
              <div class="mask">
                <a href="{{asset('images/gallery/big2.jpg')}}" class="info fa fa-search" title="Full Image"></a>  
              </div>  
            </div>   
          </div>
          <div class="grid_4">
            <div class="view">  
              <img height="190" width="450" src="{{asset('images/alaa/13.jpg')}}" alt="" />  
              <div class="mask">
                <a href="{{asset('images/gallery/big3.jpg')}}" class="info fa fa-search" title="Full Image"></a>  
              </div>  
            </div>   
          </div>
          <div class="grid_4">
            <div class="view">  
              <img height="190" width="450" src="{{asset('images/alaa/56.jpg')}}" alt="" />  
              <div class="mask">
                <a href="{{asset('images/gallery/big4.jpg')}}" class="info fa fa-search" title="Full Image"></a>  
              </div> 
            </div>   
          </div>
        </div>
      </div>
      <div style="direction: rtl;" class="grid_4">
        <h4 class="araa-client">بعض أراء العملاء</h4>
        <blockquote class="bq1">
          <img style="direction: rtl;float: right;" width="60" height="60" src="images/gad.jpg" alt="">
          <div  class="extra_wrapper">
            <p style="margin-right: 9px;margin-top:17px;">مجهود أكتر من رائع.</p>
            <div style="font-family: verdana;font-size: 14px;font-style: italic;" class="color2"> Ahmed Gad</div>
          </div>
        </blockquote>
        <blockquote class="bq1">
          <img style="direction: rtl;float: right;"  width="60" height="60" src="images/1.jpg" alt="">
          <div class="extra_wrapper">
            <p style="margin-right: 9px;margin-top:17px;"> شغلكم فعلاً يتميز بالدقة </p>
            <div style="font-family: verdana;font-size: 14px;font-style: italic;" class="color2"> Mustapha Aboelshiekh</div>
          </div>
        </blockquote>
      </div>
    </div>
  </div>
</section>

@stop
