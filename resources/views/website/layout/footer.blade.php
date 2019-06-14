<footer class="footerBg pgWrap clearfix">
    <div class="container clearfix footer-padding-top">
        <div class="row clearfix">
            <div class="col-md-3 col-sm-3">
                <div id="news" class="clearfix" >
                    <img class="img-responsive" src="{{ asset('') }}assets/images/footer-logo.png" alt="Pae Essamba">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum diam ut lectus pulvinar dignissim. Mauris eu nibh eu dolor cursus fringilla. Ut at sem sit amet nisi blandit iaculis nec in mauris.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div id="newlsetterForm" class="clearfix">
                    <h3>Contacts</h3>
                    <p><i class="fa fa-home">&nbsp;</i> <span>Addresse:</span>70 Rue Alfred Saker, Douala, Cameroun</p>
                    <p><i class="fa fa-phone-square">&nbsp;</i> <span>Phone</span> +237 123 456 789</p>
                    <p><i class="fa fa-envelope-o">&nbsp;</i> <span>Email:</span>infos@pae-essamba.net</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div id="tweets" class="clearfix" >
                    <h3>Subscribe to Newsletter</h3>
                    <form id="frmNewletter" name="frmNewletter" action="#" method="post">
                        <div class="input-group subscriber-form">
                            <input type="text" class="form-control" placeholder="Enter email" required>
                            <span class="input-group-btn">
              <button class="btn-search" type="submit" style="color: #055a05;background-color: white;">
              Submit
             </button>
             </span>
                        </div>
                    </form>
                    <h4 class="top-30">Our partners</h4>
                    <img class="img-responsive" src="{{ asset('') }}assets/images/partners/briluce_logo_A0_Rectangle_70_pattern.png">
                    <img class="img-responsive" src="{{ asset('') }}assets/images/partners/bdtask_1508059680_280_A0_Rectangle_72_pattern.png">
                </div>
            </div>
            <div class="col-md-3">
                <div id="flckrStream" class="clearfix" >
                    <h3>Our Facebook Page</h3>
                    <iframe allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media"  style="border: medium none; visibility: visible; width: 262px; height: 175px;" src="https://www.facebook.com/v2.3/plugins/page.php?app_id=249643311490&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fd_vbiawPdxB.js%3Fversion%3D44%23cb%3Df2e3e9f3033a702%26domain%3Dwww.pae-essamba.org%26origin%3Dhttp%253A%252F%252Fwww.pae-essamba.org%252Ff1665df78d5b04a%26relation%3Dparent.parent&amp;container_width=390&amp;height=175&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpaeessamba&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;width=auto" __idm_frm__="100931731479" class="" width="262px" height="175px" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <section class="copyRtAckSocialBg pgWrap clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-10">
                    <div id="copyRtAck" class="clearfix">
                        <p>© 2019 <a href="#" target="_blank">Pae Essamba</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 text-right">
                    <div id="social" class="clearfix">
                        <p>
                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            <a href="#"><i class="fa fa-skype fa-2x"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="{{ asset('') }}assets/js/jquery.min.js"></script>
<script src="{{ asset('') }}assets/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('') }}assets/js/swiper.min.js"></script>
<script src="{{ asset('') }}assets/js/Simple-Slider1.js"></script>
<script src="{{ asset('') }}assets/js/jquery-3.3.1.slim.js"></script>
<script src="{{ asset('') }}assets/js/mini-event-calendar.js"></script>
<script src="{{ asset('') }}assets/js/main.js"></script>
<script type="text/javascript">
    var sampleEvents = [
        {
            title: "Soulful sundays bay area",
            date: new Date().setDate(new Date().getDate() - 7), // last week
            link: "#"
        },
        {
            title: "London Comicon",
            date: new Date().getTime(), // today
            link: "#"
        },
        {
            title: "Youth Athletic Camp",
            date: new Date().setDate(new Date().getDate() + 31), // next month
            link: "#"
        }
    ];
    $("#calendar").MEC({
        events: sampleEvents
    });
    $("#calendar").MEC({
        events: sampleEvents,
        from_sunday: true
    });

</script>
</body>
</html>