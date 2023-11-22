<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class userController extends Controller
{
    public function index(): JsonResponse
    {
        $users = user::all();

        $formattedusers = $users->map(function ($user) {
            return [
                'user' => $user,
                'links' => $user->getLinks(),
            ];
        });

        return response()->json([
            'users' => $formattedusers,
        ]);
    }

    public function show($name): JsonResponse
    {
        $user = user::findOrFail($name);

        return response()->json([
            'user' => $user,
            'links' => $user->getLinks(),
        ]);
    }

    public function update(Request $request, $name): JsonResponse
    {
        $user = user::findOrFail($name);
        $user->update($request->all());

        return response()->json([
            'message' => 'user updated successfully',
            'user' => $user,
            'links' => $user->getLinks(),
        ]);
    }

    public function destroy($name): JsonResponse
    {
        $user = user::findOrFail($name);
        $user->delete();

        return response()->json([
            'message' => 'user deleted successfully',
        ]);
    }
}