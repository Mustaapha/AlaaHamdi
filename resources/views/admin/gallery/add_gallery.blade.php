@extends('admin.layouts.layout')

@section('content')

<div class="container">


<table style="direction: rtl;margin-left: 100px;" class="table">
{!! Form::open( [ 'url' => 'add_gallery','files' =>'true' ]) !!}

{!! csrf_field() !!}

<tr>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <td> <label class="col-md-3 control-label"> التفاصيل:</label></td>

                            <td><div class="col-md-9">
                                {!!Form::textarea("gallery_desc", "",["class"=>"form-control","placeholder"=>"اكتبى وصف  التصميم"])!!}
                                

                                @if ($errors->has('gallery_desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gallery_desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </td>
</div>


</tr>

<tr>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <td> <label class="col-md-3 control-label"> التفاصيل:</label></td>

                            <td><div class="col-md-9">
                                {!!Form::text("gallery_owner", "",["class"=>"form-control","placeholder"=>"اكتبى اسم صاحب التصميم"])!!}
                                

                                @if ($errors->has('gallery_owner'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gallery_owner') }}</strong>
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
                                {!!Form::file("gallery_img",["class"=>"form-control"])!!}
                                

                                @if ($errors->has('gallery_img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thing_img') }}</strong>
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