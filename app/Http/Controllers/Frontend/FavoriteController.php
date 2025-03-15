<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Favourite;
use App\Http\Controllers\Controller;


class FavoriteController extends Controller
{
    public function toggleFavorites(Request $request)
    {
        // Check if the user is logged in
        if (!auth()->guard('web')->check()) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        // Get user ID and channel ID from the request
        $userId = $request->user_id;
        $radioId = $request->radio_id;

        // Check if the channel is already in the favorites table for the user
        $existingFavorite = Favourite::where('user_id', $userId)
                                    ->where('radio_id', $radioId)
                                    ->exists();

        // Toggle favorites based on the existence of the entry
        if ($existingFavorite) {
            // Remove from favorites
            Favourite::where('user_id', $userId)
                    ->where('radio_id', $radioId)
                    ->delete();
            return response()->json(['exists' => false]);
        } else {
            // Add to favorites
            Favourite::create([
                'user_id' => $userId,
                'radio_id' => $radioId
            ]);
            return response()->json(['exists' => true]);
        }
    }
}
