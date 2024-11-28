<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RecommendationController extends Controller
{
    public function getRecommendations($userId)
    {
        $recommendations = $this->generateRecommendations($userId); // Add your helper function here

        return response()->json([
            'user_id' => $userId,
            'recommendations' => $recommendations,
        ]);
    }
    public function showRecommendationsUI($userId)
    {
        // Dapatkan rekomendasi untuk user
        $recommendations = $this->generateRecommendations($userId); // Gunakan helper function yang sudah dibuat

        // Dapatkan data item dari ID rekomendasi
        $items = DB::table('movies')
            ->whereIn('id', $recommendations)
            ->get();

        // Kirim data ke view
        return view('index', [
            'userId' => $userId,
            'items' => $items
        ]);
    }

    function getUserInteractions($userId): array
    {
        $interactions = DB::table('user_movie_pivot')
            ->where('user_id', $userId)
            ->pluck('rating', 'movie_id')
            ->toArray();

        return $interactions;
    }

    function calculateUserSimilarities($userId)
    {
        $currentUserInteractions = $this->getUserInteractions($userId);
        $allUsers = DB::table('users')->where('id', '!=', $userId)->get();

        $similarities = [];

        foreach ($allUsers as $user) {
            $otherUserInteractions = $this->getUserInteractions($user->id);
            $similarities[$user->id] = $this->calculateCosineSimilarity($currentUserInteractions, $otherUserInteractions);
        }

        arsort($similarities); // Sort by similarity
        return $similarities;
    }


    function calculateCosineSimilarity(array $user1, array $user2): float
    {
        $dotProduct = 0;
        $magnitudeUser1 = 0;
        $magnitudeUser2 = 0;

        foreach ($user1 as $itemId => $rating1) {
            $rating2 = $user2[$itemId] ?? 0;

            $dotProduct += $rating1 * $rating2;
            $magnitudeUser1 += $rating1 ** 2;
            $magnitudeUser2 += $rating2 ** 2;
        }

        if ($magnitudeUser1 == 0 || $magnitudeUser2 == 0) {
            return 0; // No similarity
        }

        return $dotProduct / (sqrt($magnitudeUser1) * sqrt($magnitudeUser2));
    }

    function generateRecommendations($userId): array
    {
        $similarUsers = $this->calculateUserSimilarities($userId);
        $userInteractions = array_keys($this->getUserInteractions($userId)); // Items user already interacted with

        $recommendations = [];

        foreach ($similarUsers as $otherUserId => $similarity) {
            $otherUserInteractions = $this->getUserInteractions($otherUserId);

            foreach ($otherUserInteractions as $itemId => $rating) {
                if (!in_array($itemId, $userInteractions)) {
                    // Weight the rating by similarity
                    if (!isset($recommendations[$itemId])) {
                        $recommendations[$itemId] = 0;
                    }
                    $recommendations[$itemId] += $similarity * $rating;
                }
            }
        }

        arsort($recommendations); // Sort by weighted score
        return array_keys($recommendations); // Return item IDs as recommendations
    }
}
