<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\BackendController;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Article;

class ArticlesController extends BackendController {

    /**
     * 
     */
    public function index() {
        $articles = Article::all();

        return view('backend.articles.index', compact('articles'));
    }
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function show($id = null) {
        $article = Article::find($id);

        return view('backend.articles.show')->with('article', $article);
    }

    /**
     * 
     * @param type $id
     */
    public function edit($id = null){
        if($id){
            // Edit mode
            
        }
        return view('backend.articles.edit');
    }
}
