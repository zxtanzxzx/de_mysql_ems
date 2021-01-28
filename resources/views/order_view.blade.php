@extends('main')
@section('content')
<h4>Order ID {{$order->id}} purchase by <a href="{{route('user.view', ['id' => $order->user->id])}}" target="_blank">{{$order->user->name}}</a></h4>
<h4>Ordered at {{$order->created_at}}</h4>

<h5>Order Details</h5>
<table>
    <tr>
        <th>Product</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Total Price</th>
    </tr>
    @php
        $total  = 0
    @endphp
    @foreach ($order->product()->get() as $product)
    <tr>
        <td>{{$product->product_name}}</td>
        <td>{{$product->price_per_unit}}</td>
        <td>{{$product->pivot->quantity}}</td>
        <td>{{$product->price_per_unit * $product->pivot->quantity}}</td>
    </tr>
    @php
        $total += $product->price_per_unit * $product->pivot->quantity
    @endphp
    @endforeach
</table>
<br>
Total order price - <b>{{$total}}</b>
{{-- {{$order->product()->first()->pivot->quantity}} --}}
@endsection
