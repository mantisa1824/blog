<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function($t){
			$t->increments('id');
			$t->string('url' , 100);
			$t->string('meta_title' , 150);
			$t->string('meta_keywords', 150);
			$t->string('description');
			$t->string('title', 150);
			$t->text('content');
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
		Schema::drop('pages');
	}

}
