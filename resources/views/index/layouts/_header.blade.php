<!-- Start Top Bar style2 -->
<section class="top-bar-style2">
    <div class="top-style2 clearfix">
        <div class="top-style2-left">
            <p><span class="icon-music"></span>We have Answers</p>
            <ul>
                <li>+324 123 45 978</li>
                <li>support@intexure.com</li>
                <li>Mon - Sat: 9am to 6pm</li>
            </ul>
        </div>
        <div class="top-style2-right">
            <ul class="top-right-menu">
                <li><a href="#">Partners</a></li>
                <li><a href="#">Media</a></li>
                <li><a href="#">360O View</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <ul class="topbar-social-links">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Top Bar style2 -->

<!--Start Main Header-->
<header class="main-header header-style2 stricky">
    <div class="inner-container clearfix">
        <div class="logo-box-style2 float-left">
            <a href="{{ route('index.home') }}">
                <img src="static/picture/logo.png" alt="Awesome Logo">
            </a>
        </div>
        <div class="main-menu-box float-right">
            <nav class="main-menu style2 clearfix">
                <div class="navbar-header clearfix">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class=""><a href="{{ route('index.home') }}">Home</a></li>
                        <li class=""><a href="{{ route('index.goods') }}">Goods</a></li>
                        <li class=""><a href="{{ route('index.about') }}">About Us</a></li>
                    </ul>
                </div>
            </nav>
            <div class="mainmenu-right style2">
                <div class="outer-search-box">
                    <div class="seach-toggle"><i class="fa fa-search"></i></div>
                    <ul class="search-box">
                        <li>
                            <form method="GET" action="{{ route('index.goods') }}">
                                <div class="form-group">
                                    <input type="search" name="goods_name" placeholder="Search Here" required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End Main Header-->
