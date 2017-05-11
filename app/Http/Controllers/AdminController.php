<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Illuminate\Validation\Rule;

use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Admin::all();
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
            return Admin::where('username', '=', $id)->first();
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
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:191|unique:admins,username',
            'password' => 'required|string|min:6',
            'email' => 'sometimes|nullable|email|unique:admins,email',
            'chinese_name' => 'required|string',
            'admin' => 'sometimes|nullable|boolean'
        ]);

        if($validator->fails()) {
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
            $validator = Validator::make($request->all(), [
                'password' => 'required|string|min:6',
                'email' => ['sometimes', 'nullable', 'email', Rule::unique('admins', 'email')->ignore($id, 'username')],
                'chinese_name' => 'required|string'
            ]);

            if($validator->fails()) {
                $messages = $validator->errors()->all();
                return response()->json(compact('messages'), 400);
            }

            Admin::where('username', '=', $id)->update([
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'chinese_name' => $request->chinese_name,
            ]);

            return Admin::where('username', '=', $id)->first();
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
            Admin::where('username', '=', $id)->delete();

            return Admin::withTrashed()->where('username', '=', $id)->first();
        }

        $messages = array('User Data Not Found!');

        return response()->json(compact('messages'), 404);
    }
}