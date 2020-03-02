@extends('layouts.app')
@section('content')
<div class="container-fluid" style="padding-top: 0;"> 
  <div class="row">
          <div class="col-md-2" style="padding-left: 1%;">
        <div class="panel panel-default" style="background-color: #DDDCDC;">
                <div class="panel-heading" style="background-color: #1B207C;;font-size: 20px;text-align: center;color: #ffff;">Menu</div>
                  <div class="panel-body">
             <ul style="list-style-type: none;" class="adminlink">
            <li><a href="{{ url('/adminhome') }}">My Home</a></li>              
            <li><a href="">Change Password</a></li>
            <li><a href="{{ url('/admin/viewimages') }}">View Images</a></li>
            <li><a href="{{ url('/admin/addimages') }}">Add Image</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
        </ul>
                  </div>
            </div>
       
</div> 
    <div class="col-md-10">
            <div class="panel panel-default" style="background-color: #DDDCDC;">
                <div class="panel-heading" style="background-color: #DDDCDC; color: maroon;font-size: 2em;">Welcome Admin.</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <span style="font-size: 2em;">You are logged in as the Admin!</span> 
                </div>
            </div>
        <!-- <div class="row">
        </div> -->
   <div class="container">  
    </div>
</div> 
</div>
</div>

@endsection
@section('footer')
<div class="container-fluid" style="border-top:1px solid #AB6907; height:auto; color: #ffff; background-color:#1B207C; margin-top:20%; ">
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-12" >
                <span>Cauldron Consulting Limited<br>Kindaruma Road off Ngong Road<br><address style="padding: 0;margin: 0;">P.O. Box 37377-00100,<br>Nairobi,Kenya.</address>&copy; Cauldron <?php echo date('Y');?> </span>
</div>
</div>
</div>
</div>
@endsection
