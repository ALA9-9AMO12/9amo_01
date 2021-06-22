@extends('createLayout')
{{--@include('nav')--}}
@section('title')
    Admin
@endsection

@section('content')
    <h1>Article editing {{ $artikel->titel }}</h1>

    <form action="{{ route('artikelen.update', ['artikel' => $artikel]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" name="titel" id="titel" class="form-control" value="{{ old('titel') ?: $artikel->titel }}" required minlength="3" maxlength="80" />
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="8" required>{{ old('content') ?: $artikel->content }}</textarea>
        </div>

        {{--        <div class="form-group">--}}
        {{--            <label for="afbeelding">Afbeelding</label>--}}
        {{--            <input type="file" name="afbeelding" id="afbeelding" class="form-control" />--}}
        {{--        </div>--}}

        <button type="submit" class="btn btn-primary">Artikel aanmaken</button>
    </form>
@endsection
