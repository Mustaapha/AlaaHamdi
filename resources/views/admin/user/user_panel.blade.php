@extends('admin.layouts.layout')
@section('title')
التحكم فى الاعضاء
@stop

@section('content')
<div class="row">
<div style="margin-left: -25px" class="col-md-9 ">

<div class="container">
<table class="table">
	<tr>
		<th>User Name</th>
		<th>E-mail</th>
		<th>Job title</th>
		<th>edit/delete</th>
	</tr>


	@foreach ($userinfo as $user)

	<tr>
	<td>{{$user->name}}</td>
	<td>{{$user->email}}</td>
	<td>Admin</td>
	@if($user->id!=1)

     <td><span><a href="/adminpanel/user_delete/{{$user->id}}">حزف</a></span>  <span><a href="/adminpanel/view_edit_user/{{$user->id}}">تعديل</a></span></td>
	
    </tr>
    @else

    <td><span> <span style="color: red;font-weight: bolder;"><3</span>  لا يمكن تعديل أو حزف هذا العضو </span></td>

	@endif

		
	@endforeach
</table>

</div>
</div>
</div>

@stop