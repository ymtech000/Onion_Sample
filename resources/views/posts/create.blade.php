@extends('layouts.app')
@section('content')
<form action="posts" method="post">
    <input type="text" name="name">
    <input type="submit">
</form>
@endsection