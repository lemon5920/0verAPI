<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use Illuminate\Validation\Rule;

use App\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
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

        if ($user->can('list', $user)) {
            return Admin::all();
        }

        return Admin::where('username', '=', $user->username)
            ->orWhere('admin', '=', true)->get();
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
        if (Admin::where('username', '=', $id)->exists()) {
            $data = Admin::where('username', '=', $id)->first();

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

        if ($user->can('create', Admin::class)) {
            $validator = Validator::make($request->all(), [
                'username' => 'required|string|max:191|unique:admins,username',
                'password' => 'required|string|min:6',
                'email' => 'sometimes|nullable|email|unique:admins,email',
                'chinese_name' => 'required|string',
                'admin' => 'sometimes|nullable|boolean'
            ]);

            if ($validator->fails()) {
                $messages = $validator->errors()->all();
                return response()->json(compact('messages'), 400);
            }

            $newUser = Admin::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'chinese_name' => $request->chinese_name,
                'admin' => $request->input('admin', false),
            ]);

            return response()->json($newUser, 201);
        }
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
        if (Admin::where('username', '=', $id)->exists()) {
            $data = Admin::where('username', '=', $id)->first();

            $user = Auth::user();

            if ($user->can('update', $data)) {
                $validator = Validator::make($request->all(), [
                    'password' => 'sometimes|required|string|min:6',
                    'email' => ['sometimes', 'nullable', 'email', Rule::unique('admins', 'email')->ignore($id, 'username')],
                    'chinese_name' => 'sometimes|required|string',
                    'admin' => 'sometimes|nullable|boolean'
                ]);

                if ($validator->fails()) {
                    $messages = $validator->errors()->all();
                    return response()->json(compact('messages'), 400);
                }

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

                if ($request->has('admin') && (bool)$user->admin && $user->username != $id) {
                    $updateData += array(
                        'admin' => $request->input('admin', false),
                    );
                }

                Admin::where('username', '=', $id)->update($updateData);

                return Admin::where('username', '=', $id)->first();
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
        if (Admin::where('username', '=', $id)->exists()) {
            $user = Auth::user();

            if ($user->can('update', Admin::class) && $user->username != $id) {
                Admin::where('username', '=', $id)->delete();

                return Admin::withTrashed()->where('username', '=', $id)->first();
            }
        }

        $messages = array('User Data Not Found!');

        return response()->json(compact('messages'), 404);
    }
}