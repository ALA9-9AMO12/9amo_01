@extends('createLayout')
{{--@include('nav')--}}
@section('title')
    Admin
@endsection

@section('content')
    @include('artikelen.create')
    @include('artikelen.index')
@endsection
