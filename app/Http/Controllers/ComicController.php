<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecomicRequest;
use App\Http\Requests\UpdatecomicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view('comics.index', compact('comics'));


    }

    public function show(Comic $comic) {
    
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request) {
         
        $data = $request->all();  

        $new_comic = Comic::create($data);

        return redirect()->route('comics.show', $new_comic);
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);
        
        return redirect()->route('comics.show', $comic);
       
    }

}
