<?php

namespace App\Http\Controllers;

use App\Event, Image;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public $_img_folder = 'img/event';
    public $pageData = [];

    public function __construct()
    {
        $this->pageData = [
            'viewFolder' => 'event',
            'pageName' => 'Event',
            'route' => 'event',
            'imgFolder' => 'event',
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
        $newses = Event::all();
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


        $news = new Event();
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
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $news = $event;

        $compact = compact(
            'news'
        );

        return view('admin.'.$this->pageData['viewFolder'].'.single', $compact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $news = $event;
        $compact = compact(
            'news'
        );
        return view('admin.'.$this->pageData['viewFolder'].'.edit', $compact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
        ]);


        $news = $event;
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return back()->with(['info'=> ' Delete news Successfully.']);
    }
}
