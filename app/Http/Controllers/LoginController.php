<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->has('password') && $request->password && $request->password === 'waffles') {
            $request->session()->put('password_protect', true);
            return response()->noContent(Response::HTTP_OK);
        }
        return response()->json(['message' => 'Enter a valid credentials'], Response::HTTP_NOT_FOUND);
    }
}
