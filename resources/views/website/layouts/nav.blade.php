
<nav class="navbar navbar-default navigation-clean" id="navbar">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="navbar-header"><a class="navbar-brand" href="#"><img src="{{ asset('') }}assets/images/logo.png"></a><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                </div>
                <div class="col-md-8" style="margin-right: 0px;">
                    <div class="collapse navbar-collapse" id="navcol-1" >
                        <div class="row">
                            <div class="col-md-12" style="padding-right: 0px;">
                                <p class="header-email"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<a href="#">{{ $others->email ?? null }}</a>
                                    <span style="padding-left: 10px;"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;<a href="#">+{{ $others->phone ?? null }}</a></span>
                                    <span style="float: right" class="nav-social">
                                        <span class="follow-us-nav text-right">Follow Us:</span>
                                    <a href="{{ $others->fb_link ?? null }}"><i class="fa fa-facebook-square"></i></a>
                                    <a href="{{ $others->tweet_link ?? null }}"><i class="fa fa-twitter-square"></i></a>
                                    <a href="{{ $others->link_in ?? null }}"><i class="fa fa-linkedin-square"></i></a>
                                    <a href="{{ $others->you_link ?? null }}"><i class="fa fa-youtube"></i></a>
                                    <a href="{{ $others->skype ?? null }}"><i class="fa fa-skype"></i></a>
                                    <a href="{{ $others->insta_link ?? null }}"><i class="fa fa-instagram"></i></a>
                                    </span>
                            </div>
                            <div class="col-md-12">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="{{ Request::is('/')?'active':null }}" role="presentation"><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;{{ $lang->home }}</a></li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">{{ $lang->about }} <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="{{ Route::is('home-about') ? 'active':null }}" role="presentation"><a href="{{ route('home-about') }}">{{ $lang->about }}</a></li>
                                            <li class="{{ Route::is('home-blog-list') ? 'active':null }}" role="presentation"><a href="{{ route('home-blog-list') }}">{{ $lang->blog }}</a></li>
                                            <li role="presentation"><a href="#">Third Item</a></li>
                                        </ul>
                                    </li>
                                    <li role="presentation"><a href="#">{{ $lang->reports }}</a></li>
                                    <li class="{{ Route::is('home-news-list') ? 'active':null }}" role="presentation"><a href="{{ route('home-news-list') }}">{{ $lang->news }}</a></li>
                                    <li class="{{ Route::is('home-event-list') ? 'active':null }}" role="presentation"><a href="{{ route('home-event-list') }}">Luv</a></li>
                                    <li class="{{ Route::is('home-contact')?'active':null }}" role="presentation"><a href="{{ route('home-contact') }}">{{ $lang->contact }}</a></li>
                                    <li class="dropdown">
                                        <div class="flag-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{--<img src="{{ asset('') }}assets/images/{{ (app()->getLocale() == 'en') ? 'US-Eng-logo' : 'bn' }}.png" alt="English" class="img-thumbnail icon-small">&nbsp;|&nbsp;--}}<span>{{ $lang->language_name }}</span> <span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                @foreach($languages as $language)
                                                    <li><a id="navBan" href="{{ route('lang', $language->id) }}" class="language"> {{--<img src="{{ asset('') }}assets/images/US-Eng-logo.png" alt="Bengali" class="img-thumbnail icon-small">--}}<span>&nbsp;&nbsp;{{ $language->language_name }}</span></a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>