<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::get();
        return view('admin.gallery.index', compact('galleries'));
    }    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10480'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('galleries', 'public');
        }

        Gallery::create($validated);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Add image successfully.');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        
        $filePath = $gallery->image;    
        if (Storage::disk('public')->exists($filePath)) {            
            Storage::disk('public')->delete($filePath);
        }        
        $gallery->forceDelete();

        return redirect()->route('admin.gallery.index')->with('success', 'Image deleted successfully!');
    }
}
