<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $users = User::all();

        $formattedUsers = $users->map(function ($user) {
            return [
                'user' => $user,
                'links' => $user->getLinks(),
            ];
        });

        return response()->json([
            'users' => $formattedUsers,
        ]);
    }

    public function show($name): JsonResponse
    {
        $user = User::getUserByName($name);

        if ($user) {
            return response()->json([
                'user' => $user,
                'links' => $user->getLinks(),
            ]);
        } else {
            return response()->json([
                'error' => 'User not found',
            ], 404);
        }
    }


    public function store(Request $request): JsonResponse
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
            'no_telp' => 'nullable|string',
            'gender' => 'nullable|string',
            'status' => 'nullable|string'
        ]);

        // If validation fails, return an error response
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Create a new user using the provided data
        $user = User::createUsers($request->all());

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user,
            'links' => $user->getLinks(),
        ]);
    }

    public function destroy($name): JsonResponse
    {
        $user = User::where('name', $name)->first();

        if (!$user) {
            return response()->json([
                'error' => 'User not found',
            ], 404);
        }

        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully',
        ]);
    }
}
