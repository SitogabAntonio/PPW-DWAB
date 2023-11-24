<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

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
        $community = community::findOrFail($community_name);

        return response()->json([
            'community' => $community,
            'links' => $community->getLinks(),
        ]);
    }

    public function update(Request $request, $community_name): JsonResponse
    {
        $community = community::findOrFail($community_name);
        $community->update($request->all());

        return response()->json([
            'message' => 'community updated successfully',
            'community' => $community,
            'links' => $community->getLinks(),
        ]);
    }

    public function destroy($community_name): JsonResponse
    {
        $community = community::findOrFail($community_name);
        $community->delete();

        return response()->json([
            'message' => 'community deleted successfully',
        ]);
    }
}