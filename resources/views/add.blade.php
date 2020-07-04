@extends('master')

@section('content')
    <form method="post" action="{{route('users.add')}}">
        @csrf
        <input type="text" id="name" name="name" value="" placeholder="Enter Your name"/>
        <button type="submit">Add</button>
    </form>
@endsection
