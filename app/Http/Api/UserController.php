<?php

namespace App\Http\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(): Response
    {
        return new Response(
            [
                'user' => [
                    'hello' => 'world'
                ]
            ]
        );
    }
}
