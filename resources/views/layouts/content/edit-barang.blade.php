@extends('layouts.dashboard.app')
@section('content')

<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Search -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{ route("dashboard.index") }}" class="">Admin</a> 
            <i data-feather="chevron-right" class="breadcrumb__icon"></i> 
            <a href="{{ route("dashboard.index") }}" class="breadcrumb--active">Dashboard</a>
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

    <!-- END: Top Bar -->
    {{-- <div class="grid grid-cols-12 gap-6 mt-8">
        <div class="col-span-12 lg:col-span-3 xxl:col-span-2">
            <h2 class="intro-y text-lg font-medium mr-auto mt-2">
                File Manager
            </h2>
            <!-- BEGIN: File Manager Menu -->
            <div class="intro-y box p-5 mt-6">
                <div class="mt-1">
                    <a href="" class="flex items-center px-3 py-2 rounded-md bg-theme-1 text-white font-medium"> <i class="w-4 h-4 mr-2" data-feather="image"></i> Images </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2" data-feather="video"></i> Videos </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2" data-feather="file"></i> Documents </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2" data-feather="users"></i> Shared </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2" data-feather="trash"></i> Trash </a>
                </div>
                <div class="border-t border-gray-200 mt-5 pt-5">
                    <a href="" class="flex items-center px-3 py-2 rounded-md">
                        <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                        Custom Work 
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <div class="w-2 h-2 bg-theme-9 rounded-full mr-3"></div>
                        Important Meetings 
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                        Work 
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                        Design 
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <div class="w-2 h-2 bg-theme-6 rounded-full mr-3"></div>
                        Next Week 
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2" data-feather="plus"></i> Add New Label </a>
                </div>
            </div>
            <!-- END: File Manager Menu -->
        </div>
        <div class="col-span-12 lg:col-span-9 xxl:col-span-10">
            <!-- BEGIN: File Manager Filter -->
            <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700" data-feather="search"></i> 
                    <input type="text" class="input w-full sm:w-64 box px-10 text-gray-700 placeholder-theme-13" placeholder="Search files">
                    <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center">
                        <i class="dropdown-toggle w-4 h-4 cursor-pointer text-gray-700" data-feather="chevron-down"></i> 
                        <div class="inbox-filter__dropdown-box dropdown-box mt-10 absolute top-0 left-0 z-20">
                            <div class="dropdown-box__content box p-5">
                                <div class="grid grid-cols-12 gap-4 row-gap-3">
                                    <div class="col-span-6">
                                        <div class="text-xs">File Name</div>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Type the file name">
                                    </div>
                                    <div class="col-span-6">
                                        <div class="text-xs">Shared With</div>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                                    </div>
                                    <div class="col-span-6">
                                        <div class="text-xs">Created At</div>
                                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Important Meeting">
                                    </div>
                                    <div class="col-span-6">
                                        <div class="text-xs">Size</div>
                                        <select class="input w-full border mt-2 flex-1">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="col-span-12 flex items-center mt-3">
                                        <button class="button w-32 justify-center block bg-gray-200 text-gray-600 ml-auto">Create Filter</button>
                                        <button class="button w-32 justify-center block bg-theme-1 text-white ml-2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-auto flex">
                    <button class="button text-white bg-theme-1 shadow-md mr-2">Upload New Files</button>
                    <div class="dropdown relative">
                        <button class="dropdown-toggle button px-2 box text-gray-700">
                            <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                        </button>
                        <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                            <div class="dropdown-box__content box p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Share Files </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: File Manager Filter -->
            <!-- BEGIN: Directory & Files -->
            <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                            <div class="file__icon__file-name">PHP</div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">Routes.php</a> 
                        <div class="text-gray-600 text-xs text-center">1 KB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                            <div class="file__icon--image__preview image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-10.jpg">
                            </div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">preview-10.jpg</a> 
                        <div class="text-gray-600 text-xs text-center">1 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                            <div class="file__icon__file-name">TXT</div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">Resources.txt</a> 
                        <div class="text-gray-600 text-xs text-center">2.2 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                            <div class="file__icon--image__preview image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-11.jpg">
                            </div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">preview-11.jpg</a> 
                        <div class="text-gray-600 text-xs text-center">1.2 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                            <div class="file__icon__file-name">MP4</div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">Celine Dion - Ashes.mp4</a> 
                        <div class="text-gray-600 text-xs text-center">20 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--empty-directory mx-auto"></a> <a href="" class="block font-medium mt-4 text-center truncate">Documentation</a> 
                        <div class="text-gray-600 text-xs text-center">4 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--directory mx-auto"></a> <a href="" class="block font-medium mt-4 text-center truncate">Dota 2</a> 
                        <div class="text-gray-600 text-xs text-center">112 GB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--empty-directory mx-auto"></a> <a href="" class="block font-medium mt-4 text-center truncate">Laravel 7</a> 
                        <div class="text-gray-600 text-xs text-center">120 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                            <div class="file__icon--image__preview image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-3.jpg">
                            </div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">preview-3.jpg</a> 
                        <div class="text-gray-600 text-xs text-center">1.2 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--empty-directory mx-auto"></a> <a href="" class="block font-medium mt-4 text-center truncate">Documentation</a> 
                        <div class="text-gray-600 text-xs text-center">4 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--directory mx-auto"></a> <a href="" class="block font-medium mt-4 text-center truncate">Repository</a> 
                        <div class="text-gray-600 text-xs text-center">20 KB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--empty-directory mx-auto"></a> <a href="" class="block font-medium mt-4 text-center truncate">Laravel 7</a> 
                        <div class="text-gray-600 text-xs text-center">120 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                            <div class="file__icon--image__preview image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-4.jpg">
                            </div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">preview-4.jpg</a> 
                        <div class="text-gray-600 text-xs text-center">1 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--empty-directory mx-auto"></a> <a href="" class="block font-medium mt-4 text-center truncate">Documentation</a> 
                        <div class="text-gray-600 text-xs text-center">4 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                            <div class="file__icon__file-name">TXT</div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">Resources.txt</a> 
                        <div class="text-gray-600 text-xs text-center">2.2 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--empty-directory mx-auto"></a> <a href="" class="block font-medium mt-4 text-center truncate">Laravel 7</a> 
                        <div class="text-gray-600 text-xs text-center">120 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                            <div class="file__icon--image__preview image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-2.jpg">
                            </div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">preview-2.jpg</a> 
                        <div class="text-gray-600 text-xs text-center">1 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                            <div class="file__icon--image__preview image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-1.jpg">
                            </div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">preview-1.jpg</a> 
                        <div class="text-gray-600 text-xs text-center">1.4 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--directory mx-auto"></a> <a href="" class="block font-medium mt-4 text-center truncate">Dota 2</a> 
                        <div class="text-gray-600 text-xs text-center">112 GB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="input border border-gray-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                            <div class="file__icon__file-name">TXT</div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">Resources.txt</a> 
                        <div class="text-gray-600 text-xs text-center">2.2 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-500"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-10">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Directory & Files -->
            <!-- BEGIN: Pagination -->
            <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-6">
                <ul class="pagination">
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                    </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li> <a class="pagination__link" href="">1</a> </li>
                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                    <li> <a class="pagination__link" href="">3</a> </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                    </li>
                </ul>
                <select class="w-20 input box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div>
            <!-- END: Pagination -->
        </div>
    </div> --}}
</div>
@endsection