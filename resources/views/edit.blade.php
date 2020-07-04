@extends('master')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form method="post" action="/edit/{{$user->id}}">
        @csrf
        <input type="text" name="name" value="{{$user->name}}"/>
        <button type="submit">Edit</button>
    </form>
@endsection
