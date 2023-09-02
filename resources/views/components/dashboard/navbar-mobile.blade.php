<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset("assets/dist/images/logo.svg") }}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-24 py-5 hidden">
        <li>
            <a href="{{ route("dashboard.index") }}" class="menu menu--{{ Route::is("dashboard.index") ? "active" : "" }}">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Dashboard </div>
            </a>
        </li>
        {{-- <li>
            <a href="{{ route("dashboard.datatable.index") }}" class="menu menu--{{ Route::is("dashboard.datatable.index") ? "active" : "" }}">
                <div class="menu__icon"> <i data-feather="zap"></i> </div>
                <div class="menu__title">Datatable</div>
            </a>
        </li> --}}
    </ul>
</div>