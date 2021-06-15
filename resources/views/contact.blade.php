@extends('layout')

@section('title')
    Home - Imkervereniging
@endsection

@section('webTitle')
    Test
@endsection

@section('content')
    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wat is uw email?">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Voornaam</label>
            <input type="text" name="voornaam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wat is uw voornaam?">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="form-label">Wat is uw vraag?</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" name="submitcontact" class="btn btn-primary">versturen</button>
    </form>
@endsection

@section('afbeelding')
    <img src="{{ asset('images/contact.png') }}" alt="afbeelding" class="rounded img-fluid" style="height: 30vh">
@endsection
