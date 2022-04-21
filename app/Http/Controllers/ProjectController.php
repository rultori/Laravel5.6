<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $proyects = Project::orderBy('created_at','DESC')->get();

        return view('projects.index', [
            'projects' => Project::latest()->paginate()
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
        return view('projects.create');
    }

    public function store()
    {
        $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        Project::create($fields);

        // Project::create(request()->only('title', 'url', 'description'));

       /* Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]); */

        return redirect()->route('projects.index');

    }

 }
