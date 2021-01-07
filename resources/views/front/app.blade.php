<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Default | Triangle</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head><!--/head-->

<body>

@yield('content')

{{-- Start Footer--}}
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="images/home/under.png" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="testimonial bottom">
                    <h2>Note</h2>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="images/home/profile1.png" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote> The footer settings are frontend features only</blockquote>
                            <h3><a href="#">- Do3a2 Al3abbar</a></h3>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="images/home/profile2.png" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote> The footer settings are frontend features only</blockquote>
                            <h3><a href="">- Do3a2 Al3abbar</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="contact-info bottom">
                    <h2>Contacts</h2>
                    <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
                        Phone: +1 (123) 456 7890 <br>
                        Fax: +1 (123) 456 7891 <br>
                    </address>

                    <h2>Address</h2>
                    <address>
                        Unit C2, St.Vincent's Trading Est., <br>
                        Feeder Road, <br>
                        Bristol, BS2 0UY <br>
                        United Kingdom <br>
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">

                <div class="contact-form bottom">
                    @if(count($errors) > 0 )
                        <ul class="navbar-nav mr-auto">
                            @foreach($errors->all() as $error)
                                <li class="nav-item dropdown">

                                    <p style="color: red">{{$error}}</p>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    @if($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">*
                            </button>
                            <strong >{{ $message }}</strong>
                        </div>
                     @endif
                    <h2>Send a message</h2>
                    <form  name="contact-form" method="post" action="{{ url('send_email/send') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control"  placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control"  placeholder="Email ">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your text here"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; Your Company 2014. All Rights Reserved.</p>
                    <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a> & Development by <i class="fa fa-heart-o" aria-hidden="true"></i><a href="#"> Do3a2 Al3abbar</a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- End Footer--}}
<!--/#footer-->


<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/lightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/main.js') }}"></script>
</body>
</html>

