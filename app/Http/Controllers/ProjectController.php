<?php

namespace App\Http\Controllers;

use App\Events\ProjectSaved;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;

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
            'projects' => Project::latest()->paginate('10')
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


        $project = new Project( $request->validated() );

        $project->image = $request->file('image')->store('images');

        $project->save();

        ProjectSaved::dispatch($project);



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
        if( $request->hasFile('image')) {
            Storage::delete($project->image);
            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images');

            $project->save();
            //optimización de imagen

            ProjectSaved::dispatch($project);

            // Image::make(storage_path('app/public/'. $project->image));

        }
        else {

            $project->update(array_filter($request->validated()));

        }

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto se actualizó com éxito.');
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto se  eliminó con éxito');
    }

 }
