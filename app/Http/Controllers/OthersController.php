<?php

namespace App\Http\Controllers;

use App\Others;
use Illuminate\Http\Request;

class OthersController extends Controller
{
    public $_img_folder = 'img/other';
    public $pageData = [];

    public function __construct()
    {
        $this->pageData = [
            'viewFolder' => 'others',
            'pageName' => 'Others',
            'route' => 'others',
            'imgFolder' => 'others',
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $others = Others::first();
        $compact = compact(
            'others'
        );

        return view('admin.'.$this->pageData['viewFolder'].'.single', $compact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $others = Others::first();
        $compact = compact(
            'others'
        );

        return view('admin.'.$this->pageData['viewFolder'].'.edit', $compact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Others $others)
    {
        //dd($request->all());
        $about = Others::first();
        if (!$about) {
            $about = new Others();
        }

        $about->about = $request['about'];
        $about->email = $request['email'];
        $about->phone = $request['phone'];
        $about->address = $request['address'];
        $about->fb_link = $request['fb_link'];
        $about->tweet_link = $request['tweet_link'];
        $about->insta_link = $request['insta_link'];
        $about->link_in = $request['link_in'];
        $about->you_link = $request['you_link'];
        $about->skype = $request['skype'];
        $about->recent = $request['recent'];

        $about->save();

        return back()->with(['success' => 'Successfully update '.$this->pageData['viewFolder'].' !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Others  $others
     * @return \Illuminate\Http\Response
     */
    public function destroy(Others $others)
    {
        //
    }
}
