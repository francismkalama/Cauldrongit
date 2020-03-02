<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cauldron |</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #DDDCDC;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                overflow: auto;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
             #myinlink{
                color: #AB6907;border-right: 1px solid blue; padding-right: 5%;padding-top: 0;padding-left: 1%;font-weight: bold;font-size: 18px;height: 25px;
            } 
             #endlink{
                color: #AB6907; padding-right: 5%;padding-top: 0;padding-left: 1%;font-weight: bold;font-size: 18px;height: 25px;
            }
            #myintnlli{
               font-weight: bold;font-size: 18px;
            }
           
            .dropdown-toggle::after {
              border-top: 0;
            }
            table, th, td {
        font-weight: bold;
}
           
        </style>
    </head>
    <body>
      <div class="container-fluid" style="width: 99.5%;height: auto;margin-bottom: 2%; border-top: 1px solid #AB6907 ;">
        <div id="myheadersy" style="margin-bottom: 0;padding: 0;">
           <div class="container-fluid" style="border-bottom: 1px solid #AB6907;margin-top:1%;padding-bottom: 0.5%;">
            <div class="container">
             <div class="row">                
                    <!-- <div class="row"> -->
                        <div class="col-sm-2 " style="text-align: center;border-radius: 50px;padding-top: 1%;">
                       <!--   <span style="font-size: 300%; color: #B5B5AF; font-style: italic;font-weight: bold;">CAULDRON</span>  -->
                         <img src="{{ URL::to('/') }}/slider/cclogo.png" style="height: 65%; width: 60%;margin-top: 1%;">
                         <!-- 
                           <img src="{{ URL::to('/') }}/slider/cclogo2.jpg" style="height: 65%; width: 60%;margin-top: 1%;"> --> 
                        </div>
                        <div class="" style=" padding-top: 3.5%;margin-left: 2%;">
         @if (Route::has('login'))
                <div class="top-left links" style="">
                    @auth
                        <!-- <a href="{{ url('/home') }}">Home</a> -->
                    @else
                    <a href="{{ url('/') }}" style="color: #AB6907; border-right: 1px solid blue;">Media Center</a>
                    <a href="{{ url('/') }}" style="color: #AB6907;border-right: 1px solid blue;">Our Team</a>
                    <a href="{{ route('login') }}" style="color: #AB6907;border-right: 1px solid blue;">login</a>
                     <a href="{{ route('contactus') }}" style="color: #AB6907;">Contact Us</a>
                    @endauth
                </div>
            @endif 
                        </div>
                    <!-- </div> -->
                    
                </div>   
            </div>
              
        
        </div> 


