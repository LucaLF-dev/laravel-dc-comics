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
        

        

    }

}
