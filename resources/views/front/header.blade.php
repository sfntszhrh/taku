<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('front.home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Soengennep</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('front.home') }}">Home</a></li>

                <li class="dropdown"><a href="category.html"><span>Categories</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>

                        <li><a href="#">Wisata Alam</a></li>
                        <li><a href="#">Wisata Religi</a></li>
                        <li><a href="#">Wisata Sejarah</a></li>
                        <li><a href="#">Wisata Minat Khusus</a></li>
                        <li><a href="#">Kuliner</a></li>
                        <li><a href="#">Hotel</a></li>
                        <li><a href="#">Tempat Belanja</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('tempat.wisata') }}">Place</a></li>
                <li><a href="{{ route('peta.wisata') }}">Maps</a></li>
               
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">
            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header>
