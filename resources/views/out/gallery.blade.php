<div style="margin-top: -80px" class="container ">
	<div class="row">
		<h2 class="text-center"></h2>
	</div>
    <div class="row">
        @foreach($galleries as $gallery)
        <div  class="col-sm-6 col-md-4 pull-right gallery-block">
            <div class="thumbnail">
                <h4>
                    
                    <span style="direction: rtl;" class="label label-info info price">
                        <span data-toggle="tooltip" title="Viewed"> <span>50</span> <span>جنية </span> <b class="glyphicon glyphicon-eye-open"></b></span>
                        <span data-toggle="tooltip" title="Favorited">{{$gallery['gallery_owner']}} <b class="glyphicon glyphicon-star"></b></span>
                       
                    </span>
                    <span class="pull-right"><span class="gallery-description">{{$gallery['gallery_desc']}}</span></span>
                </h4>
                <img class="gallery-img" src="{{asset('images/gallery/'.$gallery['gallery_img'])}}" alt="...">
                <a style="background: #777;font-family: tahoma;font-weight: bold;" href="{{url('/order')}}" class="btn btn-primary col-xs-12" role="button">طلب تصميم مماثل</a>
                <div class="clearfix"></div>
            </div>
        </div>

        @endforeach
        
        
        
       
        
        
    </div>
</div>