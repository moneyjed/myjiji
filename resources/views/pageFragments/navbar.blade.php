<div class="row bg-secondary py-1 px-xl-5">
    <div class="col-lg-6 d-none d-lg-block">
        <div class="d-inline-flex align-items-center h-100">
            <a class="text-dark mr-3" href="">About</a>
            <a class="text-dark mr-3" href="">Contact</a>
            <a class="text-dark mr-3" href="">Help</a>
            <a class="text-dark mr-3" href="">FAQs</a>
        </div>
    </div>
    <div class="col-lg-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
            <div class="btn-group">
                @guest
                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="/login" class="dropdown-item" >Login</a>
                    <a href="/register" class="dropdown-item" >Register</a>
                </div>
                @endguest
                @auth
                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Welcome, {{ auth()->user()->fname }}</button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="/logout" class="dropdown-item" >Logout</a>
                </div>
                @endauth
            </div>
            <div class="btn-group mx-2">
                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button">EUR</button>
                    <button class="dropdown-item" type="button">GBP</button>
                    <button class="dropdown-item" type="button">CAD</button>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button">FR</button>
                    <button class="dropdown-item" type="button">AR</button>
                    <button class="dropdown-item" type="button">RU</button>
                </div>
            </div>
        </div>
        <div class="d-inline-flex align-items-center d-block d-lg-none">
            <a href="" class="btn px-0 ml-2">
                <i class="fas fa-heart text-dark"></i>
                <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
            </a>
            <a href="" class="btn px-0 ml-2">
                <i class="fas fa-shopping-cart text-dark"></i>
                <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
            </a>
        </div>
    </div>
</div>