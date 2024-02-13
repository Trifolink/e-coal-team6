<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Tag;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('tags')->get();
        return response()->json($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'thumbnailURL' => 'required|url',
        'mediaType' => 'nullable',
        'mediaURL' => 'nullable|url',
        'leadStory' => 'required|boolean',
        'tags' => 'required|array',
    ]);

    $article = Article::create([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
        'thumbnailURL' => $request->input('thumbnailURL'),
        'mediaType' => $request->input('mediaType'),
        'mediaURL' => $request->input('mediaURL'),
        'leadStory' => $request->input('leadStory'),
    ]);
    
    foreach ($validatedData['tags'] as $tagName) {
        $tag = Tag::firstOrCreate(['name' => $tagName]);
        $article->tags()->attach($tag->id);        
    }

    
    return response()->json($article, 201);
}


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $article->load('tags');
        return response()->json($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'thumbnailURL' => 'required|url',
            'mediaType' => 'nullable',
            'mediaURL' => 'nullable|url',
            'leadStory' => 'required|boolean',
            'tags' => 'required|array',
        ]);
    
        $article->update([
            'title'=> $request->input('title'),
            'content'=> $request->input('content'),
            'thumbnailURL'=> $request->input('thumbnailURL'),
            'mediaType'=> $request->input('mediaType'),
            'mediaURL'=> $request->input('mediaURL'),
            'leadStory'=> $request->input('leadStory'),
        ]);
    
        // $article->tags()->sync($validatedData['tags']);
    
        return response()->json($article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->tags()->detach();
        $article->delete();
    }
}
