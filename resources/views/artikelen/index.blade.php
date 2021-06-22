@extends('layout')
@section('content')
    <a href="{{ route('artikelen.create') }}" class="btn btn-success mb-2">Add</a>
    <br>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered" id="laravel_crud">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titel</th>
                    <th>Content</th>
                    <td colspan="2">Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($artikelen as $artikel)
                    <tr>
                        <td>{{ $artikel->artikelID }}</td>
                        <td>{{ $artikel->titel }}</td>
                        <td>{{ $artikel->content }}</td>
                        <td><a href="{{ route('artikelen.edit',$artikel->artikelID)}}" class="btn btn-primary">Edit</a></td>
                        <td>
{{--                            <form action="{{ route('$artikelen.destroy', $artikel->id)}}" method="post">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                @method('DELETE')--}}
{{--                                <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                            </form>--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $artikelen->links() !!}
        </div>
    </div>
@endsection
