<?php

namespace App\Presenters;

final class HomepagePresenter extends BasePresenter
{

	public function renderDefault(): void
	{
		$this->template->anyVariable = 'any value';
	}
}
