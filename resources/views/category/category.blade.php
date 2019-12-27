<?php
/**
 * Created by PhpStorm.
 * User: Doaa
 * Date: 24/12/19
 * Time: 07:40 م
 */
?>
@include('include.header')
@section('page', 'Category')
@section('blank', 'List')
<!-- PAGE HEADER -->
<div class="page-header">
    <div class="page-header-bg" style="background-image: " data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h1 class="text-uppercase"></h1>
                <p class="lead">{{$name}}</p>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE HEADER -->
</header>
<!-- /HEADER -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="section-row">

                </div>


            </div>

            <div class="col-md-8">
                <div class="section-row">
                    <div class="section-title">

                    </div>

                    <br>

                </div>
                <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">All Tags </h3>
                    </div>

                    <br>
                    @foreach($tags as $tag)
                        <a href="#" class="badge badge-primary badge-pill" >
                            {{$tag->tag}}
                        </a>
                    @endforeach
                </div>

                @include('include.disqus')
            </div>

            <div class="col-md-4">
                <!-- social widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Social Media</h2>
                    </div>
                    <div class="social-widget">
                        <ul>
                            <li>
                                <a href="#" class="social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <span>21.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <span>10.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    <span>5K<br>Followers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /social widget -->

                <!-- newsletter widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Newsletter</h2>
                    </div>
                    <div class="newsletter-widget">
                        <form>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                            <input class="input" name="newsletter" placeholder="Enter Your Email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- /newsletter widget -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- FOOTER -->
@include('include.footer')
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>

