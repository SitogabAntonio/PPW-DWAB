<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Valnameator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function show($name)
    {
        $user = User::where('name', $name)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return new UserResource($user);
    }

    public function store(Request $request)
    {
        $valnameator = Valnameator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'password' => 'required|string',
            'no_telp' => 'nullable|string',
            'gender' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        if ($valnameator->fails()) {
            return response()->json(['error' => $valnameator->errors()], 422);
        }

        $user = User::create($request->all());

        return new UserResource($user);
    }

    public function update(Request $request, $name)
    {
        $user = User::find($name);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $valnameator = Valnameator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'password' => 'required|string',
            'no_telp' => 'nullable|string',
            'gender' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        if ($valnameator->fails()) {
            return response()->json(['error' => $valnameator->errors()], 422);
        }

        $user->update($request->all());

        return new UserResource($user);
    }

    public function destroy($name)
    {
        $user = user::find($name);
    
        if (!$user) {
            return response()->json(['error' => 'user not found'], 404);
        }
    
        $user->delete();
    
        return response()->json(['message' => 'user deleted successfully']);
    }
    
}

