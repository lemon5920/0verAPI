<?php

namespace App\Http\Controllers\Auth\SchoolReviewer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

use Validator;
use App\SchoolReviewer;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function guard()
    {
        return Auth::guard('schoolreviewer');
    }

    public function username()
    {
        return 'username';
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = NULL;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'SchoolReviewerLogout']]);
    }

    /*
    |--------------------------------------------------------------------------
    | Manual Login
    |--------------------------------------------------------------------------
    */
    public function SchoolReviewerLogin(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('username', 'password');

        $validator = Validator::make($credentials, [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['messages' => ['invalid credentials']], 401);
        }

        // attempt to verify the credentials and create a token for the user
        if (!Auth::guard('schoolreviewer')->attempt(['username' => $credentials['username'], 'password' => $credentials['password'], 'deleted_at' => NULL])) {
            return response()->json(['messages' => ['invalid credentials']], 401);
        }

        return response()->json(SchoolReviewer::where('username', '=', $credentials['username'])->first());
    }

    /*
    |--------------------------------------------------------------------------
    | Manual Logout
    |--------------------------------------------------------------------------
    */
    public function SchoolReviewerLogout()
    {
        Auth::guard('schoolreviewer')->logout();
    }
}
