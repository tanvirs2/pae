<?php

namespace App\Http\Controllers;

use App\About, Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public $_img_folder = 'img/about';
    public $pageData = [];

    public function __construct()
    {
        $this->pageData = [
            'viewFolder' => 'about',
            'pageName' => 'About',
            'route' => 'about',
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
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $about = About::first();
        $compact = compact(
            'about'
        );

        return view('admin.'.$this->pageData['viewFolder'].'.single', $compact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $about = About::first();
        $compact = compact(
            'about'
        );

        return view('admin.'.$this->pageData['viewFolder'].'.edit', $compact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $about = About::first();

        $about->vision = $request['vision'];
        $about->value = $request['value'];
        $about->other = $request['other'];
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $about->img = $fileName = time(). '.' .$img->getClientOriginalExtension() ;
            $img_resize = Image::make($img->getRealPath());
            $img_resize->widen(250);
            $img_resize->save(public_path($this->_img_folder.'/' .$fileName));
        }
        $about->save();

        return back()->with(['success' => 'Successfully update about !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
