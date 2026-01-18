<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function stats() {
        return response()->json([
            'project_counts' => Project::where('user_id', auth()->id())->count(),
            'task_count' => Task::where('user_id', auth()->id())->count()
        ]);
    }
}
