<?php
/**
 * Created by PhpStorm.
 * User: mantisa1824
 * Date: 10.09.14
 * Time: 17:37
 */

class PostTableSeeder extends Seeder{

	public function run(){

		$posts = array(
			array(
				'meta_title' => 'Пост № 1',
				'meta_keywords' => 'Пост № 1',
				'title' => 'Пост № 1',
				'description' => 'Это описание к посту № 1',
				'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
				'author' => 'mantisa1824',
				'tags' => 'Web , php , javascript , css , html',
				'img' => 'pic01.jpg'
			),
			array(
				'meta_title' => 'Пост № 2',
				'meta_keywords' => 'Пост № 2',
				'title' => 'Пост № 2',
				'description' => 'Это описание к посту № 2',
				'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
				'author' => 'mantisa1824',
				'tags' => 'Web , php , javascript , css , html',
				'img' => 'pic02.jpg'
			),
			array(
				'meta_title' => 'Пост № 3',
				'meta_keywords' => 'Пост № 3',
				'title' => 'Пост № 3',
				'description' => 'Это описание к посту № 3',
				'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
				'author' => 'mantisa1824',
				'tags' => 'Web , php , javascript , css , html',
				'img' => '30.png'
			),
			array(
				'meta_title' => 'Пост № 4',
				'meta_keywords' => 'Пост № 4',
				'title' => 'Пост № 4',
				'description' => 'Это описание к посту № 4',
				'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
				'author' => 'mantisa1824',
				'tags' => 'Web , php , javascript , css , html',
				'img' => '55.png'
			),
			array(
				'meta_title' => 'Пост № 5',
				'meta_keywords' => 'Пост № 5',
				'title' => 'Пост № 5',
				'description' => 'Это описание к посту № 5',
				'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
				'author' => 'mantisa1824',
				'tags' => 'Web , php , javascript , css , html',
				'img' => '53.png'
			),

		);

		DB::table('posts')->insert($posts);

	}
} 