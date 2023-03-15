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


        <!-- Products Start -->
        @include('pageFragments.regFormContainer')
        <!-- Products End -->


        <!-- Footer Start -->
        @include('pageFragments.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
        <!-- JavaScript Libraries -->
        @include('pageFragments.scriptsFragment')
    </body>

</html>