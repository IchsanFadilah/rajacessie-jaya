<?php

namespace App\Http\Controllers;

use App\Data\ProjectData;
use App\Models\Project;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function show(Project $project)
    {
        $project = ProjectData::fromModel($project, true);

        return view('proyek.show', compact('project'));
    }
}
