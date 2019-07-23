<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public $_img_folder = 'img/flag';
    public $pageData = [];

    public function __construct()
    {
        $this->pageData = [
            'viewFolder' => 'language',
            'pageName' => 'Language',
            'route' => 'language',
            'imgFolder' => 'language',
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
        $newses = Language::all();
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
            "language_name" => 'required|unique:languages',
            "home" => 'required',
            "news" => 'required',
            "contact" => 'required',
            "blog" => 'required',
            "partners" => 'required',
            "training" => 'required',
            "conference" => 'required',
            "evaluation" => 'required',
            "post" => 'required',
            "reports" => 'required',
            "article" => 'required',
            "activity" => 'required',
            "recent_news" => 'required',
            "team" => 'required',
            "about" => 'required',
            "follow" => 'required',
            //"lang_about" => 'required',
        ]);


        $news = new Language();
        $news->language_name = $request->language_name;
        $news->home = $request->home;
        $news->news = $request->news;
        $news->contact = $request->contact;
        $news->blog = $request->blog;
        $news->partners = $request->partners;
        $news->training = $request->training;
        $news->conference = $request->conference;
        $news->evaluation = $request->evaluation;
        $news->post = $request->post;
        $news->reports = $request->reports;
        $news->article = $request->article;
        $news->activity = $request->activity;
        $news->recent_news = $request->recent_news;
        $news->team = $request->team;
        $news->about = $request->about;
        $news->follow = $request->follow;
        $news->lang_about = $request->lang_about;

        /*if ($request->hasFile('img')) {
            $img = $request->file('img');
            $news->img = $fileName = time(). '.' .$img->getClientOriginalExtension() ;
            $img_resize = Image::make($img->getRealPath());
            $img_resize->widen(250);
            $img_resize->save(public_path($this->_img_folder.'/' .$fileName));
        }*/
        $news->save();

        return redirect()->back()->with(['success'=> ' Created Successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        $news = $language;

        $compact = compact(
            'news'
        );

        return view('admin.'.$this->pageData['viewFolder'].'.single', $compact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        $news = $language;
        $compact = compact(
            'news'
        );
        return view('admin.'.$this->pageData['viewFolder'].'.edit', $compact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $language)
    {
        $request->validate([
            "language_name" => 'required',
            "home" => 'required',
            "news" => 'required',
            "contact" => 'required',
            "blog" => 'required',
            "partners" => 'required',
            "training" => 'required',
            "conference" => 'required',
            "evaluation" => 'required',
            "post" => 'required',
            "reports" => 'required',
            "article" => 'required',
            "activity" => 'required',
            "recent_news" => 'required',
            "team" => 'required',
            "about" => 'required',
            "follow" => 'required',
        ]);


        $news = $language;
        $news->language_name = $request->language_name;
        $news->home = $request->home;
        $news->news = $request->news;
        $news->contact = $request->contact;
        $news->blog = $request->blog;
        $news->partners = $request->partners;
        $news->training = $request->training;
        $news->conference = $request->conference;
        $news->evaluation = $request->evaluation;
        $news->post = $request->post;
        $news->reports = $request->reports;
        $news->article = $request->article;
        $news->activity = $request->activity;
        $news->recent_news = $request->recent_news;
        $news->team = $request->team;
        $news->about = $request->about;
        $news->follow = $request->follow;
        $news->lang_about = $request->lang_about;

        /*if ($request->hasFile('img')) {
            $img = $request->file('img');
            $news->img = $fileName = time(). '.' .$img->getClientOriginalExtension() ;
            $img_resize = Image::make($img->getRealPath());
            $img_resize->widen(250);
            $img_resize->save(public_path($this->_img_folder.'/' .$fileName));
        }*/
        $news->save();

        return redirect()->back()->with(['success'=> ' Created Successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return back()->with(['info'=> ' Delete Language Successfully.']);
    }
}
