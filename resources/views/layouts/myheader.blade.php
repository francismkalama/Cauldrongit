<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Cauldron', 'Cauldron |') }}</title>

    <!-- Styles -->
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
          html, body {
                background-color: #DDDCDC;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                /*height: 100vh;*/
                height: auto;
                margin: 0;

            }
            hr{
                border-bottom:1px solid #AB6907;
            }
            #myinlink{
                color: #AB6907;border-right: 1px solid blue; padding-right: 5%;padding-top: 0;padding-left: 1%;font-weight: bold;font-size: 18px;height: 25px;
            }
            #mynavheadertab li {
                display: inline;
                padding: 0;
                margin: 0;
            }
            #mynavheadertablink:hover:not(.active){
                background-color: #1B207C;;
            }
            #mynavheadertablink.active{
                /*background-color: #1B207C;*/
                border-bottom:solid #AB6907;
                /*border-top-left-radius:5px; */
                /*border-top-right-radius:5px; */
                color: #AB6907;
                text-decoration: none;
            }
            #mynavheadertablink{
                text-decoration: none;
                font-weight: bold;
            } 

    </style>
</head>
<body>
    <div class="" style="width:100%;height: 99.5%;">
     
    <div id="app" style="margin-top: 2%;">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #1B207C; margin-bottom: 0;">
            <div class="container" >
                <div class="navbar-header" style="width: 6%; background-color: #DDDCDC;">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-left" href="{{ url('/') }}" style="font-weight: bold;font-size: 30px;">
                        <img src="{{ URL::to('/') }}/slider/cclogo.png" style="height: 100%; width: 100%;">
                      </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="width: 90%;margin-top: 2%;padding: 0;">
                        <!-- Authentication Links -->
                        @guest
                            <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
                            <li  style="width: 6%;"><a href="{{ url('/') }}" id="myinlink" >Home</a></li>

                            <li style="width: 9%;margin-left: 1%;">
                                <a href="{{ url('/aboutus') }}" id="myinlink">About Us</a>
                            </li>
                      <li class="dropdown" style="width: 22%;margin-right: 0;margin-left: 1%;">
                                <a href="#" id="myinlink" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" >Financial Consultancy</a>
                                   <ul class="dropdown-menu" style="padding: 0;border-radius: 5px;z-index: 1; position: absolute;">
                                    <li style="background-color: #1B207C;padding-top: 0; ">
                                        <a href="{{ url('/finance/budgeting') }}" style="border-bottom: 1px solid;color: #AB6907">
                                            Budgeting
                                        </a>
                                        <a href="{{ url('/finance/saving') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Saving
                                        </a>
                                        <a href="{{ url('/finance/investing') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Investing
                                        </a>
                                        <a href="{{ url('/finance/retirement') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Retirement
                                        </a>
                                        <a href="{{ url('/finance/taxes') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Taxes
                                        </a>
                                        <a href="{{ url('/finance/insurance') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Insurance
                                        </a>
                                        <a href="{{ url('/finance/debtmanagement') }}" style="color: #AB6907">
                                            Debt management
                                        </a>
                                    </li>
                                </ul>

                            </li>
                                 <li class="dropdown" style="width: 10%;margin-left: 1%;">
                                <a href="#" id="myinlink" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Training</a>
                                   <ul class="dropdown-menu" style="padding: 0;border-radius: 5px;">
                                    <li  style="background-color: #1B207C;padding-top: 0;">
                                        <a href="{{ url('/training/personalfinance') }}" style="border-bottom: 1px solid;color: #AB6907" >
                                            Personal Finance
                                        </a>
                                        <a href="{{ url('/training/insuranceproducts') }}" style="border-bottom: 1px solid;color: #AB6907">
                                            Insurance Products 
                                        </a>
                                        <a href="{{ url('/training/insurancecourses') }}" style="border-bottom: 1px solid;color: #AB6907">
                                            Insurance Courses 
                                        </a>
                                         <a href="{{ url('/training/detectfraud') }}" style="border-bottom: 1px solid;color: #AB6907">
                                            Fraud Detection  
                                        </a>
                                        <a href="{{ url('/training/customerservice') }}" style="color: #AB6907">
                                            Customer Service 
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

                            </li>
                            <li class="dropdown" style="width: 15%;margin-left: 1%; margin-right: 0;">
                                <a href="#" id="myinlink" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" >Talent Search</a>
                                   <ul class="dropdown-menu" style="padding: 0;border-radius: 5px;z-index: 1; position: absolute;">
                                    <li style="background-color: #1B207C;padding-top: 0; ">
                                        <a href="{{ url('/talentsearch/careergrowth') }}" style="border-bottom: 1px solid;color: #AB6907">
                                            Career growth
                                        </a>
                                        <a href="{{ url('/talentsearch/productivity') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Productivity
                                        </a>
                                        <a href="{{ url('/talentsearch/jobloss') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Dealing with Job loss
                                        </a>
                                        <a href="{{ url('/talentsearch/carrerchoice') }}" style="color: #AB6907;">
                                            Choosing a Career
                                        </a>
                                    </li>
                                </ul>
                            </li>
                             <li class="dropdown" style="width: 21%;margin-left: 1%;margin-right: 0;">
                                <a href="#" id="myinlink" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" >Sales Management</a>
                                   <ul class="dropdown-menu" style="padding: 0;border-radius: 5px;z-index: 1; position: absolute;">
                                    <li style="background-color: #1B207C;padding-top: 0; ">
                                        <a href="{{ url('/salesmanagement/recruiting') }}" style="border-bottom: 1px solid;color: #AB6907">
                                            Recruiting
                                        </a>
                                        <a href="{{ url('/salesmanagement/sellingskills') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Selling skills
                                        </a>
                                        <a href="{{ url('/salesmanagement/leadership') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Leadership and development
                                        </a>
                                        <a href="{{ url('/salesmanagement/crossselling') }}" style="color: #AB6907;">
                                            Cross – selling and up – selling
                                        </a>
                                    </li>
                                </ul>
                            </li>
                           
                            <li style="width: 11%;margin-left: 1%;">
                                <a href="{{ url('/contactus')}}" style="color: #AB6907;font-size: 18px;padding-left: 1%;font-weight: bold;height: 25px;padding-top: 0;">Contact Us</a>
                            </li>
                            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div>
      @yield('content')
</div>
   
</div>
@yield('footer')
      
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>