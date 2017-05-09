<?php
/**
 * Created by PhpStorm.
 * User: zxp86021
 * Date: 2017/5/9
 * Time: 上午 11:40
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use Validator;
use App\SchoolUser;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    /*
    |--------------------------------------------------------------------------
    | school user login
    |--------------------------------------------------------------------------
    */
    public function SchoolUserLogin(Request $request)
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
        if (!Auth::guard('schooluser')->attempt(['username' => $credentials['username'], 'password' => $credentials['password'], 'deleted_at' => NULL])) {
            return response()->json(['messages' => ['invalid credentials']], 401);
        }

        $user = Auth::guard('schooluser')->user();

        Session::put('username', $user->username);

        return response()->json(SchoolUser::where('username', '=', $credentials['username'])->with('school')->first());
    }
}