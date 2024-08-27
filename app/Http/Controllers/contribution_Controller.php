<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContentType;

class contribution_Controller extends Controller
{
    public function index()
    {

        $all_content_types = ContentType::all();
        return view('cont.contribution',
    [
        'content_types' => $all_content_types
    ]       
    );
    }
}
