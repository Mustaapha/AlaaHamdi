@extends('site.layouts.layout')

@section('title')
التصميمات
@stop

@section('codeJavescript')
<script type="text/javascript">
	$(document).ready( function() {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
@stop
@section('head')

<link rel="stylesheet" href="{{asset('out/css/gallery.css')}}">
@stop



@section('content')


@include('out.gallery')
 <div class="row text-center">

    {!! $galleries->render() !!}

</div>
@stop

