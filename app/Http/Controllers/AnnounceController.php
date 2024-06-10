<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Services\FacebookService;
use Illuminate\Http\Request;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $facebookService;

    public function __construct(FacebookService $facebookService)
    {
        $this->facebookService = $facebookService;
    }
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

        // $this->facebookService->postToPage("Message");

        $announce = Announce::where('slug', $slug)->first();
        $viewed = session()->get('viewed_posts', []);

        if (!in_array($announce->id, $viewed)) {
            $announce->increment('views_count');
            session()->push('viewed_posts', $announce->id);
        }
        return view('announces.show', compact('announce'));
    }

}
