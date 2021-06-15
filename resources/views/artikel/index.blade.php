@extends('layout')

@section('title', 'List of articles')

@section('content')
    <table class="table table-striped table-bordered table-responsive-md">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Creation date</th>
            <th>Date of last change</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($artikelen as $artikel)
            <tr>
                <td>
                    <a href="{{ route('artikel.show', ['artikel' => $artikel]) }}">
                        {{ $artikel->title }}
                    </a>
                </td>
                <td>{{ $artikel->description }}</td>
                <td>{{ $artikel->created_at }}</td>
                <td>{{ $artikel->updated_at }}</td>
                <td>
                    <a href="{{ route('artikel.edit', ['artikel' => $artikel]) }}">Edit</a>
                    <a href="#" onclick="event.preventDefault(); $('#artikel-delete-{{ $artikel->id }}').submit();">Remove</a>

                    <form action="{{ route('artikel.destroy', ['artikel' => $artikel]) }}" method="POST" id="article-delete-{{ $artikel->id }}" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">
                    No one has created an article yet.
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <a href="{{ route('artikel.create') }}" class="btn btn-primary">
        Create a new article
    </a>
@endsection
