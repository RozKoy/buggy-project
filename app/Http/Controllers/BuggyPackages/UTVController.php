<?php

namespace App\Http\Controllers\BuggyPackages;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuggyPackages\StoreBuggyPackageRequest;
use App\Http\Requests\BuggyPackages\UpdateBuggyPackageRequest;
use App\Models\BuggyPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UTVController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request['search'];
        $utvs = BuggyPackage::where('type', '1')->when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->paginate(10);
        return view('admin.buggy_packages.utv.index', compact('utvs', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buggy_packages.utv.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBuggyPackageRequest $request)
    {
        $validated = $request->validated();
        $validated['type'] = '1';
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('utv_packages', 'public');
            $validated['image'] = $imagePath;
        }

        BuggyPackage::create($validated);

        return redirect()->route('admin.utv.index')->with('success', 'UTV package added successfully!');
    }    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $utv = BuggyPackage::findOrFail($id);
        return view('admin.buggy_packages.utv.edit', compact('utv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuggyPackageRequest $request, string $id)
    {
        $validated = $request->validated();
        $utv = BuggyPackage::findOrFail($id);
        
        if ($request->hasFile('image')) {
            if ($utv->image && Storage::disk('public')->exists($utv->image)) {
                Storage::disk('public')->delete($utv->image);
            }
            $imagePath = $request->file('image')->store('utv_packages', 'public');
            $validated['image'] = $imagePath;
        }

        $utv->update($validated);

        return redirect()->route('admin.utv.index')->with('success', 'UTV package update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $utv = BuggyPackage::findOrFail($id);
        $filePath = $utv->image;    
        if (Storage::disk('public')->exists($filePath)) {            
            Storage::disk('public')->delete($filePath);
        }        
        $utv->forceDelete();

        return redirect()->route('admin.utv.index')->with('success', 'UTV package deleted successfully!');
    }
}
