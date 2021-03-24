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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
