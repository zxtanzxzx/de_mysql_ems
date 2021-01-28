@extends('main')
@section('content')
<h1>Product List</h1>

<div>
    @isset($products)

    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price Per Unit</th>
            <th>Discount(%)</th>
            <th></th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_description}}</td>
            <td>{{$product->price_per_unit}}</td>
            <td>{{$product->discount * 100}}</td>
        </tr>
        @endforeach

    </table>
@endisset

</div>
@endsection
