<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    public function index() {

        $comics = Comic :: all();

        return view('comic.index', compact('comics'));
    }

    public function show($id) {

        $comic = Comic :: findOrFail($id);

        return view('comic.show', compact('comic'));
    }

    public function create() {

        return view('comic.create');
    }

    public function edit($id) {

        $comic = Comic :: findOrFail($id);

        return view('comic.edit', compact("comic"));
    }
    public function update(Request $request, $id) {

        $data = $request -> all();

        $comic = Comic :: findOrFail($id);

        $comic -> update($data);

        return redirect() -> route('comics.show', $comic -> id);
    }



    public function store(Request $request) {

        $data = $request -> all();

        $comic = Comic :: create([
            "title" => $data["title"],
            "thumb" => $data["thumb"],
            "description" => $data["description"],
            "price" => $data["price"],
            "series" => $data["series"],
            "sale_date" => $data["sale_date"],
            "type" => $data["type"]
        ]);

        return redirect() -> route("comics.show", $comic -> id);
    }
}