<div>
  <nav class="navbar navbar-default navbar-static-top" style="background-color: #1B207C;position: relative;padding-right: 0;">
        <div class="container" >
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                   <!--  <a class="navbar-brand" href="{{ url('/') }}" style="font-weight: bold;font-size: 30px;">
                        {{ config('Cauldron', 'Cauldron') }}
                    </a> -->
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="width:80%; padding-right: 0; display: inline;padding-bottom:0;">
                        <li  style="width: 10%;margin-left: 1%;"><a href="{{ url('/home') }}" id="myinlink" >Home</a></li>

                            <li style="width: 13%;margin-left: 1%;">
                                <a href="{{ url('/aboutus') }}" id="myinlink" style="color: #AB6907;padding-right:3%;margin-bottom: 1%; padding-left: 1%;font-weight: bold;padding-top: 0;" >About Us</a>
                            </li>

                        <li class="dropdown" style="width: 23%; margin-left: 1%;margin-right: 0;">
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
                                   <ul class="dropdown-menu" style="padding: 0;border-radius: 5px;z-index: 1; position: absolute;">
                                    <li  style="background-color: #1B207C;padding-top: 0;">
                                        <a href="{{ url('/training/personalfinance') }}" style="border-bottom: 1px solid;color: #AB6907" >
                                          Personal finance
                                        </a>
                                        <a href="{{ url('/training/insuranceproducts') }}" style="border-bottom: 1px solid;color: #AB6907" >
                                         Insurance products
                                        </a>
                                        <a href="{{ url('/training/insurancecourses') }}" style="border-bottom: 1px solid;color: #AB6907" >
                                          Insurance Courses
                                        </a>
                                        <a href="{{ url('/training/detectfraud') }}" style="border-bottom: 1px solid;color: #AB6907">
                                            Fraud detection and mitigation
                                        </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

                            </li>
                             <li class="dropdown" style="width: 15%;margin-left: 1%;margin-right: 0;">
                                <a href="#" id="myinlink" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" >Talent Search</a>
                                   <ul class="dropdown-menu" style="padding: 0;border-radius: 5px;z-index: 1; position: absolute;">
                                    <li style="background-color: #1B207C;padding-top: 0; ">
                                        <a href="{{ url('/talentsearch/careergrowth') }}" style="border-bottom: 1px solid;color: #AB6907">
                                            Career growth
                                        </a>
                                        <a href="{{ url('/talentsearch/careergrowth') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Productivity
                                        </a>
                                        <a href="{{ url('/talentsearch/careergrowth') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Dealing with Job loss
                                        </a>
                                        <a href="{{ url('/talentsearch/careergrowth') }}" style="color: #AB6907;">
                                            Choosing a Career
                                        </a>
                                    </li>
                                </ul>
                            </li>
                               <li class="dropdown" style="width: 21%;margin-left: 1%;margin-right: 0;">
                                <a href="#" id="endlink" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" >Sales Management</a>
                                   <ul class="dropdown-menu" style="padding: 0;border-radius: 5px;z-index: 1; position: absolute;">
                                    <li style="background-color: #1B207C;padding-top: 0; ">
                                        <a href="{{ url('/salesmanagement/recruiting') }}" style="border-bottom: 1px solid;color: #AB6907">
                                            Recruiting
                                        </a>
                                        <a href="{{ url('/salesmanagement/recruiting') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Selling skills
                                        </a>
                                        <a href="{{ url('/salesmanagement/recruiting') }}" style="color: #AB6907;border-bottom: 1px solid;color: #AB6907">
                                            Leadership and development
                                        </a>
                                        <a href="{{ url('/salesmanagement/recruiting') }}" style="color: #AB6907;">
                                            Cross – selling and up – selling
                                        </a>
                                    </li>
                                </ul>
                            </li>
                                
                                </ul>
                            </li>


                          

                    </ul>


                </div>
              </div>
  </nav>
</div>
 



    </div>
<div class="container-fluid" style="margin-top: 0; padding-bottom: 2px;background-color: #DDDCDC;">
      <section id="intro" style="height: 90%;background-color: #DDDCDC;">
    <div class="intro-container" style="border-right: 1px solid #1B207C;width: 70%;">
      <!-- <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel"> -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-left: 5%;">
    <ol class="carousel-indicators" style="margin-left: 1%;" >
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
  </ol>

        <!-- <div class="carousel-inner" role="listbox"> -->
 <div class="carousel-inner" style="margin-left: 20%;border-bottom:solid #AB6907;">
    <div class="item active">
      <img src="{{ URL::to('/') }}/slider/cauldronmodified1.jpg" alt="training corporate">
      <div class="carousel-caption" style="padding:0;position: absolute;width: 40%; height:10%; top: 47%; left:1%;">          
          <!-- <a href="" class="btn btn-primary btn-bg">Shop Now</a>          -->
        </div>
    </div>

    <div class="item">
      <img src="{{ URL::to('/') }}/slider/cauldronmodified2.jpg" alt="training corporate">
      <div class="carousel-caption" style="padding:0;position: absolute;width: 40%; height:40%; top: 15%; left:25%;">          
          <!-- <a href="" class="btn btn-primary btn-bg">Shop Now </a> -->  <span style="color: #ffff;font-size: 3em;font-weight: bold;">financial managament consultancy </span>        
        </div>
    </div>
     <div class="item">
      <img src="{{ URL::to('/') }}/slider/cauldronmodified3.jpg" alt="training corporate">
      <div class="carousel-caption" style="padding:0;position: absolute;width: auto; height:10%; top: 20%; left:15%;"> 
      <span style="color: #ffff;font-size: 3em;font-weight: bold;">We walk with you on corporate prosperity</span>         
               
        </div>
    </div>

    <div class="item">
      <img src="{{ URL::to('/') }}/slider/cauldronmodified4.jpg" alt="training corporate">
      <div class="carousel-caption" style="padding:0;position: absolute;width: auto; height:10%; top: 20%; left:15%;"> 
      <span style="color: #ffff;font-size: 3em;font-weight: bold;">We coach you to manage your finance</span>         
               
        </div>
    </div>
     <div class="item">
      <img src="{{ URL::to('/') }}/slider/cauldronmodified5.jpg" alt="training corporate">
      <div class="carousel-caption" style="padding:0;position: absolute;width: auto; height:10%; top: 20%; left:15%;"> 
      <span style="color: #ffff;font-size: 3em;font-weight: bold;">We coach you to choose a career</span>         
               
        </div>
    </div>
     <div class="item">
      <img src="{{ URL::to('/') }}/slider/cauldronmodified6.jpg" alt="training corporate">
      <div class="carousel-caption" style="padding:0;position: absolute;width: auto; height:10%; top: 47%; left:1%;">          
               
        </div>
    </div>
    <div class="item">
      <img src="{{ URL::to('/') }}/slider/cauldronmodified7.jpg" alt="training corporate">
      <div class="carousel-caption" style="padding:0;position: absolute;width: auto; height:10%; top: 47%; left:1%;">          
               
        </div>
    </div>
   
  </div>  
