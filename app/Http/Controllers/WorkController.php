<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    //
    public function index()
    {
        $works = \App\Models\Work::orderBy('created_at', 'desc')->take(6)->get();
        return view('works.index',compact('works'));
    }

    public function show(Work $work)
    {
        //
        return view('works.show', compact('work'));
    }

    public function more(Request $request)
    {
        $works = \App\Models\Work::orderBy('created_at', 'desc')->take(6)->offset($request->offSet)->get();
        return view('works._index', compact('works'));
    }
}
