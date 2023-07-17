@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            NEW COMICS
        </h1>
        <form method="POST" action="{{ route('comics.store') }}">

            @csrf

            <label for="titolo">title</label>
            <br>
            <input type="text" name="title">
            <br>

            <label for="cottura">Thumb</label>
            <br>
            <input type="text" name="thumb">
            <br>

            <label for="tipo">Description</label>
            <br>
            <input type="text" name="description">
            <br>

            <label for="peso">Price</label>
            <br>
            <input type="text" name="price">
            <br>

            <label for="descrizione">Series</label>
            <br>
            <input type="text" name="series">
            <br>

            <label for="descrizione">Sale date</label>
            <br>
            <input type="date" name="sale_date">
            <br>

            <label for="descrizione">Type</label>
            <br>
            <input type="text" name="type">
            <br>

            <input class="my-3" type="submit" value="CREATE">
        </form>
    </div>
@endsection
