<?php

use Auth\Auth;
use Auth\Auth_Login_Ormauth;
use Fuel\Core\Controller_Template;
use Fuel\Core\Input;
use Fuel\Core\Log;
use Fuel\Core\Session;
use Fuel\Core\View;

class Controller_Auth extends Controller_Template
{

    /**
     * @return View
     */
	public function action_register(): View
    {
		$valid = Validation_Auth_Register::forge();

        // POSTリクエスト以外の場合は新規登録画面を表示
        if (Input::method() !== 'POST') {
            return View::forge('auth/register', ['errors' => $valid->error()]);
        }

        // POSTリクエストの場合はバリデーションを実行
        if(!$valid->run()) {
            Session::set_flash('error_message', '入力に誤りがあります。');

            return View::forge('auth/register', ['errors' => $valid->error()]);
        }

        // ユーザー名とメールアドレスのユニーク性を確認
        if (Validation_Auth_Register::valid_username_unique($valid->validated('username')) === false) {
            Session::set_flash('error_message', 'このユーザー名は既に使用されています。');

            return View::forge('auth/register', ['errors' => $valid->error()]);
        }
        if (Validation_Auth_Register::valid_email_unique($valid->validated('email')) === false) {
            Session::set_flash('error_message', 'このメールアドレスは既に使用されています。');

            return View::forge('auth/register', ['errors' => $valid->error()]);
        }

        try {
            /** @var Auth_Login_Ormauth $auth */
            $auth = Auth::instance();
            $data = $valid->validated();
            $auth->create_user(
                $data['username'],
                $data['password'],
                $data['email'],
            );
        } catch (Exception $e) {
            Session::set_flash('error_message', 'ユーザーの新規作成に失敗しました。');
            Log::error('ユーザーの新規作成に失敗しました。', $e);

            return View::forge('auth/register', ['errors' => $valid->error()]);
        }

        // 新規登録が成功した場合はログイン画面にリダイレクト
        Session::set_flash('success_message', 'ユーザーの新規作成に成功しました。');

        // TODO: ログイン処理を追加し、記事一覧画面に遷移させる
        return View::forge('auth/login', ['errors' => $valid->error()]);
	}

    /**
     * @return View
     */
    public function action_login(): View
    {
        $valid = Validation_Auth_Login::forge();

        return View::forge('auth/login', ['errors' => $valid->error()]);

        // TODO: ログイン処理を追加する
    }
}
