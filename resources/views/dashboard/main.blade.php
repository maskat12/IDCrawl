@extends('dashboard')

@section('dashboardcontent')
<!-- NAVBAR SEARCH -->
<div class="navbar navbar-expand-xl navbar-dark border-top-0">
    <div class="text-center d-xl-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-demo4-mobile">
            <i class="fa fa-search mr-2"></i>
            Filter
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-demo4-mobile">
        <span class="navbar-text">
            <i class="fa fa-search mr-2"></i>
            Filter 
        </span>

        <form class="" action="">
            <div class="input-group ml-2 mb-3 mt-3">
                <div class="input-group-prepend">
                    <select class="custom-select" id="filter">
                        <option value="domain">Domain</option>
                        <option value="regex">Regex</option>
                        <option value="ip">IP</option>
                    </select>
                </div>
                <input class="form-control" placeholder="Search" type="text" name="search" id="search">
            </div>
        </form>
    </div>
</div>
<!-- /NAVBAR SEARCH -->
<!-- NAVBAR CONTENT HEAD -->
<div class="navbar navbar-expand-md navbar-light border-top-0">
    <div class="d-md-none w-100">
        <button type="button" class="navbar-toggler d-flex align-items-center w-100" data-toggle="collapse" data-target="#navbar-navigation">
            <i class="icon-menu-open mr-2"></i>
            Content
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-navigation">
        <ul class="nav navbar-nav-highlight">
            <li class="nav-item">
                <a href="#result" class="navbar-nav-link active" data-toggle="tab">
                    <i class="icon-calculator mr-2"></i>
                    Result
                </a>
            </li>

            <li class="nav-item">
                <a href="#statistic" class="navbar-nav-link " data-toggle="tab" aria-expanded="false">
                    <i class="icon-bars-alt mr-2"></i>
                    Statistic
                </a>
            </li>

            <li class="nav-item">
                <a href="#report" class="navbar-nav-link " data-toggle="tab">
                    <i class="icon-calendar5 mr-2"></i>
                    Report
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- /NAVBAR CONTENT HEAD -->
<!-- NAVBAR CONTENT BODY-->
<div class="tab-content card-body">
    <div class="tab-pane fade active show" id="result">
        <div class="page-content">
            <div class="content-wrapper dashboard">
                @include('dashboard.tables')
                @include('dashboard.tables')
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="statistic">
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

    <div class="tab-pane fade" id="report">
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

@endsection