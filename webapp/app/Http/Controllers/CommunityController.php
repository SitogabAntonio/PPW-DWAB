<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;


class CommunityController extends Controller
{
    public function index(): JsonResponse
    {
        $communities = Community::all();
        $formattedCommunities = $communities->map(function ($community) {
            return [
                'community' => $community,
                'links' => $community->getLinks(),
            ];
        });

        return response()->json([
            'communities' => $formattedCommunities,
        ]);
    }

    public function show($community_name): JsonResponse
    {
        $community = Community::getcommunityByName($community_name);

        if ($community) {
            return response()->json([
                'community' => $community,
                'links' => $community->getLinks(),
            ]);
        } else {
            return response()->json([
                'error' => 'community not found',
            ], 404);
        }

    }

    public function store(Request $request): JsonResponse
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'community_name' => 'required|string|unique:communities',
            'profile_path' => 'nullable|string',
            'deskripsi' => 'required|string',
        ]);

        // If validation fails, return an error response
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Create a new community using the provided data
        $community = Community::createCommunity($request->all());

        return response()->json([
            'message' => 'Community created successfully',
            'community' => $community,
            'links' => $community->getLinks(),
        ]);
    }

    public function destroy($community_name): JsonResponse
    {
        $community = Community::where('community_name', $community_name)->first();

        if (!$community) {
            return response()->json([
                'error' => 'Community not found',
            ], 404);
        }

        $community->delete();

        return response()->json([
            'message' => 'Community deleted successfully',
        ]);
    }
}
