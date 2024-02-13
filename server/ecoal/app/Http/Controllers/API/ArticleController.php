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
    
        $tagIds = [];
        foreach ($validatedData['tags'] as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
    
            $tagIds[] = $tag->id;
        }
    
        $article = Article::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'thumbnailURL' => $validatedData['thumbnailURL'],
            'mediaType' => $validatedData['mediaType'],
            'mediaURL' => $validatedData['mediaURL'],
            'leadStory' => $validatedData['leadStory'],
        ]);
    
        $article->tags()->attach($tagIds);
    
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
