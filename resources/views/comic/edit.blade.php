@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h3>EDIT COMIC</h3>

        <form method="POST" action="{{ route('update', $comic->id) }}">

            @csrf

            @method('PUT')

            <label for="name">Title</label>
            <br>
            <input type="text" name="title" id="title" value="{{ $comic->title }}">
            <br>

            <label for="weight">Description</label>
            <br>
            <input type="text" name="description" id="description" value="{{ $comic->description }}">
            <br>

            <label for="color">Thumb</label>
            <br>
            <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
            <br>

            <label for="picture">Price</label>
            <br>
            <input type="text" name="price" id="price" value="{{ $comic->price }}">
            <br>

            <label for="picture">Series</label>
            <br>
            <input type="text" name="series" id="series" value="{{ $comic->series }}">
            <br>

            <label for="picture">Sale date</label>
            <br>
            <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
            <br>

            <label for="picture">Type</label>
            <br>
            <input type="text" name="type" id="type" value="{{ $comic->type }}">
            <br>

            <input class="my-3" type="submit" value="UPDATE">

        </form>
    </div>
@endsection
