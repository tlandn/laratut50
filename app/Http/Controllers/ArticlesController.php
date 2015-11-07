<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticlesController extends Controller {

	public function __construct() {
		//$this->middleware('auth', ['except' => ['index','show']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$articles = Article::latest('published_at')->where('published_at','<=', Carbon::now())->get();

		$articles = Article::latest('published_at')->published()->get();


		//$articles = \App\Article::all();
		return view('articles.index', compact('articles'));
	}

	public function show(Article $article)
	{
		return view('articles.show', compact('article'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$article = new Article;
		return view('articles.create',compact('article'));
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function store(CreateArticleRequest $request)
	{
		$article = new Article($request->all());
		\Auth::user()->articles()->save($article); // t? ??ng l?u user_id

		return redirect('articles');
	}



	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Article $article)
	{
		return view('articles.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Article $article, CreateArticleRequest $request)
	{
		$article->update($request->all());

		return redirect('articles');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
