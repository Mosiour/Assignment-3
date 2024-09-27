<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables with required values
        $name = "Donal Trump";
        $age = "75";

        // Create an associative array to store id, name, and age
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Set the cookie parameters
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $cookie_minutes = 1;
        $cookie_path = '/';
        $cookie_domain = $_SERVER['SERVER_NAME'];
        $cookie_secure = false;
        $cookie_httpOnly = true;

        // Set the cookie with the defined parameters
        Cookie::queue($cookie_name, $cookie_value, $cookie_minutes, $cookie_path, $cookie_domain, $cookie_secure, $cookie_httpOnly);

        // Return response with data and status code 200, along with the cookie
        return response()->json($data, 200);
    }
}
