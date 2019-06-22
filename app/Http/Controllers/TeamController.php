<?php

namespace App\Http\Controllers;

use App\Team, Image;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public $_img_folder = 'img/team';
    public $pageData = [];

    public function __construct()
    {
        $this->pageData = [
            'viewFolder' => 'team',
            'pageName' => 'Team Member',
            'route' => 'team',
            'imgFolder' => 'team',
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
        $newses = Team::all();
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
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);


        $news = new Team();
        $news->name = $request['name'];
        $news->position = $request['position'];
        $news->details = $request['details'];
        $news->facebook_link = $request['facebook_link'];
        $news->tweeter_link = $request['tweeter_link'];
        $news->linked_link = $request['linked_link'];

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
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $news = $team;

        $compact = compact(
            'news'
        );

        return view('admin.'.$this->pageData['viewFolder'].'.single', $compact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $news = $team;
        $compact = compact(
            'news'
        );
        return view('admin.'.$this->pageData['viewFolder'].'.edit', $compact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);


        $news = $team;
        $news->name = $request['name'];
        $news->position = $request['position'];
        $news->details = $request['details'];
        $news->facebook_link = $request['facebook_link'];
        $news->tweeter_link = $request['tweeter_link'];
        $news->linked_link = $request['linked_link'];

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $news->img = $fileName = time(). '.' .$img->getClientOriginalExtension() ;
            $img_resize = Image::make($img->getRealPath());
            $img_resize->widen(250);
            $img_resize->save(public_path($this->_img_folder.'/' .$fileName));
        }
        $news->save();

        return redirect()->back()->with(['success'=> ' Updated Successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return back()->with(['info'=> ' Delete '.$this->pageData['viewFolder'].' Successfully.']);
    }
}
