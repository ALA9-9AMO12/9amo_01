@extends('layout')

@section('title', $artikel->titel)

@section('content')
    <h1>{{ $artikel->titel }}</h1>
    {!! $artikel->content !!}
@endsection
