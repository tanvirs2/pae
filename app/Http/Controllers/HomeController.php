<?php

namespace App\Http\Controllers;

use App\About;
use App\Home;
use App\News;
use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.home.index');
    }


    public function newsList()
    {
        $newses = News::all();
        $compact = compact(
            'newses'
        );
        return view('website.news.index', $compact);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function showSingleNews(News $news)
    {
        $compact = compact(
            'news'
        );

        return view('website.news.single', $compact);
    }

    public function projectList()
    {
        $newses = Project::all();
        $compact = compact(
            'newses'
        );
        return view('website.project.index', $compact);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function showSingleProject(Project $project)
    {
        $news = $project;
        $compact = compact(
            'news'
        );

        return view('website.project.single', $compact);
    }

    public function contactPage()
    {
        return view('website.contact.index');
    }

    public function aboutPage()
    {
        $about = About::first();
        $compact = compact(
            'about'
        );

        return view('website.about.index', $compact);
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
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
