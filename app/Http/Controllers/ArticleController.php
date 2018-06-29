<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'img_route' => 'required|string|max:255',
            'year' => 'required|date|',
            'price' => 'required|numeric',
            'artist_id' => 'required|integer|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Article
     */
    public function create(array $data)
    { 
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {      $article = new Article();
         
          $article->name = $data->get('name');
          $article->description = $data->get('description');
          $article->year = $data->get('year');
          $article->exist = 0;
          $article->price = $data->get('price');
          $article->artist_id = $data->get('artist');
          $article->img_route = $data->get('image');
          $article->save();
/*
            $article = Article::create([
               
                'name' => $data['name'],
                'description' => $data['description'],
                'exist'=> 0,
                'img_route' => $data['img_route'],
                'year' => $data['year'],
                'price' => $data['price'],
                'artist_id' => $data['artist'],
                'img_route' => $data['img']
                  ]);
    
                  */
            
            return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function pdf()
    {        
  
        $Article = Article::all();
        //return view('admin/articlepdf', compact('Article'));
      $pdf =  \PDF::loadView('admin/articlepdf', compact('Article'));
        return $pdf->download('Inventario.pdf');

    }
}
