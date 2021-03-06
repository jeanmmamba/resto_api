<?php

namespace App\Http\Controllers;

use App\Models\Ordered;
use Illuminate\Http\Request;

class OrderedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordered = Ordered::with(['article','user'])->orderBy('id', 'DESC')->get();
        return $this->reply(true,null, $ordered);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordered=new Ordered();
        $ordered->qte = $request->qte;
        $ordered->article_id = 1;
        $ordered->user_id = 1;
        $ordered->save();
        return$this->reply(true, 'enregistrement effectué avec succes',null);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ordered  $ordered
     * @return \Illuminate\Http\Response
     */
    public function show(Ordered $ordered)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ordered  $ordered
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordered $ordered)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ordered  $ordered
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ordered $ordered)
    {
        //
    }
}
