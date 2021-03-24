<?php
// modifico il namespace dopo aver spostato il controller nella cartella Admin
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

// aggiungo gli use per Controller e per il model Flower
use App\Http\Controllers\Controller;
use App\Flower;

class PrivateFlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // reindirizzo alla rotta pubblica definita in web.php
        return redirect()->route('public-flowers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flowers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newFlower = new Flower();
        $newFlower->fill($request->all());
        $newFlower->save();

        return redirect()->route('flowers.show', ['flower' => $newFlower]);

    }

    /**
     * Display the specified resource.
     *
     * @param  Flower $flower
     * @return \Illuminate\Http\Response
     */
    public function show(Flower $flower)
    {
        return view('flowers.show', compact('flower'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Flower $flower)
    {
        return view('flowers.edit', compact('flower'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Flower $flower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flower $flower)
    {
        $flower->update($request->all());

        return redirect()->route('flowers.show', compact('flower'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Flower $flower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flower $flower)
    {
        $flower->delete();
        return redirect()->route('flowers.index');
    }
}
