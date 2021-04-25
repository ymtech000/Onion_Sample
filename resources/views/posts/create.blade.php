@extends('layouts.app')
@section('content')
<form action="{{route('posts.store')}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="name">
    <input type="submit">
</form>
@endsection