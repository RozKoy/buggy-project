<?php

namespace App\Http\Controllers;

use App\Models\BuggyPackage;
use App\Models\Gallery;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        $packages = BuggyPackage::query()->latest()->limit(6)->get();
        $galleries = Gallery::latest()->get();

        return view('guest.home.index', [
            'packages' => $packages,
            'galleries' => $galleries,
        ]);
    }
}
