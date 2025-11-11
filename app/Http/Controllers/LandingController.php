<?php

namespace App\Http\Controllers;

use App\Models\BuggyPackage;
use App\Models\Gallery;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        $packages = BuggyPackage::query()->where('type', 1)->oldest()->limit(6)->get();
        $galleries = Gallery::query()->oldest()->limit(8)->get();

        return view('guest.home.index', [
            'packages' => $packages,
            'galleries' => $galleries,
        ]);
    }

    public function utv()
    {
        $packages = BuggyPackage::query()->where('type', 1)->oldest()->get();

        return view('guest.utv_packages.index', [
            'packages' => $packages,
        ]);
    }

    public function atv()
    {
        $packages = BuggyPackage::query()->where('type', 2)->oldest()->get();

        return view('guest.activity_packages.index', [
            'packages' => $packages,
        ]);
    }

    public function detail(string $id)
    {
        $phone_number = env('APP_PHONE_NUMBER');

        $package = BuggyPackage::whereKey($id)->where('type', 1)->firstOrFail();
        $galleries = Gallery::query()->oldest()->limit(8)->get();

        return view('guest.detail_package.index', [
            'package' => $package,
            'galleries' => $galleries,
            'phone_number' => $phone_number,
        ]);
    }

    public function gallery()
    {
        $galleries = Gallery::oldest()->get();

        return view('guest.galleries.index', [
            'galleries' => $galleries,
        ]);
    }
}
