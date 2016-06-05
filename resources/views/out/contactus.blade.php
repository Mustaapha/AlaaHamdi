<div style="direction: rtl;"  class="container">
<h1 style="direction: rtl;font-size: 25px;font-family: tahoma;font-weight: bold;color: #777;margin-bottom: 20px;">اتصل بنا عبر :</h1><br>
	<div class="row text-center">
		<div class="col-sm-3 col-xs-6 first-box">
        <h1><span class="glyphicon glyphicon-earphone"></span></h1>
        <h3 class="link1">التليفون </h3>
        <p class="link">{{getMainSetting('phone')}}</p><br>
    </div>
    <div class="col-sm-3 col-xs-6 second-box">
        <h1><span class="glyphicon glyphicon-home"></span></h1>
        <h3 class="link1">العنوان</h3>
        <p class="link">{{getMainSetting('address')}}</p><br>
    </div>
    <div class="col-sm-3 col-xs-6 third-box">
        <h1 ><span class="glyphicon glyphicon-send"></span></h1>
        <h3 class="link1">البريد الالكترونى</h3>
        <p class="link">{{getMainSetting('email')}}</p><br>
    </div>
    <div class="col-sm-3 col-xs-6 fourth-box">
    	<h1><span class="glyphicon glyphicon-leaf"></span></h1>
        <h3 class="link1">فيس بوك</h3>
        <p class="link"><a class="link" href="{{getMainSetting('facebook')}}">اضغط هنا</a></p><br>
    </div>
	</div>
</div>