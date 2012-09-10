<?php

class Admin\_Controller extends Base_Controller {

	public function action_settings()
	{
		return View::make('admin.settings');
	}

	public function action_result()
	{
		return View::make('admin.results');
	}

}