<?php namespace Curso\Http\Controllers;

use Curso\Post;

class WelcomeController extends Controller {


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$posts = \DB::table('posts')->orderBy('id', 'desc')->paginate(5);

		return view('welcome')
		->with('posts', $posts);
	}

	public function article($slug){

		$post = Post::findBySlug($slug);

		return view('article')
		->with('post', $post);
	}

	public function tags($tag){

		$posts = Post::where('tags', 'LIKE', '%'.$tag.'%')->get();

		return view('tags')
		->with('posts', $posts)
		->with('tag', $tag);
	}

	/* Social Handlings */

	public function twitter(){
		sleep(3);
		return \Redirect::to('https://twitter.com/VictorAvelar');
	}

	public function facebook(){
		sleep(3);
		return \Redirect::to('https://facebook.com/victor.avelar.ossorio');
	}

	public function youtube(){
		sleep(3);
		return \Redirect::to('https://youtube.com/channel/UCcqOds7quWWproLGH7zbcaw');
	}

	public function vine(){
		sleep(3);
		return \Redirect::to('https://vine.co/VictorAvelar');
	}

	public function linkedin(){
		sleep(3);
		return \Redirect::to('https://www.linkedin.com/profile/view?id=331352249');
	}

}
