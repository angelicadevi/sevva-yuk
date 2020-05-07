<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;

class RatingController extends Controller
{
    public function formRating(Request $request, $id_produxt)
    {
        return view('rating');
    }

    public function createRating(Request $request, $id_product)
    {
        $rating = [
            'rating_star' => $request->input('rating'),
            'product_id' => $id_product,
            'user_id' => 1, // temporary value
            'rating_comment' => $request->input('rating_comment')
        ];

        Rating::create($rating);

        return view('after-rating');
    }
}
