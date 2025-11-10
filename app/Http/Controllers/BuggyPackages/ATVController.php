<?php

namespace App\Http\Controllers\BuggyPackages;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuggyPackages\StoreBuggyPackageRequest;
use App\Http\Requests\BuggyPackages\StoreUtvRequest;
use App\Http\Requests\BuggyPackages\UpdateBuggyPackageRequest;
use App\Http\Requests\BuggyPackages\UpdateUtvRequest;
use App\Models\BuggyPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ATVController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request['search'];
        $atvs = BuggyPackage::where('type', '2')->when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->paginate(10);
        return view('admin.buggy_packages.atv.index', compact('atvs', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buggy_packages.atv.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBuggyPackageRequest $request)
    {
        $validated = $request->validated();
        $validated['type'] = '2';
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('atv_packages', 'public');
            $validated['image'] = $imagePath;
        }

        BuggyPackage::create($validated);

        return redirect()->route('admin.atv.index')->with('success', 'ATV package added successfully!');
    }    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $atv = BuggyPackage::findOrFail($id);
        return view('admin.buggy_packages.atv.edit', compact('atv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuggyPackageRequest $request, string $id)
    {
        $validated = $request->validated();
        $atv = BuggyPackage::findOrFail($id);
        
        if ($request->hasFile('image')) {
            if ($atv->image && Storage::disk('public')->exists($atv->image)) {
                Storage::disk('public')->delete($atv->image);
            }
            $imagePath = $request->file('image')->store('atv_packages', 'public');
            $validated['image'] = $imagePath;
        }

        $atv->update($validated);

        return redirect()->route('admin.atv.index')->with('success', 'ATV package update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $atv = BuggyPackage::findOrFail($id);
        $filePath = $atv->image;    
        if (Storage::disk('public')->exists($filePath)) {            
            Storage::disk('public')->delete($filePath);
        }        
        $atv->forceDelete();

        return redirect()->route('admin.atv.index')->with('success', 'ATV package deleted successfully!');
    }
}
