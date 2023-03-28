<!DOCTYPE html>
<html lang="en">

    @include('pageFragments.headFragment')

    <body>
        <!-- Topbar Start -->
        <div class="container-fluid">
            @include('pageFragments.navbar')
            @include('pageFragments.searchbar')
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        @include('pageFragments.menusContainer')
        <!-- Navbar End -->

        <!-- Carousel Start -->
        @include('pageFragments.slideshowContainer')
        <!-- Carousel End -->

        <!-- Featured Start -->
        <!-- Featured End -->

        <!-- Categories Start -->
        <!-- Categories End -->


        <!-- Products Start -->
        @include('pageFragments.featuredContainer')
        <!-- Products End -->

        @auth
        @include('pageFragments.chatContainer')
        @endauth

        <!-- Offer Start -->
        <!-- Offer End -->


        <!-- Products Start -->
        <!-- Products End -->


        <!-- Vendor Start -->
        <!-- Vendor End -->


        <!-- Footer Start -->
        @include('pageFragments.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        @include('pageFragments.scriptsFragment')
    </body>

</html>