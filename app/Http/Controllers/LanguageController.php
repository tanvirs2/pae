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
            "our_facebook_page" => 'required',
            "view_full_team_list" => 'required',
            "view_full_list" => 'required',
            "related_project" => 'required',
            "call_us" => 'required',
            "email_us" => 'required',
            "find_us_on" => 'required',
            "read_more" => 'required',
            "subscribe_to_newsletter" => 'required',
            "contacts" => 'required',
            "address" => 'required',
            "phone" => 'required',
            "email" => 'required',
            "our_youtube_video" => 'required',
            "recent_post" => 'required',
            "ads_title" => 'required',
            "visiting_our_offices" => 'required',
            "follow_us_on_facebook" => 'required',
            "send_message" => 'required',
            "your_name" => 'required',
            "your_email_address" => 'required',
            "your_phone" => 'required',
            "your_message" => 'required',
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

        $news->our_facebook_page = $request->our_facebook_page;
        $news->view_full_team_list = $request->view_full_team_list;
        $news->view_full_list = $request->view_full_list;
        $news->related_project = $request->related_project;
        $news->call_us = $request->call_us;
        $news->email_us = $request->email_us;
        $news->find_us_on = $request->find_us_on;
        $news->read_more = $request->read_more;
        $news->subscribe_to_newsletter = $request->subscribe_to_newsletter;
        $news->contacts = $request->contacts;
        $news->address = $request->address;
        $news->phone = $request->phone;
        $news->email = $request->email;
        $news->our_youtube_video = $request->our_youtube_video;
        $news->recent_post = $request->recent_post;
        $news->ads_title = $request->ads_title;
        $news->visiting_our_offices = $request->visiting_our_offices;
        $news->follow_us_on_facebook = $request->follow_us_on_facebook;
        $news->send_message = $request->send_message;
        $news->your_name = $request->your_name;
        $news->your_email_address = $request->your_email_address;
        $news->your_phone = $request->your_phone;
        $news->your_message = $request->your_message;

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

            "our_facebook_page" => 'required',
            "view_full_team_list" => 'required',
            "view_full_list" => 'required',
            "related_project" => 'required',
            "call_us" => 'required',
            "email_us" => 'required',
            "find_us_on" => 'required',
            "read_more" => 'required',
            "subscribe_to_newsletter" => 'required',
            "contacts" => 'required',
            "address" => 'required',
            "phone" => 'required',
            "email" => 'required',
            "our_youtube_video" => 'required',
            "recent_post" => 'required',
            "ads_title" => 'required',
            "visiting_our_offices" => 'required',
            "follow_us_on_facebook" => 'required',
            "send_message" => 'required',
            "your_name" => 'required',
            "your_email_address" => 'required',
            "your_phone" => 'required',
            "your_message" => 'required',
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

        $news->our_facebook_page = $request->our_facebook_page;
        $news->view_full_team_list = $request->view_full_team_list;
        $news->view_full_list = $request->view_full_list;
        $news->related_project = $request->related_project;
        $news->call_us = $request->call_us;
        $news->email_us = $request->email_us;
        $news->find_us_on = $request->find_us_on;
        $news->read_more = $request->read_more;
        $news->subscribe_to_newsletter = $request->subscribe_to_newsletter;
        $news->contacts = $request->contacts;
        $news->address = $request->address;
        $news->phone = $request->phone;
        $news->email = $request->email;
        $news->our_youtube_video = $request->our_youtube_video;
        $news->recent_post = $request->recent_post;
        $news->ads_title = $request->ads_title;
        $news->visiting_our_offices = $request->visiting_our_offices;
        $news->follow_us_on_facebook = $request->follow_us_on_facebook;
        $news->send_message = $request->send_message;
        $news->your_name = $request->your_name;
        $news->your_email_address = $request->your_email_address;
        $news->your_phone = $request->your_phone;
        $news->your_message = $request->your_message;

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
