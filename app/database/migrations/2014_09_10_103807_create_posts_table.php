<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts' , function($t){
			$t->increments('id');
			$t->string('meta_title', 150);
			$t->string('meta_keywords', 150);
			$t->string('title', 150);
			$t->string('description');
			$t->text('content');
			$t->string('author', 50);
			$t->text('tags');
			$t->string('img');
			$t->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
