<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResposive" aria-expanded="false" aria-label="Toggle navigation">
            <!--<span class="navbar-toggler-icon"></span>-->
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <form class="form-inline my-2 my-sm-0" action="/search" method="post" role="search" autocomplete="off">
                @csrf
                <input class="form-control mr-sm-2" name="query" type="text" placeholder="Enter Student Number" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>

            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>