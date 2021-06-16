@extends('layout')

@section('title')
    HalloTest
@endsection

@section('body')
    <div class="d-flex justify-content-center align-items-center col-12 col-md-12 col-lg-12">
        <h1>Home</h1>
    </div>
    @include('artikelen.create')
@endsection
