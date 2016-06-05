@extends('site.layouts.layout')

@section('title')
اضافة تصميم
@stop

@section('content')

<div class="container">


<table style="direction: rtl;margin-left: 100px;" class="table">
{!! Form::open( [ 'url' => 'add_order','files' =>'true' ]) !!}

{!! csrf_field() !!}

<tr>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <td> <label class="col-md-3 control-label"> الاسم:</label></td>

                            <td><div class="col-md-9">
                                {!!Form::text("order_name", "",["class"=>"form-control"])!!}
                                

                                @if ($errors->has('order_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </td>
</div>

</tr>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <td> <label class="col-md-3 control-label"> التليفون:</label></td>

                            <td><div class="col-md-9">
                                {!!Form::text("client_phone", "",["class"=>"form-control"])!!}
                                

                                @if ($errors->has('client_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('client_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </td>
</div>





<tr>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <td> <label class="col-md-3 control-label"> التفاصيل:</label></td>

                            <td><div class="col-md-9">
                                {!!Form::textarea("order_desc", "",["class"=>"form-control"])!!}
                                

                                @if ($errors->has('order_desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </td>
</div>

</tr>

<tr>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <td> <label class="col-md-3 control-label"></label></td>

                            <td><div class="col-md-9">
                                {!!Form::file("order_img",["class"=>"form-control"])!!}
                                

                                @if ($errors->has('order_img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_img') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </td>
</div>
</tr>
<tr>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <td> <label class="col-md-3 control-label"></label></td>

                            <td><div class="col-md-9">
                                {!!Form::submit("اضافة",["class"=>"btn btn-info"])!!}
                                

                                @if ($errors->has('تأكيد العرض'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('اضافة') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </td>
</div>
</tr>

{!!Form::close()!!}
</table>
</div>

@stop