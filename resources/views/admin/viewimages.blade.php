@extends('layouts.app')
@section('content')
<div class="container-fluid" style="padding-top: 0;"> 
  <div class="row">
          <div class="col-md-2" style="padding-left: 1%;">
        <div class="panel panel-default" style="background-color: #DDDCDC;">
                <div class="panel-heading" style="background-color: #1B207C;font-size: 20px;text-align: center;color:#fff;">Menu</div>
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
<div class="col-md-10" style="border-left: 1px solid #AB6907;">
   <h2 class="" style="padding: 0;margin:0;font-weight: bold;">My Gallery</h2>
    
<div class="row text-center text-lg-left">
  @foreach ($obj as $objs)
     <div class="col-lg-5 col-md-5 col-7" style="border: 1px solid #AB6907;border-radius:5px;  margin-left: 1%;margin-top: 2%;">
       <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ URL::to('/') }}/images/{{$objs->imagename}}" alt="">
          <div class="col-lg-12 col-md-7 col-6" style="">
                <strong style="color: blue;text-decoration: underline;">Image Category: &nbsp;{{$objs->category}}</strong>
           </div>
            <div class="col-lg-12 col-md-4 col-6" style="border-bottom: 1px solid #AB6907;">
                <strong>Description: &nbsp;</strong><span style="text-align: justify;">{{$objs->imagedescription}}</span>
           </div>   
          </a>
          <div class="col-lg-7 col-md-4 col-4" style="margin-left: 20%;margin-top: 1%; margin-bottom: 2%;">
             <a href="{{ url('/admin/editimage')}}/{{$objs->id}} " class="btn btn-primary">Edit</a>
                  <a href="{{ url('/admin/deleteimage')}}/{{$objs->id}} "class="btn btn-danger" >Delete</a>
          </div>  

           <!-- <div class="row">
            
              </div> -->
 </div>
  @endforeach
    </div>
  
</div>    
</div>  
</div>  

@endsection
@section('footer')
<div class="container-fluid" style="border-top:1px solid #AB6907; height:auto; color: #ffff; background-color:#1B207C; margin-top:25%; ">
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-12" >
                <span>Cauldron Consulting Limited<br>Kindaruma Road off Ngong Road<br><address style="padding: 0;margin: 0;">P.O. Box 37377-00100,<br>Nairobi,Kenya.</address>&copy; Cauldron <?php echo date('Y');?> </span>
</div>
</div>
</div>
</div>
@endsection

