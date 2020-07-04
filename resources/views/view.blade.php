@extends('master')

@section('content')
    <div class="content">
        <h3>This is Content View</h3>
    </div>
    <div>
        <h1><a href="{{route('users.store')}}">add</a></h1>
        @foreach($users as $user)
        <h1 style="color:green">Name : {{$user->name}}
            <a href="edit/{{$user->id}}">edit</a>
            <a href="delete/{{$user->id}}">delete</a>
        </h1>
        @endforeach
    </div>
@endsection
