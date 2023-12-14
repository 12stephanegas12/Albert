<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image; // Controleer de juiste namespace en mapstructuur voor het Image-model

class ImagesController extends Controller

{
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    public function show($id)
    {
        $image = Image::findOrFail($id);
        return view('images.show', compact('image'));
    }

    // Andere methoden zoals create, store, edit, update, delete, etc., kunnen ook worden toegevoegd op basis van je behoeften
}
