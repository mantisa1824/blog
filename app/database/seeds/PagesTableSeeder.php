<?php
/**
 * Created by PhpStorm.
 * User: mantisa1824
 * Date: 10.09.14
 * Time: 18:07
 */

class PagesTableSeeder extends Seeder{

	public function run(){

		$pages = array(
			array(
				'url' => 'about',
				'meta_title' => 'Об авторе',
				'meta_keywords' => 'html , css , javascript',
				'description' => 'Ьлог о веб разработке на html , css , javascript и многое другое',
				'title' => 'Об авторе',
				'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don t look even slightly believable.',
			),
			array(
				'url' => 'contacts',
				'meta_title' => 'Контакты',
				'meta_keywords' => 'html , css , javascript',
				'description' => 'Ьлог о веб разработке на html , css , javascript и многое другое',
				'title' => 'Контакты',
				'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don t look even slightly believable.',
			),
		);

		DB::table('pages')->insert($pages);
	}

}