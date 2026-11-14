<?php

namespace App\Http\Controllers;

use App\Models\PictureSize;
use Illuminate\Http\Request;

class PictureSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('settings.picture-sizes.index', ['picture_sizes' => PictureSize::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pic_size_label' => 'required|string',
            'pic_size_width' => 'required|integer',
            'pic_size_height' => 'required|integer',
            'pic_size_price' => 'required|numeric',
        ]);

        PictureSize::create($validated);

        return redirect()->route('picture-sizes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PictureSize $pictureSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PictureSize $pictureSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PictureSize $pictureSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PictureSize $pictureSize)
    {
        $pictureSize->delete();

        return redirect()->route('picture-sizes.index');
    }
}
