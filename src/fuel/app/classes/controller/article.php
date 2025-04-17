<?php

use Auth\Auth;
use Fuel\Core\Controller_Template;
use Fuel\Core\Date;
use Fuel\Core\Input;
use Fuel\Core\Log;
use Fuel\Core\Response;
use Fuel\Core\Session;
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

    /**
     * @param int|null $id
     * @return void
     */
    public function action_view(int $id = null): void
    {
        is_null($id) and Response::redirect('article');

        if ( ! $article = Model_Article::find($id))
        {
            Session::set_flash('error_message', '記事が見つかりません。');
            Response::redirect('articles');
        }

        $this->template->title = "記事詳細";
        $this->template->content = View::forge('article/show', [
            'article' => $article,
        ]);
    }

    /**
     * @return void
     */
    public function action_create(): void
    {
        $valid = Validation_Article_Create::forge();

        // POSTリクエスト以外の場合は新規登録画面を表示
        if (Input::method() !== 'POST') {
            $this->template->title = '記事作成';
            $this->template->content = View::forge('article/create', ['errors' => $valid->error()]);

            return;
        }

        if(!$valid->run()) {
            Session::set_flash('error_message', '入力に誤りがあります。');

            $this->template->title = '記事作成';
            $this->template->content = View::forge('article/create', ['errors' => $valid->error()]);

            return;
        }

        try {
            $data = $valid->validated();
            $article = Model_Article::forge([
                'title' => $data['title'],
                'body' => $data['body'],
                'user_id' => Auth::get('id'),
                'created_at' => Date::forge()->get_timestamp(),
                'updated_at' => Date::forge()->get_timestamp(),
            ]);
            $article->save();
        } catch (Exception $e) {
            Session::set_flash('error_message', '記事の新規作成に失敗しました。');
            Log::error('記事の新規作成に失敗しました。', $e);

            $this->template->title = '記事作成';
            $this->template->content = View::forge('article/create', ['errors' => $valid->error()]);

            return;
        }

        // 記事の新規作成に成功したら記事一覧画面に遷移させる
        Session::set_flash('success_message', '記事の新規作成が完了しました。');
        Response::redirect('articles');
    }
}
