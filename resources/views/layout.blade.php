<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/pablocamara-loader-2.css') }}">

        <title>@yield('title')</title>

        <style>
            html,body {
                margin: 0;
                padding: 0;
                background-color: #525659;
                font-family: "Roboto", sans-serif;
            }

            .main {
                display: grid;
                grid-template-columns: 1fr auto;
                max-width: 80%;
                height: 100vh;
                margin: auto;
            }

            .main-body {
                background-color: #fff;
                padding-left: 20px;
                padding-right: 20px;
            }

            .main-sidebar {
                background-color: #082A4D;
                color: #fff;
                width: 300px;
            }

            #profile-pic {
                text-align: center;
            }

            #profile-pic img {
                width: 150px;
                border-radius: 150px;
            }

            #job-title {
                text-align: center;
                font-weight: 100;
                margin-top: 10px;
                font-size: 16px;
            }

            #main-menu {
                width: 260px;
                margin: auto;
                margin-top: 20px;
            }

            #main-menu .menu-item {
                background-color: #184068;
                padding: 8px;
                margin-bottom: 10px;
                text-decoration: none;
                display: block;
                color: #fff;
            }

            #main-menu .menu-item:hover,
            #main-menu .menu-item.active {
                background-color: #1c5389;
                cursor: pointer;
            }

            .section-box {
                padding: 10px;
                background: #f6fbff;
                border: 1px solid #dddddd;
                margin-bottom: 20px;
            }

            .section-box .title {
                font-size: 18px;
            }

            .section-box .date-range {
                color: #686868;
                text-transform: uppercase;
                font-size: 14px;
                margin-top: 4px;
                margin-bottom: 8px;
            }

            .section-box .description {
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <div class="main-body">
                @yield('content')
            </div>
            <div class="main-sidebar">
                <div id="pablocamara">
                    <!-- First letter P -->
                    <div class="loadLeftP start"></div>
                    <div class="loadUpperP start"></div>
                    <div class="loadLowerP start"></div>
                    <div class="loadRightP start"></div>

                    <!-- First letter A -->
                    <div class="loadLeftA start"></div>
                    <div class="loadRightA start"></div>
                    <div class="loadTopA start"></div>
                    <div class="loadBottomA start"></div>



                    <!-- First letter B -->
                    <div class="loadLeftB start"></div>
                    <div class="loadTopB start"></div>
                    <div class="loadTopRightB start"></div>
                    <div class="loadMiddleB start"></div>
                    <div class="loadBottomB start"></div>
                    <div class="loadBottomRightB start"></div>

                    <!-- First letter L -->
                    <div class="loadLeftL start"></div>
                    <div class="loadBottomL start"></div>

                    <!-- First letter O -->
                    <div class="loadLeftO start"></div>
                    <div class="loadRightO start"></div>
                    <div class="loadTopO start"></div>
                    <div class="loadBottomO start"></div>


                    <!-- First letter C -->
                    <div class="loadTopC start"></div>
                    <div class="loadLeftC start"></div>
                    <div class="loadBottomC start"></div>

                    <!-- Second letter A -->
                    <div class="loadA2Hat1 start"></div>
                    <div class="loadA2Hat2 start"></div>
                    <div class="loadA2Hat3 start"></div>
                    <div class="loadA2Hat4 start"></div>
                    <div class="loadA2Hat5 start"></div>
                    <div class="loadLeftA2 start"></div>
                    <div class="loadRightA2 start"></div>
                    <div class="loadTopA2 start"></div>
                    <div class="loadBottomA2 start"></div>

                    <!-- First letter M -->
                    <div class="loadLeftM start"></div>
                    <div class="loadMiddleM1 start"></div>
                    <div class="loadMiddleM2 start"></div>
                    <div class="loadMiddleM3 start"></div>
                    <div class="loadMiddleM4 start"></div>
                    <div class="loadMiddleM5 start"></div>
                    <div class="loadRightM start"></div>

                    <!-- Third letter A -->
                    <div class="loadLeftA3 start"></div>
                    <div class="loadRightA3 start"></div>
                    <div class="loadTopA3 start"></div>
                    <div class="loadBottomA3 start"></div>

                    <!-- First letter R -->
                    <div class="loadLeftR start"></div>
                    <div class="loadUpperR start"></div>
                    <div class="loadMiddleR start"></div>
                    <div class="loadTopRightR start"></div>
                    <div class="loadBottomRightR1 start"></div>
                    <div class="loadBottomRightR2 start"></div>
                    <div class="loadBottomRightR3 start"></div>

                    <!-- Fourth letter A -->
                    <div class="loadLeftA4 start"></div>
                    <div class="loadRightA4 start"></div>
                    <div class="loadTopA4 start"></div>
                    <div class="loadBottomA4 start"></div>
                </div>
                <div id="profile-pic">
                    <img src="{{ asset('assets/img/profile-pic.jpg') }}" />
                </div>
                <div id="job-title">
                    Full Stack Software Developer
                </div>
                <div id="main-menu">
                    <a href="/" class="menu-item">Home</a>
                    <a href="{{ route('education') }}" class="menu-item {{ request()->routeIs('education') ? 'active' : '' }}">Education</a>
                    <a href="#" class="menu-item">Employment history</a>
                    <a href="#"  class="menu-item">Projects</a>
                    <a href="#"  class="menu-item">Contact</a>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="{{ asset('assets/js/pablocamara-loader-2.js') }}?v=1.0.0"></script>
    </body>
</html>
