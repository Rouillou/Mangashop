<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\MangaResource;
use App\Models\Manga;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MangaResource::collection(Manga::all());
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
        $manga_title = $request->input('title');
        $manga_cover = $request->input('image');
        $manga_categorie = $request->input('categorie');
        $manga_description = $request->input('description');
        $manga_price = $request->input('price');

        $manga = Manga::create([
            'title' => $manga_title,
            'image' => $manga_cover,
            'categorie' => $manga_categorie,
            'description' => $manga_description,
            'price' => $manga_price,
        ]);
        return response()->json([
            'data' => new MangaResource($manga)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new MangaResource($manga);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $manga_title = $request->input('title');
        $manga_cover = $request->input('image');
        $manga_categorie = $request->input('categorie');
        $manga_description = $request->input('description');
        $manga_price = $request->input('price');

        $manga->update([
            'title' => $manga_title,
            'image' => $manga_cover,
            'categorie' => $manga_categorie,
            'description' => $manga_description,
            'price' => $manga_price,
        ]);
        return response()->json([
            'data' => new MangaResource($manga)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manga->delete();
        return response()->json(null,204);
    }
}
