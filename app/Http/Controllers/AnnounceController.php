<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announces = Announce::orderBy('updated_at','desc')->paginate(10);
        return view('announces.index', compact('announces'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $announce = Announce::where('slug', $slug)->first();
        return view('announces.show', compact('announce'));
    }

}
