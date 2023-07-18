@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            Comics
            <a href="{{ route('comics.create') }}">+</a>
        </h1>
        <ul class="list-unstyled">
            @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('comics.show', $comic->id) }}">
                        {{ $comic->title }}
                    </a>

                    <a class="mx-3 btn btn-primary" href="{{ route('edit', $comic->id) }}">
                        EDIT
                    </a>

                    <form class="d-inline" method="POST" action="{{ route('destroy', $comic->id) }}">

                        @csrf
                        @method('DELETE')

                        <input class="mx-3 btn btn-primary" type="submit" value="DELETE">
                    </form>

                </li>
            @endforeach
        </ul>

    </div>
@endsection
