<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Flower;

//QUI LE FUNZIONI PUBBLICHE
class PublicFlowerController extends Controller
{
    public function index()
    {
        $flowers = Flower::all();
        return view('flowers.index', compact('flowers'));
    }
}
