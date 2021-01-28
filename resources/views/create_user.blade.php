@extends('main')
@section('content')
<h1>Manufacturer List</h1>
<div>
<div>
    <form action="{{route('create.user.post')}}" method="post">
        @csrf
        <div>
            <label for="username">Username</label> &nbsp;&nbsp;
            <input type="text" name="username" id="username" value="{{old('username')}}">
            <div>
                @error('username')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div>
            <label for="username">Password</label> &nbsp;&nbsp;&nbsp;
            <input type="password" name="password" id="password"> Min 6 character, Must have at least 1 Number
            <div>
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
</div>

@endsection
