@extends('website.layout.master')

@section('website-content')
    <header class="py-5 bg-image-full bg-image-contact">
        <div class="layer">
            <h2 style="font-size: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
        </div>
    </header>
    <div class="container blog top-30 bottom-30" >
        <div class="row">
            <div class="col-md-8">

                @foreach($newses as $news)

                <div class="col-md-6">
                    <a class="" href="/bangladesh/article/1599160/%E0%A6%AE%E0%A6%BF%E0%A6%A1%E0%A6%BF%E0%A7%9F%E0%A6%BE%E0%A6%B0-%E0%A6%AE%E0%A6%BE%E0%A6%B2%E0%A6%BF%E0%A6%95%E0%A7%87%E0%A6%B0%E0%A6%BE-%E0%A6%95%E0%A6%A4-%E0%A6%9F%E0%A6%BE%E0%A6%95%E0%A6%BE-%E0%A6%8B%E0%A6%A3-%E0%A6%B6%E0%A7%8B%E0%A6%A7-%E0%A6%A6%E0%A7%87%E0%A6%A8%E0%A6%A8%E0%A6%BF-%E0%A6%9C%E0%A6%BE%E0%A6%A8%E0%A6%A4%E0%A7%87-%E0%A6%9A%E0%A6%BE%E0%A6%A8"></a>

                    <!--image-->
                    <div class="">
                        <img src="//paloimages.prothom-alo.com/contents/cache/images/320x179x1/uploads/media/2019/06/14/466fdaf78e3e93544f10208617c7249a-5d0391e8550c8.jpg?jadewits_media_id=1447373"
                             style="display: block;">
                    </div>

                    <div class="">
                        <h3 class="">
                            <span class="title">মিডিয়ার মালিকেরা কত টাকা ঋণ শোধ দেননি জানতে চান প্রধানমন্ত্রী</span>
                        </h3>

                        <div class="">
                            প্রধানমন্ত্রী শেখ হাসিনা বলেছেন, পত্রিকা, ইলেকট্রনিক...
                        </div>

                        <div class="">
                            <a class="" href="#">বাংলাদেশ</a>
                        </div>
                    </div>

                </div>

                @endforeach

            </div>
            <div class="col-md-4">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Enter a keyword">
                    <span class="input-group-btn">
              <button class="btn-search" type="button">
              <i class="fa fa-search" aria-hidden="true"></i>
             </button>
             </span>
                </div>
                <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                <div id="calendar"></div>
                <h3>Ads Title</h3>
                <img src="{{ asset('') }}assets/images/Rectangle-64.png" class="img-responsive">
                <h3>Follow us on Facebook</h3>
                <img src="{{ asset('') }}assets/images/facebook-page.JPG" class="img-responsive">
                <h3>Recent post</h3>
                <div style="background-image: url({{ asset('') }}assets/images/Recent-post.png)" class="recent-post">
                    <h3>Visiting Our offices</h3>
                </div>
                <h3>Our youtube video</h3>
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/THymiwMZjDI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection