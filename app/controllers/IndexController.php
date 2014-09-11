<?php
/**
 * Created by PhpStorm.
 * User: mantisa1824
 * Date: 04.09.14
 * Time: 12:34
 */

class IndexController extends BaseController{

	public function getIndex(){
		$posts = Post::select('title' , 'description' , 'img' , 'content')->limit(5)->get();

		if($posts){
			return View::make('index/home')->withPosts($posts);
		}else{
			return View::make('index/empty_home');
		}


	}

} 