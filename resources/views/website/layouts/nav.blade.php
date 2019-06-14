
<nav class="navbar navbar-default navigation-clean" id="navbar">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="navbar-header"><a class="navbar-brand" href="#"><img src="{{ asset('') }}assets/images/logo.png"></a><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                </div>
                <div class="col-md-7" style="margin-right: 0px;">
                    <div class="collapse navbar-collapse" id="navcol-1" >
                        <div class="row">
                            <div class="col-md-12" style="padding-right: 0px;">
                                <p class="header-email"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<a href="#">infos@pae-essambanet</a>
                                    <span style="padding-left: 10px;"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;<a href="#">+237 123 456 789</a></span>
                                    <span style="float: right" class="nav-social">
                                        <span class="follow-us-nav text-right">Follow Us:</span>
                                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    </span>
                            </div>
                            <div class="col-md-12">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="{{ Request::is('/')?'active':null }}" role="presentation"><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">About Us <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation"><a href="about.html">About Us</a></li>
                                            <li role="presentation"><a href="blog.html">Blog</a></li>
                                            <li role="presentation"><a href="#">Third Item</a></li>
                                        </ul>
                                    </li>
                                    <li role="presentation"><a href="#">Reports</a></li>
                                    <li class="{{ Route::is('home-news-list') ? 'active':null }}" role="presentation"><a href="{{ route('home-news-list') }}">News</a></li>
                                    <li role="presentation"><a href="luv.html">Luv</a></li>
                                    <li role="presentation"><a href="contacts.html">Contacts</a></li>
                                    <li class="dropdown">
                                        <div class="flag-dropdown">
                                            <a href="index" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{ asset('') }}assets/images/US-Eng-logo.png" alt="English" class="img-thumbnail icon-small">&nbsp;|&nbsp;<span>En</span> <span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a id="navBan" href="index?lang=bn" class="language"> <img src="{{ asset('') }}assets/images/US-Eng-logo.png" alt="Bengali" class="img-thumbnail icon-small"><span>&nbsp;|&nbsp;En</span></a></li>
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