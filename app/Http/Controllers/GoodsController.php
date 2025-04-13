<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGoodsRequest;
use App\Http\Requests\UpdateGoodsRequest;
use App\Models\Goods;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Db::table('goods')->insert(['name' => 'test']);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGoodsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Goods $goods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goods $goods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoodsRequest $request, Goods $goods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goods $goods)
    {
        //
    }
}
