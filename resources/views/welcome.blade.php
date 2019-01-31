@include('layouts.master')

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><h1>PALAPA</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#bookModal">Book</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/01.jpg')}}" width="100%" height="50%" background="#777" color="#777" text=" " title=" ">

            </div>
            <div class="carousel-item">
                <img src="{{asset('images/02.jpg')}}" width="100%" height="50%" background="#777" color="#777" text=" " title=" ">

            </div>
            <div class="carousel-item">
                <img src="{{asset('images/03.jpg')}}" width="100%" height="50%" background="#777" color="#777" text=" " title=" ">

            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{--Logo--}}

    <div class="container">
        <img src="{{asset('images/palapalogo.png')}}" width="30%" height="30%" class="mx-auto d-block">
    </div>

    <hr class="featurette-divider">

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        @if($errors->has())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
        <div data-spy="scroll" data-offset="0">
            <a name="products"><h3 class="featurette-heading">Products</h3></a>
            <h1 class="invisible">asdf</h1>
        </div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                {{--<img src="{{asset('images/05.jpg')}}" width="140" height="140" background="#777" color="#777" class="rounded-circle">--}}
                {{--{% include icons/placeholder.svg width="140" height="140" background="#777" color="#777" class="rounded-circle" %}--}}
                <h2>Traditional Massage</h2>
                <p>A deep relaxing massage with essential oils, using Indonesian traditional strokes to promote ease muscle tension and give other health benefit.</p>
                <p>Rp 319.000</p>
                <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#bookModal">
                        Book Now</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                {{--{% include icons/placeholder.svg width="140" height="140" background="#777" color="#777" class="rounded-circle" %}--}}
                <h2>Balinesse Massage</h2>
                <p>Balinese massage is a full-body, deep-tissue, holistic treatment. using a combination of gentle stretches, acupressure, reflexology, and aromatherapy to stimulate the flow of blood, oxygen and energy around your body, and bring a sense of well being, calm and deep relaxation.</p>
                <p>Rp 369.000</p>
                <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#bookModal">
                        Book Now</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                {{--{% include icons/placeholder.svg width="140" height="140" background="#777" color="#777" class="rounded-circle" %}--}}
                <h2>Shiatsu Massage</h2>
                <p>Shiatsu massage is a traditional Japanese finger pressure massage using slow, deep penetration of key points along the acupuncture meridians. The dispersing of excess or blocked energy can promote circulation to deficient or under-active areas of the body. Stimulate the immune system and restore balance.</p>
                <p>Rp 369.000</p>
                <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#bookModal">
                        Book Now</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-lg-4">
                {{--{% include icons/placeholder.svg width="140" height="140" background="#777" color="#777" class="rounded-circle" %}--}}
                <h2>Reflexology</h2>
                <p>Reflexology is based on the belief that each body part is represented on the feet and that pressing on specific areas of the foot can have therapeutic effects on other parts of the body. Reflexology aids the release of toxins from the major organs in the body, increases circulation and improves ones overall health.</p>
                <p>Rp 249.000</p>
                <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#bookModal">
                        Book Now</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                {{--{% include icons/placeholder.svg width="140" height="140" background="#777" color="#777" class="rounded-circle" %}--}}
                <h2>Body Mask</h2>
                <p>A body mask, like a face mask, is a paste made from minerals, fruits or plants designed to improve the skin's healthy glow and texture.</p>
                <p>Rp 289.000</p>
                <p><a class="btn btn-secondary" href="#" role="button"  data-toggle="modal" data-target="#bookModal">
                        Book Now</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                {{--{% include icons/placeholder.svg width="140" height="140" background="#777" color="#777" class="rounded-circle" %}--}}
                <h2>Scrub</h2>
                <p>The body scrub is the one to choose if you want a good all-over exfoliation. It involves being rubbed all over with a gritty lotion designed to get rid of dead skin cells that could otherwise clog up pores and cause spots and excess grease.</p>
                <p>Rp 189.000</p>
                <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#bookModal">
                        Book Now</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                {{--{% include icons/placeholder.svg width="140" height="140" background="#777" color="#777" class="rounded-circle" %}--}}
                <h2>Hydrotherapy</h2>
                <p>Hydrotherapy is the use of water in the treatment of different conditions, including arthritis and related rheumatic complaints. combined with japanese tradition of bathing (furo), bathing in warm water could release muscle tension and relieve the stress from daily routine.</p>
                <p>Rp 399.000</p>
                <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#bookModal">
                        Book Now</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                {{--{% include icons/placeholder.svg width="140" height="140" background="#777" color="#777" class="rounded-circle" %}--}}
                <h2>Package 1</h2>
                <p>Combination of massage with body scrub, body mask, and hydrotherapy.</p>
                <p>Rp 1.099.000</p>
                <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#bookModal">
                        Book Now</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                {{--{% include icons/placeholder.svg width="140" height="140" background="#777" color="#777" class="rounded-circle" %}--}}
                <h2>Package 2</h2>
                <p>Combination of massage with hydrotherapy</p>
                <p>Rp 669.000</p>
                <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#bookModal">
                        Book Now</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START MODAL -->

        <div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form class="form-group" role="form" method="POST" action="{{ url('/submitBooking') }}">
                        {{csrf_field()}}
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Book A Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="e.g. John Doe">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="e.g. john@email.com">
                            </div>
                            <div class="form-group">
                                <label for="product">Select a Product</label>
                                <select class="form-control" id="product" name="product">
                                    <option value="Traditional Massage">Traditional Massage</option>
                                    <option value="Balinesse Massage">Balinesse Massage</option>
                                    <option value="Shiatsu Massage">Shiatsu Massage</option>
                                    <option value="Reflexology">Reflexology</option>
                                    <option value="Body Mask">Body Mask</option>
                                    <option value="Scrub">Scrub</option>
                                    <option value="Hydrotherapy">Hydrotherapy</option>
                                    <option value="Package 1">Package 1</option>
                                    <option value="Package 2">Package 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pax">No. Person</label>
                                <input type="number" min="1" class="form-control" name="pax" id="pax" placeholder="1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit Booking</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- START THE FEATURETTES -->

        {{--<hr class="featurette-divider">--}}

        {{--<div class="row featurette">--}}
            {{--<div class="col-md-7">--}}
                {{--<h2 class="featurette-heading">Package 1<span class="text-muted"></span></h2>--}}
                {{--<p class="lead">Combination of massage with body scrub, body mask, and hydrotherapy</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-5">--}}
                {{--{% include icons/placeholder.svg width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto" %}--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<hr class="featurette-divider">--}}

        {{--<div class="row featurette">--}}
            {{--<div class="col-md-7 order-md-2">--}}
                {{--<h2 class="featurette-heading">Package 2<span class="text-muted"></span></h2>--}}
                {{--<p class="lead">Combination of massage with hydrotherapy</p>--}}
            {{--</div>--}}
            {{--<div class="col-md-5 order-md-1">--}}
                {{--{% include icons/placeholder.svg width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto" %}--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<hr class="featurette-divider">--}}

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

    <hr class="featurette-divider">

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2018 PALAPA Bath House & Spa &middot;</p>
    </footer>
</main>
