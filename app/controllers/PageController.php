<?php
/**
 * Created by PhpStorm.
 * User: mantisa1824
 * Date: 11.09.14
 * Time: 8:58
 */

class PageController extends BaseController{

	public function getIndex(){

		// Получение текущей страницы

		return View::make('page/page');
	}

} 