@extends('master')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form method="post" action="{{route('users.store')}}">
        @csrf
        <input type="text" id="name" name="name" value="" placeholder="Enter Your name"/>
        <button type="submit">Add</button>
    </form>
@endsection
