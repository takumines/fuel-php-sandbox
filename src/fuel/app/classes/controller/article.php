<?php

use Fuel\Core\Controller_Template;
use Fuel\Core\View;

class Controller_Article extends Controller_Template
{

    /**
     * @return void
     */
    public function before(): void
    {
        parent::before();

        if (!Auth::check())
        {
            Response::redirect('auth/login');
        }
    }

    /**
     * @return void
     */
	public function action_index(): void
    {
		$articles = Model_Article::find('all');
        $this->template->title = '記事一覧';
        $this->template->content = View::forge('article/index', [
            'articles' => $articles,
        ]);
	}

}
