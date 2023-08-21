<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function ProjectIndex() {

        $projects = Project :: with('type') -> paginate(10);

        return response() -> json([
            'projects' => $projects
        ]);
    }
}
