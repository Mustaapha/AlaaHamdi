@extends('admin.layouts.layout')

@section('content')

@foreach($orders as $order)

<div>
{{$order->order_name}}
{{$order->order_img}}
{{$order->order_desc}}
{{$order->created_at}}
</div>
@endforeach


<div class="row text-center">
    {!! $orders->render() !!}
</div>

@stop