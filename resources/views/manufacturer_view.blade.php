<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>nature of Business</th>
        <th>Company Reg. No.</th>
        <th></th>
    </tr>
    <tr>

        <td>{{$manufacturer->id}}</td>
        <td>{{$manufacturer->name}}</td>
        <td>{{$manufacturer->nature_of_business}}</td>
        <td>{{$manufacturer->company_registration_no}}</td>
    </tr>

</table>

<br>
<br>

<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price Per Unit</th>
        <th>Discount</th>
        <th></th>
    </tr>
    @foreach ($manufacturer->product()->get() as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->product_name}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->product_description}}</td>
        <td>{{$product->price_per_unit}}</td>
        <td>{{$product->discount}}</td>
    </tr>
    @endforeach
</table>



