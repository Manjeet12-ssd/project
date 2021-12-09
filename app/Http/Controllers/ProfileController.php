<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile', [$user => Auth::user()]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $user
            ->addFromMediaLibraryRequest($request->avatar)
            ->toMediaCollection('avatar');
    }
}
