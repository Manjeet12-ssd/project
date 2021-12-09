<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;

class MediaController extends Controller
{
    //
    public function index()
    {    
        $clients = Media::latest()->get();
        return view('index', compact('media'));
    }

    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        $client = Media::create($input);
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $client->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }
        return redirect()->route('media');
    }
}
