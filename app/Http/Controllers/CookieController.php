<?php

namespace App\Http\Controllers;

use App\Models\Cookie;
use App\Http\Requests\StoreCookieRequest;
use App\Http\Requests\UpdateCookieRequest;

class CookieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCookieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCookieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cookie  $cookie
     * @return \Illuminate\Http\Response
     */
    public function show(Cookie $cookie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cookie  $cookie
     * @return \Illuminate\Http\Response
     */
    public function edit(Cookie $cookie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCookieRequest  $request
     * @param  \App\Models\Cookie  $cookie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCookieRequest $request, Cookie $cookie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cookie  $cookie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cookie $cookie)
    {
        //
    }
}
