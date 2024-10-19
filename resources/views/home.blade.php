@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Fumetti
</h1>
<ul>
    @foreach ($comics as $comic)
       <li>
        {{$comic['title']}}
        </li> 
    @endforeach
</ul>
@endsection
