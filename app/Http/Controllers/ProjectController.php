<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\SaveProjectRequest;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }


    public function index()
    {
        // $proyects = Project::orderBy('created_at','DESC')->get();

        return view('projects.index', [
            'projects' => Project::latest()->paginate('5')
        ]);

    }

    public function show(Project $project)
    {

        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create',[
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {

        Project::create( $request->validated() );

        // Project::create(request()->only('title', 'url', 'description'));

       /* Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]); */

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');

    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);

    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show', $project)->with('status', 'El proyecto se actualizó com éxito.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto se  eliminó con éxito');
    }

 }
