<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;


class CategoryAPIController extends Controller
{
    public function index(): JsonResponse
    {
        $categories = Category::all();
        $formattedcategories = $categories->map(function ($Category) {
            return [
                'Category' => $Category,
                'links' => $Category->getLinks(),
            ];
        });

        return response()->json([
            'categories' => $formattedcategories,
        ]);
    }

    public function show($name): JsonResponse
    {
        $Category = Category::getCategoryByname($name);

        if ($Category) {
            return response()->json([
                'Category' => $Category,
                'links' => $Category->getLinks(),
            ]);
        } else {
            return response()->json([
                'error' => 'Category not found',
            ], 404);
        }

    }
    public function store(Request $request): JsonResponse
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:categories',
            'name' => 'required|string',
        ]);

        // If validation fails, return an error response
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Create a new Category using the provided data
        $Category = Category::createCategory($request->all());

        return response()->json([
            'message' => 'Category created successfully',
            'Category' => $Category,
            'links' => $Category->getLinks(),
        ]);
    }

    public function destroy($name): JsonResponse
    {
        $Category = Category::where('name', $name)->first();

        if (!$Category) {
            return response()->json([
                'error' => 'Category not found',
            ], 404);
        }

        $Category->delete();

        return response()->json([
            'message' => 'Category deleted successfully',
        ]);
    }
}
