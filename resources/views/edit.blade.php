@extends('master')

@section('content')
    <form method="post" action="/edit/{{$user->id}}">
        @csrf
        <input type="text" name="name" value="{{$user->name}}"/>
        <button type="submit">Edit</button>
    </form>
@endsection
