@extends('admin.layouts.layout')
@section('title')
تعديل حساب
@stop

@section('content')

<div style="background: #798992;direction: rtl;" class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
                <div style="font-size: 17px;margin-right:500px;color: #fff;font-weight: 700;" class="panel-heading">تعديل بيانات العضو <span class="btn-primary">{{$users->name}}</span></div>
                    
                     {!! Form::model($users,['route'=>['adminpanel.user_update.update',$users->id],'method'=>'PATCH','class'=>'form-horizontal form-register']) !!}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-8">
                               
                                {!!Form::text('name',null,['class'=>'form-control'])!!}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-8">
                                {!!Form::text('email',null,['class'=>'form-control'])!!}
                               

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-8">
                                {!!Form::select('admin',['0'=>'user','1'=>'admin'],['class'=>'form-control'])!!}
                               

                                @if ($errors->has('admin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        


                        <div class="form-group">
                            <div class="col-md-8 ">
                                <button style="font-size: 18px" type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>تعديل
                                </button>
                            </div>
                    {!! Form::close() !!}
                </div>
        </div>
    </div>
</div>

@stop