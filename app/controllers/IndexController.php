<?php
/**
 * Created by PhpStorm.
 * User: mantisa1824
 * Date: 04.09.14
 * Time: 12:34
 */

class IndexController extends BaseController{

	public function getIndex(){
		return View::make('index/home')/*->withPages($this->pages)*/;

	}

} 