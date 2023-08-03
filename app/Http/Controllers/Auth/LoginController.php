<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\LoginHistory;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // ログインに成功した際に自動で実行されるメソッド
    protected function authenticated(Request $request, $user)
    {
        self::insertLoginHistory($user);
    }
    
    // ログイン履歴をDBに保存する処理
    private function insertLoginHistory($user)
    {
        $login_history_id = LoginHistory::insertGetId([
            'user_id' => $user['id'],
            'user_name' => $user['name'],
            'email' => $user['email'],
        ]);
    }
}
