<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SkillUpController extends Controller
{
    public function view(
        string $id,
        Request $request,
        Response $response
    ) {
        echo 'Hello world!! ' . $id;
    }
}
