<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function store()
    {

        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => 'required'
        ]);

        Project::create(request(['title', 'description']));
        
        //Same as above
        /* $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save(); */

        return redirect('/projects');
    }

    public function create()
    {

        return view('projects.create');

    }

   

    public function show(Project $project)
    {

        //$project = Project::findOrFail($id);

        //return $project;

        return view('projects.show', compact('project'));

    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        //Same as above
        //$project = Project::findOrFail($id);

        /* $project->title = request('title');
        $project->description = request('description');

        $project->save(); */

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        //$project = Project::findOrFail($id);
        $project->delete($id);

        return redirect('/projects');
    }

    public function edit(Project $project)
    {

        //$project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));

    }
}

