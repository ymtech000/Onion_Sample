@extends('layouts.app')
@section('content')
//postDomainを返しているから
<span>{{$post->getId()}}</span>
<span>{{$post->getName()}}</span>
@endsection