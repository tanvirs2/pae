<?php

namespace App\Http\Controllers;

use App\News, Auth, Image;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public $_img_folder = 'img/news';
    public $pageData = [];

    public function __construct()
    {
        $this->pageData = [
            'pageName' => 'News',
            'route' => 'news',
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
        $newses = News::all();
        $compact = compact(
            'newses'
        );
        return view('admin.news.index', $compact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loggedUser = Auth::user();

        if(!$loggedUser)
        {
            return redirect()->back()->with(['fail'=>'Unauthorized Access.']);
        }

        $request->validate([
            'title' => 'required',
        ]);


        $news = new News();
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
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $compact = compact(
            'news'
        );

        return view('admin.news.single', $compact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $compact = compact(
            'news'
        );
        return view('admin.news.edit', $compact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return back()->with(['info'=> ' Delete news Successfully.']);
    }
}
