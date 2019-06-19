<?php

namespace App\Http\Controllers;

use App\Project, Image;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public $_img_folder = 'img/project';
    public $pageData = [];

    public function __construct()
    {
        $this->pageData = [
            'viewFolder' => 'project',
            'pageName' => 'Project',
            'route' => 'project',
        ];

        view()->share('pageData', $this->pageData);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd((new Project())->newsImg());
        $newses = Project::all();
        $compact = compact(
            'newses'
        );
        return view('admin.'.$this->pageData['viewFolder'].'.index', $compact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.'.$this->pageData['viewFolder'].'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);


        $news = new Project();
        $news->title = $request['title'];
        $news->details = $request['details'];
        $news->date = $request['date'];

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $news->img = $fileName = time(). '.' .$img->getClientOriginalExtension() ;
            $img_resize = Image::make($img->getRealPath());
            $img_resize->widen(250);
            $img_resize->save(public_path($this->_img_folder.'/' .$fileName));
        }
        $news->save();

        return redirect()->back()->with(['success'=> ' Created Successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $news = $project;

        $compact = compact(
            'news'
        );

        return view('admin.'.$this->pageData['viewFolder'].'.single', $compact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $news = $project;
        $compact = compact(
            'news'
        );
        return view('admin.'.$this->pageData['viewFolder'].'.edit', $compact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with(['info'=> ' Delete news Successfully.']);
    }
}
