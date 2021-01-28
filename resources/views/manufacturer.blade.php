@extends('main')
@section('content')
<h1>Manufacturer List</h1>
<div>
    @isset($manufacturers)

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>nature of Business</th>
            <th>Company Reg. No.</th>
            <th></th>
        </tr>
        @foreach ($manufacturers as $manufacturer)
        <tr>

            <td>{{$manufacturer->id}}</td>
            <td><a href="{{route('manufacturer.view', ['id' => $manufacturer->id])}}" target="_blank">{{$manufacturer->name}} </a> </td>
            <td>{{$manufacturer->nature_of_business}}</td>
            <td>{{$manufacturer->company_registration_no}}</td>
        </tr>
        @endforeach

    </table>
@endisset
</div>

@endsection
