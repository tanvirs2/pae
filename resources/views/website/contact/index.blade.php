@extends('website.layouts.master')

@section('website-content')
<header class="py-5 bg-image-full bg-image-contact">
    <div class="layer">
        <h2>Contact Us</h2>
    </div>
</header>
@include('website.layouts.notice')
<div class="container top-30 bottom-30">
    <div class="row">
        <div class="col-md-12">
            <h1 class="contact-us-title">Always happy to hear from you, feel free  to contact us any time for any quiries</h1>
            <div class="col-md-7 top-30">
                <div class="contact__address__inner">
                    <!-- Start Single Adress -->
                    <div class="single__contact__address">
                        <div class="contact__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__details">
                            <p><span>Address</span> : <br> Douala - Cameroun , Akwa - Emilie Saker.
                                <br>P.O. Box: 1234
                            </p>
                        </div>
                    </div>
                    <!-- End Single Adress -->
                </div>
                <div class="contact__address__inner">
                    <div class="single__contact__address">
                        <div class="contact__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__details">
                            <p><span>Phone</span> : +237 123 456 789
                                <br>+237 123 456 789
                            </p>
                        </div>
                    </div>
                </div>
                <div class="contact__address__inner">
                    <div class="single__contact__address">
                        <div class="contact__icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="contact__details">
                            <p><span>Email</span> : infos@pae-essamba.net
                                <br>infos@pae-essamba.net
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 top-30">
                <form class="form-horizontal" action="{{ route('contact-store') }}" method="post" id="contact_form">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  name="name" placeholder="Your Name" class="form-control"  type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="Your E-Mail Address" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="phone" placeholder="Your phone" class="form-control" type="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="massage" placeholder="Your message" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg pull-right"><span class="glyphicon glyphicon-send"></span>&nbsp;Send message</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection