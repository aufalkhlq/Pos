<div class="top-bar">
    <!-- BEGIN: Search -->
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{ route("dashboard.index") }}" class="">Admin</a> 
        <i data-feather="chevron-right" class="breadcrumb__icon"></i> 
        <a href="{{ route("dashboard.post.index") }}" class="breadcrumb--active">Point Of Sale</a>
    </div>
    <div class="intro-x relative mr-3 sm:mr-6">
        <div class="search hidden sm:block">
            <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
            <i data-feather="search" class="search__icon"></i> 
        </div>
        <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i> </a>
        <div class="search-result">
        </div>
    </div>
    <!-- END: Search -->
    <!-- BEGIN: Notifications -->
    <div class="intro-x dropdown relative mr-auto sm:mr-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
        <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
            <div class="notification-content__box dropdown-box__content box">
                <div class="notification-content__title">Notifications</div>
                <div class="cursor-pointer relative flex items-center ">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset("assets/dist/images/profile-13.jpg") }}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a> 
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset("assets/dist/images/profile-2.jpg") }}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset("assets/dist/images/profile-14.jpg") }}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a> 
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset("assets/dist/images/profile-6.jpg") }}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a> 
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset("assets/dist/images/profile-5.jpg") }}">
                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a> 
                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                        </div>
                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8 relative">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
            <img alt="Midone Tailwind HTML Admin Template" src="{{ asset("assets/dist/images/profile-12.jpg") }}">
        </div>
        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
            <div class="dropdown-box__content box bg-theme-38 text-white">
                <div class="p-4 border-b border-theme-40">
                    <div class="font-medium">{{ Auth::user()->name }}</div>
                    <div class="text-xs text-theme-41">Software Engineer</div>
                </div>
                <div class="p-2">
                    <a href="{{ route('dashboard.profile.index')}}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                </div>
                <div class="p-2 border-t border-theme-40">
                    <form method="POST" action="{{ route("dashboard.logout") }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                        @csrf
                        <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>
                        <button class="bg-transparent">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>