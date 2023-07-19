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

        $data = $request -> validate(
            $this -> getValidationRule()
        );

        $comic = Comic :: findOrFail($id);

        $comic -> update($data);

        return redirect() -> route('comics.show', $comic -> id);
    }

    public function destroy($id) {

        $comic = Comic :: findOrFail($id);

        $comic -> delete();

        return redirect() -> route('comic.index');
    }

    public function store(Request $request) {

        $data = $request -> validate(
            $this -> getValidationRule()
        );

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

    private function getValidationRule() {

        return [
            'title' => 'required | string | min: 5 | max: 64',
            'thumb' => 'required | min: 3 | max: 350',
            'description' => 'required | string | min:4 | max: 2000',
            'price' => 'required | string | min: 6 | max: 7 ',
            'series' => 'required | string | min: 5 | max: 20',
            'sale_date' => 'required | before_or_equal:' . now() -> format("Y-m-d"),
            'type' => 'required | string | min: 5 | max: 20'
        ];
    }

}