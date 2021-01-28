@extends('main')

@section('content')
<h1>User List</h1>

<div>
    @isset($users)
    <table class="table-auto text-center border-collapse">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('user.view', ['id' => $user->id])}}" target="_blank"
                class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600">{{$user->name}} </a> </td>
        </tr>
        @endforeach
    </table>
@endisset
</div>

@endsection
