<footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">

        <div style="direction: rtl;" id="footer-wrapper">

          <div class="row">
            <div class="col-sm-6 col-md-2">
              <div id="meta-3" class="widget widgetFooter widget_meta">
              <h4 class="widgettitle">أهم الصفحات:</h4>
              <ul>
    		  <li><a href="{{url('/')}}"><i class="fa fa-home fa-fw"></i>الرئيسية</a></li>
			  <li><a href="{{url('/gallery')}}"><i class="fa fa-link"></i>   التصميمات</a></li>
			  <li><a href="{{url('/contactus')}}"><i class="fa fa-envelope fa-fw"></i> اتصل بنا</a></li>
             </ul>
</div>      </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-2">
              		<div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
                    <h4 class="widgettitle">للتواصل عبر :</h4>
                    <ul>
					<li>
				     <a href="{{url('https://www.facebook.com/profile.php?id=100005271491654')}}" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
					</li>
					<li>
				      <a href="#" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
					</li>
					<li>
				      <a href="#" target="_blank"><i class="fa fa-youtube"></i> Youtube</a>
				   </li>
				</ul>
		</div>            </div> <!-- end widget1 -->
            <form class="  form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
            <div class="col-sm-6 col-md-4">
              <div id="meta-4" class="widget widgetFooter widget_meta">
              <h4 class="widgettitle">  تسجيل الدخول :</h4>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">E-mail :</span>
                  <input class="form-control" placeholder="E-mail" type="text" name="email">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Password</span>
                  <input class="form-control" placeholder="Password" type="password" name="password">
                   <span class="input-group-btn">
                    <button class="btn btn-primary login" type="submit">تسجيل</button>
                  </span>
                </div>
              </div>


              </div>

             </div> <!-- end widget1 -->
             </form>

            <div class="col-sm-6 col-md-4">
              <div id="search-3" class="widget widgetFooter widget_search"><h4 class="widgettitle">أبحث هنا : </h4>

                <div class="form-group">
                                <label class="control-label">أكتب اسم التصميم الذى تبحث عنه  :</label>
                                <div class="input-group">
                                  <span class="input-group-addon">كلمة دلالية :</span>
                                  <input class="form-control" placeholder="أكتب اسم التصميم الذى تبحث عنه ..." type="text">
                                   <span class="input-group-btn">
                                    <button class="btn btn-primary login" type="button">بحث !</button>
                                  </span>
                                </div>
                              </div>

                </div>            </div> <!-- end widget1 -->

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id="sub-floor">
        <div class="container">
          <div class="row">
            <div class="col-md-4 copyright">
             <span style="color: #777">Copy Right Reserved To Alaa Hamdi © 2016</span>
            </div>
            <div class="col-md-4 col-md-offset-4 attribution">
            <span style="color: #777">Developed by :</span>   <a target="_blank" href="https://www.facebook.com/mostafa.m.tefa.5"><span style="color: #777">Musatpha Aboelshiekh Ahmd</span></a> 
            </div>
          </div> <!-- end .row -->
        </div>
      </div>

    </footer>