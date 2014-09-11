<?php
/**
 * Created by PhpStorm.
 * User: mantisa1824
 * Date: 10.09.14
 * Time: 17:37
 */

class PostTableSeeder extends Seeder{

	public function run(){

		for($i = 1 ; $i <= 20 ; $i++){

			$posts = array(
				array(
					'meta_title' => 'Пост № ' . $i,
					'meta_keywords' => 'Пост № ' . $i,
					'title' => 'Пост № ' . $i,
					'description' => 'Это описание к посту № ' . $i,
					'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
					'author' => 'mantisa1824',
					'tags' => 'Web , php , javascript , css , html',
					'img' => 'pic01.jpg'
				)
			);

			DB::table('posts')->insert($posts);

		}

	}
} 