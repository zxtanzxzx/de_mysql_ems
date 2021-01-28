@extends('main')
@section('content')
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>IC</th>
        <th>Email</th>
        <th>Hp No</th>
        <th>Tel No</th>
        <th>Credit Limit</th>
        <th>Outstanding</th>
        <th>Active User</th>
        <th></th>
    </tr>
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->ic}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->hp}}</td>
        <td>{{$user->tel}}</td>
        <td>{{$user->credit_limit}}</td>
        <td>{{$user->outstanding_charges}}</td>
        <td>{{$user->is_active}}</td>
    </tr>
</table>
<br><br>
<table>
    <tr>
        <th>Order ID</th>
        <th>Order DateTime</th>
        <th>Is Delivered</th>
        <th>Is Canceled</th>
    </tr>
    @foreach ($user->order()->get() as $order)
        <tr>
            <td><a href="{{route('order.view', ['id' =>$order->id ])}}">{{$order->id}}</a> </td>
            <td>{{$order->order_datetime}}</td>
            <td>{{$order->is_delivered}}</td>
            <td>{{$order->is_canceled}}</td>
        </tr>
    @endforeach
</table>

@endsection
