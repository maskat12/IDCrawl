@extends('layouts.base')

@section('title', 'Home')

@section('content')

<!-- Content area -->
<div class="container-fluid">
    
    <div class="row top-content">
        <div class="col-md-12">

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h1 class="top-title text-center display-4">We index the web and structure the data</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                <h3 class="top-lead text-center">IDCrawler.id transforms the internet into a structured database to help you gain insights about companies.</h3>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search mr-2"></i></button>
                        </div>
                    </div>  
                </div>
            </div>
            
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center row-logo">
                <img src="{{asset('limitless/images/brands/adwords.png')}}" alt="google" class="img-thumbnail rounded ">
                <img src="{{asset('limitless/images/brands/amazon.png')}}" alt="amazon" class="img-thumbnail rounded ">
                <img src="{{asset('limitless/images/brands/bing.png')}}" alt="bing" class="img-thumbnail rounded ">
                <img src="{{asset('limitless/images/brands/dribbble.png')}}" alt="dribbble" class="img-thumbnail rounded ">
                <img src="{{asset('limitless/images/brands/facebook.png')}}" alt="facebook" class="img-thumbnail rounded ">
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header header-elements-inline">
                    <h2 class="card-title">Products</h2>
                    <!-- <div class="header-elements">
                        <span><i class="icon-history text-warning mr-2"></i> Jul 7, 10:30</span>
                        <span class="badge bg-success align-self-start ml-3">Online</span>
                    </div> -->
                </div>
                <!-- Tabs -->
                <ul class="nav nav-pills nav-pills-bordered nav-pills-toolbar  nav-justified">
                    <li class="nav-item">
                        <a href="#messages-tue" class="nav-link font-size-sm text-uppercase active show" data-toggle="tab">
                            Product 1
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#messages-mon" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
                            Product 2
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#messages-fri" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
                            Product 3
                        </a>
                    </li>
                </ul>
                <!-- /tabs -->


                <!-- Tabs content -->
                <div class="tab-content card-body">
                    <div class="tab-pane fade active show" id="messages-tue">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="../../../../global_assets/images/demo/users/face10.jpg" class="rounded-circle" width="36" height="36" alt="">
                                    <span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">8</span>
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">James Alexander</a>
                                        <span class="font-size-sm text-muted">14:58</span>
                                    </div>

                                    The constitutionally inventoried precariously...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="../../../../global_assets/images/demo/users/face3.jpg" class="rounded-circle" width="36" height="36" alt="">
                                    <span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">6</span>
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Margo Baker</a>
                                        <span class="font-size-sm text-muted">12:16</span>
                                    </div>

                                    Pinched a well more moral chose goodness...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face24.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Jeremy Victorino</a>
                                        <span class="font-size-sm text-muted">09:48</span>
                                    </div>

                                    Pert thickly mischievous clung frowned well...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face4.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Beatrix Diaz</a>
                                        <span class="font-size-sm text-muted">05:54</span>
                                    </div>

                                    Nightingale taped hello bucolic fussily cardinal...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face25.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">												
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Richard Vango</a>
                                        <span class="font-size-sm text-muted">01:43</span>
                                    </div>

                                    Amidst roadrunner distantly pompously where...
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="messages-mon">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face2.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Isak Temes</a>
                                        <span class="font-size-sm text-muted">Tue, 19:58</span>
                                    </div>

                                    Reasonable palpably rankly expressly grimy...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face7.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Vittorio Cosgrove</a>
                                        <span class="font-size-sm text-muted">Tue, 16:35</span>
                                    </div>

                                    Arguably therefore more unexplainable fumed...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face18.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Hilary Talaugon</a>
                                        <span class="font-size-sm text-muted">Tue, 12:16</span>
                                    </div>

                                    Nicely unlike porpoise a kookaburra past more...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face14.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Bobbie Seber</a>
                                        <span class="font-size-sm text-muted">Tue, 09:20</span>
                                    </div>

                                    Before visual vigilantly fortuitous tortoise...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face8.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Walther Laws</a>
                                        <span class="font-size-sm text-muted">Tue, 03:29</span>
                                    </div>

                                    Far affecting more leered unerringly dishonest...
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="messages-fri">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face15.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Owen Stretch</a>
                                        <span class="font-size-sm text-muted">Mon, 18:12</span>
                                    </div>

                                    Tardy rattlesnake seal raptly earthworm...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face12.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Jenilee Mcnair</a>
                                        <span class="font-size-sm text-muted">Mon, 14:03</span>
                                    </div>

                                    Since hello dear pushed amid darn trite...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face22.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Alaster Jain</a>
                                        <span class="font-size-sm text-muted">Mon, 13:59</span>
                                    </div>

                                    Dachshund cardinal dear next jeepers well...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face24.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Sigfrid Thisted</a>
                                        <span class="font-size-sm text-muted">Mon, 09:26</span>
                                    </div>

                                    Lighted wolf yikes less lemur crud grunted...
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/demo/users/face17.jpg" class="rounded-circle" width="36" height="36" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">Sherilyn Mckee</a>
                                        <span class="font-size-sm text-muted">Mon, 06:38</span>
                                    </div>

                                    Less unicorn a however careless husky...
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /tabs content -->

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <div class="row">
                <div class="col-md-12 text-center">
                    <strong class="section-topic">Have a look</strong>
                    <h2 class="section-title">Quickly build your own dataset</h2>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <div class="slick-1">
                        <div>
                            <div class="image">
                                <img src="{{asset('img/1.jpg')}}" alt="google" >
                            </div>
                        </div>
                        <div>
                            <div class="image">
                                <img src="{{asset('img/2.jpg')}}" alt="amazon" > 
                            </div>  
                        </div>
                        <!-- <div>
                            <div class="image">
                                <img src="{{asset('limitless/images/brands/bing.png')}}" alt="bing" >
                            </div>
                        </div>
                        <div>  
                            <div class="image">
                                <img src="{{asset('limitless/images/brands/dribbble.png')}}" alt="dribbble" >
                            </div>
                        </div>
                        <div>
                            <div class="image">
                                <img src="{{asset('limitless/images/brands/facebook.png')}}" alt="facebook" >
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <hr>

    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div id="mc_embed_signup">
                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                    <div class="row">
                        <div class="col">
                            <h3>Subscribe to our mailing list</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /content area -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.slick-1').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
        });
    });
</script>

@endsection