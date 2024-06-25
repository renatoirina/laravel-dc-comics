<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicsRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics_list = Comic::all();
        return view("comics.index", compact("comics_list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicsRequest $request)
    {
        // $request->headers->set('Content-Type','application/json');
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route("comics.show", ["comic" => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comics = Comic::findOrFail($id);
        return view("comics.show", compact("comics"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit' , compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        //reindirizza all'index
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
