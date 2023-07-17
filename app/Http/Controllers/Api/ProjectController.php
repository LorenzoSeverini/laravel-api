<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with("type", "technologies")->paginate(2);

        $response = [
            'success' => true,
            'results' => $projects,
            'message' => 'Projects found successfully'
        ];

        return response()->json($response);
    }
}