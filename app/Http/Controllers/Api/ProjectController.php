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

    public function count()
    {
        $projects = Project::count();

        $response = [
            'success' => true,
            'results' => $projects,
            'message' => 'Projects found successfully'
        ];

        return response()->json($response);
    }

    public function show($id)
    {
        $project = Project::with("type", "technologies")->find($id);

        $response = [
            'success' => true,
            'results' => $project,
            'message' => 'Project found successfully'
        ];

        return response()->json($response);
    }
}
