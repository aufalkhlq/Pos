<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset("assets/dist/images/logo.svg") }}">
        <span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route("dashboard.index") }}" class="side-menu side-menu--{{ Route::is("dashboard.index") ? "active" : ""}}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                <div class="side-menu__title"> Pages <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li> --}}
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                        <div class="side-menu__title"> Barang <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('dashboard.datatable.index') }}" class="side-menu side-menu--{{ Route::is("dashboard.datatable.index") ? "active" : ""}}">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">Datatable</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.edit-barang.index') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-wizard-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-wizard-layout-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
      
        <li>
            <a href="{{ route('dashboard.post.index') }}" class="side-menu side-menu--{{ Route::is("dashboard.post.index") ? "active" : ""}}">
                <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                <div class="side-menu__title"> Point of Sale</div>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.supplier.index') }}" class="side-menu side-menu--{{ Route::is("dashboard.supplier.index") ? "active" : ""}}">
                <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                <div class="side-menu__title"> Supplier</div>
            </a>
        </li>
        
    </ul>
</nav>