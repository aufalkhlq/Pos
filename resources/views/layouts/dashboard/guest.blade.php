<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link href="{{ asset("asset/dist/images/logo.svg") }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>@stack('title') - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset("assets/dist/css/app.css") }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset("assets/dist/images/logo.svg") }}">
                        
                    </a>
                    <div class="my-auto">
                        <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset("assets/dist/images/illustration.svg") }}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to 
                            <br>
                            sign up to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white">Manage all your e-commerce accounts in one place</div>
                    </div>
                </div>
                <!-- END: Info -->
                <!-- BEGIN: Form -->
                @yield('content')
                <!-- END: Form -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset("assets/dist/js/app.js") }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>