</div>
</div>
  </section>    
</div>
<div class="container-fluid" style="margin-top: 3px;">
<div class="container" style=" width: 100%;">
    <div class="row" style="border: solid green;width: 100%;display: table-row;">
  <div class="col-lg-4" style=" border-radius: 5px;padding-top: 3%;">    
         <div class="panel panel-info" style="width: 100%;">
  <div class="panel-heading" style="background-color: #1B207C;">
    <span style="font-weight: bold;font-size: 18px;color: #AB6907;">Our Vision</span> 
</div>
  <div class="panel-body">
    <span style="color: black;font-weight: bold;font-size: 1.6em;">To be the most recognized independent brand in the emerging market research based
consulting space internationally</span>  
</div>
 <!--  <div class="panel-footer">
    <a href="{{ url('/aboutus')}}" style="font-weight: bold;">Vision &gt;&gt;</a>
</div> -->
</div>
      
  </div>
  <div>&nbsp;</div>
   <div class="col-lg-4" style=" border-radius: 5px;padding-top: 1%;">    
           <div class="panel panel-info" style="width: 100%;">
  <div class="panel-heading" style="background-color: #1B207C;">
    <span style="font-weight: bold;font-size: 18px;color: #AB6907;">Our Mision</span> </div>
  <div class="panel-body">
    <span style="color: black;font-weight: bold;font-size: 1.6em;">Building and maintaining robust, long-term relationships with our clients and
treasuring “client share” rather than “market share”</span>  
</div>
 <!--  <div class="panel-footer">
    <a href="{{ url('/aboutus')}}" style="font-weight: bold;">Mision &gt;&gt; </a>
</div> -->
</div>
   
  </div>
   
   <div class="col-lg-4" style=" border-radius: 3px;padding-top: 1%;">
         <div class="panel panel-info" style="width: 100%;">
  <div class="panel-heading" style="background-color: #1B207C;">
    <span style="font-weight: bold;font-size: 18px;color: #AB6907;">Our Objectives</span> </div>
  <div class="panel-body">
    <span style="color: black;font-weight: bold;font-size: 1.4em;">
<ul>
    <li>Reliable Service/Products</li>
     <li>Providing Solution</li>
     <li>Most innovative Products/Services</li>
     <li>Diversify and grow revenue streams</li>
</ul>
</span>  
</div>
<!--   <div class="panel-footer">
    <a href="{{ url('/team')}}" style="font-weight: bold;">Meet the Team &gt;&gt;</a>
</div> -->
</div>
      
  </div>
  
