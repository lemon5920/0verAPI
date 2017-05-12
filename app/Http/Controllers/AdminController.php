<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use DB;
use Illuminate\Validation\Rule;

use App\User;
use App\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->can('list', User::class)) {
            return User::has('admin')->with('admin')->get();
        }

        return User::whereHas('admin', function ($query) use ($user) {
            $query->where('username', '=', $user->username)->orWhere('admin', '=', true);
        })->with('admin')->get();

    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if (User::where('username', '=', $id)->has('admin')->exists()) {
            $data = User::where('username', '=', $id)->with('admin')->first();

            $user = Auth::user();

            if ($user->can('view', $data)) {
                return $data;
            }
        }

        $messages = array('User Data Not Found!');

        return response()->json(compact('messages'), 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $this->authorize('create', User::class);

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:191|unique:admins,username|unique:users,username',
            'password' => 'required|string|min:6',
            'email' => 'sometimes|nullable|email',
            'chinese_name' => 'required|string',
            'english_name' => 'required|string',
            'phone' => 'required|string',
            'admin' => 'sometimes|required|boolean'
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors()->all();
            return response()->json(compact('messages'), 400);
        }

        return DB::transaction(function () use ($request){
            User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'chinese_name' => $request->chinese_name,
                'english_name' => $request->english_name,
                'phone' => $request->phone,
            ]);

            Admin::create([
                'username' => $request->username,
                'admin' => $request->input('admin', 0),
            ]);

            return User::where('username', '=', $request->username)->with('admin')->first();
        });
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (User::where('username', '=', $id)->exists()) {
            $data = User::where('username', '=', $id)->first();

            $user = Auth::user();

            if ($user->can('update', $data)) {
                $validator = Validator::make($request->all(), [
                    'password' => 'sometimes|required|string|min:6',
                    'email' => 'sometimes|nullable|email',
                    'chinese_name' => 'sometimes|required|string',
                    'english_name' => 'sometimes|required|string',
                    'phone' => 'sometimes|required|string',
                    'admin' => 'sometimes|required|boolean'
                ]);

                if ($validator->fails()) {
                    $messages = $validator->errors()->all();
                    return response()->json(compact('messages'), 400);
                }

                return DB::transaction(function () use ($request, $user, $id){
                    $updateData = array();

                    if ($request->has('password')) {
                        $updateData += array(
                            'password' => Hash::make($request->password)
                        );
                    }

                    if ($request->has('email')) {
                        $updateData += array(
                            'email' => $request->email
                        );
                    }

                    if ($request->has('chinese_name')) {
                        $updateData += array(
                            'chinese_name' => $request->chinese_name
                        );
                    }

                    User::where('username', '=', $id)->update($updateData);

                    if ($request->has('admin') && (bool)$user->admin->admin && $user->username != $id) {
                        Admin::where('username', '=', $id)->update([
                            'admin' => $request->input('admin', 0)
                        ]);
                    }

                    return User::where('username', '=', $id)->with('admin')->first();
                });
            }
        }

        $messages = array('User Data Not Found!');

        return response()->json(compact('messages'), 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();

        if ($user->username == $id) {
            $messages = array('Can\'t Delete YourSelf!');

            return response()->json(compact('messages'), 400);
        }

        if (User::where('username', '=', $id)->exists()) {
            if ($user->can('update', User::class)) {
                User::where('username', '=', $id)->delete();

                return User::withTrashed()->where('username', '=', $id)->first();
            }
        }

        $messages = array('User Data Not Found!');

        return response()->json(compact('messages'), 404);
    }
}