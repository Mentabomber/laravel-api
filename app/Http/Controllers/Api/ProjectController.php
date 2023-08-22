<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function ProjectIndex() {

        $projects = Project :: with('type') -> paginate(12);

        return response() -> json([
            'projects' => $projects
        ]);
    }
    public function ProjectShow($id) {

        $project = Project :: findOrFail($id);

        return response() -> json(['project' => $project]);
    }
}
