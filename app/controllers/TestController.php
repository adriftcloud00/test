<?php

class TestController extends BaseController {

	public $layout = 'layouts.frontend';

	public function one() {
		$this -> layout -> content = View::make('one');
	}

	public function two() {
		return 'Here I AM!';
	}

	public function post($id) {
		return 'Here I post ' . $id;
	}

}
