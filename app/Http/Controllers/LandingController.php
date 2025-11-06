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
        $galleries = Gallery::query()->latest()->limit(6)->get();

        return view('guest.home.index', [
            'packages' => $packages,
            'galleries' => $galleries,
        ]);
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->get();

        return view('guest.galleries.index', [
            'galleries' => $galleries,
        ]);
    }
}
