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
 <div class="col-md-10">
            <div class="panel panel-default" style="background-color: #DDDCDC;">
                <div class="panel-heading" style="background-color: #DDDCDC;font-size: 2em;">Admin : Edit Image Details</div>
                <div class="panel-body">
         @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                      @if(session('successmsg'))
                       <div class="alert alert-success">
                        {{session('successmsg')}}
                      </div>
                      @endif

	<img class="img-fluid img-thumbnail" id="currentimage" src="{{ URL::to('/') }}/images/{{$obj->imagename}}" alt="">	

 <form id="image-form" action="thumbnailImagePost/{{$obj->id}}" method="POST" enctype = 'multipart/form-data' >
 	<input type="hidden" name="updateid" value="{{$obj->id}}">
 	<input type="hidden" name="emptyfilename" value="{{$obj->imagename}}">
      <input type="file" name="imagefile" class="form-control" style="background-color: #DDDCDC;"><br>                       
     <textarea form="image-form" name="imagedescription" class="form-control" >{{$obj->imagedescription}}</textarea><br>
     <input type="submit"  value="Update" style="margin-top: 1%;background-color:#1B207C;" class="btn btn-primary">
     <a href="{{ url('/admin/viewimages') }}" class="btn btn-danger" style="margin-top: 1%;">Cancel</a>
                                            {{ csrf_field() }}
      </form>
      </div>

   <!--  <div class="col-lg-5 col-md-5 col-7" style="border: 1px solid #AB6907;border-radius:5px;  margin-left: 1%;margin-top: 2%;">
       <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ URL::to('/') }}/images/{{$obj->imagename}}" alt="">
          <div class="col-lg-12 col-md-4 col-6" style="border-bottom: 1px solid #AB6907;">
                <strong>Description: &nbsp;</strong><span style="text-align: justify;">{{$obj->imagedescription}}</span>
           </div>  
          </a>
        
 </div> -->



  
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