</div>
    
</div>
    
</div>

<div class="container-fluid" style="">
<div class="container">
  <div class="row">
    <div class="col-sm-7" style="border-right: 1px solid #AB6907;padding-left: 10%;margin-top: 2%;">
      <h4 style="font-weight: bold;font-size:20px; font-style: italic;">Why Cauldron Consulting Training</h4>
      <div style="padding-left: 5%;" >
        <table>
          <tr>
            <td id="myintnlli">Quality training with competitive pricing &nbsp;&nbsp;</td>
            <td>&#10004;</td>
          </tr>
          <tr>
            <td id="myintnlli">Innovation and Creativity&nbsp; </td>
            <td>&#10004;</td>
          </tr>
          <tr>
            <td id="myintnlli">Excellent reputation&nbsp; </td>
            <td>&#10004;</td>
          </tr>
          <tr>
            <td id="myintnlli">A local trainer to you&nbsp; </td>
            <td>&#10004;</td>
          </tr>
          <tr>
            <td id="myintnlli">Consultative approach&nbsp; </td>
            <td>&#10004;</td>
          </tr>
          <tr>
            <td id="myintnlli">Broad range of services&nbsp; </td>
            <td>&#10004;</td>
          </tr>
          <tr>
            <td id="myintnlli">Training Partnership&nbsp; </td>
            <td>&#10004;</td>
          </tr>
          <tr>
            <td id="myintnlli">Deliver training in a fun, interactive and engaging way &nbsp; </td>
            <td>&#10004;</td>
          </tr>
        </table>
      </div>
      
    </div>
    <div class="col-sm-5" id="imagescroller" style="display: block;" >
        <!-- foreach -->
        <div class="carousel-inner" id="divsliderimage" style="border: 1px solid red;"> 
            <img src="{{ URL::to('/') }}/slider/cauldronmodified7.jpg" alt="training corporate" style="width: 100%;height: 100%;display: block;">

      <!--   @foreach ($image as $objs) 
       <div id="divsliderimage" style="border: solid red;"> 
          <img class="mySlides" src="{{ URL::to('/') }}/images/{{$objs->imagename}}" id="mysliderimage_{{$objs->id}}" alt=""  style="width: 100%;height: 100%;display: block;">  
        </div> 
    
                      
          @endforeach -->
          </div>
      
    </div>
  </div>
  
</div>
    
</div>
        
</div>
<div class="container-fluid" style="border-top:1px solid #AB6907; height:auto; color: #ffff; background-color:#1B207C;">
  <div class="container">
    <div class="row" style="text-align: center;">
      <div class="col-md-12" >
        <span>Cauldron Consulting Limited<br>Kindaruma Road off Ngong Road<br><address style="padding: 0;margin: 0;">P.O. Box 37377-00100,<br>Nairobi,Kenya.</address>&copy; Cauldron <?php echo date('Y');?> </span>

         
      </div>
      
    </div>
  </div>
 
</div>
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/slider.js') }}"></script>
     <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
      <script type="text/javascript">
 var slideIndex = 1;
 var myIndex = 0;
showDivs(slideIndex);
//carousel();
mycarousel();

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsById("myslider");
  // if (n > x.length) {slideIndex = 1}    
  // if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}   
  x[slideIndex-1].style.display = "block";  
   setTimeout(showDivs, 2000);

}
var myIndex = 0;
//carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");

  for (i = 0; i < x.length; i++) {

    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}

$(document).ready(function(){


 $('#divsliderimage').click(function(){
        alert(5);
    });
});

   
  //var i = $('mySlides').attr('id');

  // alert($('.mySlides').attr('id'));
  // var x = document.getElementsByClassName("mySlides");
//   $('img').on('click',function() {
//    var id = $(this).attr("id");
//    alert(id);
//    //etc
// });

  // for (i = 0; i < x.length; i++) {

  //   x[i].style.display = "none";  
  // }
  // myIndex++;
  // if (myIndex > x.length) {myIndex = 1}    
  // x[myIndex-1].style.display = "block";  
function mycarousel() {}

      </script>
    </body>
</html>
