@extends('main')
@section('content')
<h1>Create user</h1>
<div>
<div>
    <form action="{{route('create.user.post')}}" method="post">
        @csrf
        <div class="m-1 p-1">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="{{old('username')}}" class="border-2 border-black rounded hover:bg-gray-100">
            <div>
                @error('username')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="m-1 p-1">
            <label for="username">Password</label>
            <input type="password" name="password" id="password" class="border-2 border-black rounded hover:bg-gray-100"><span> Min 6 character, Must have at least 1 Number</span>
            <div>
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>

        <button type="submit" class="border-2 border-black rounded p-2 m-1 hover:bg-gray-500">Submit</button>
    </form>
</div>
</div>

@endsection
