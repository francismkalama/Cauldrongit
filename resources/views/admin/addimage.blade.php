@extends('layouts.app')
@section('content')
<div class="container-fluid" style="">   

      <div class="col-md-2" style="border-right: 1px solid #AB6907;padding-left: 1%;">
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
                <div class="panel-heading" style="background-color: #DDDCDC;font-size: 2em;">Admin : Upload Image</div>

                <div class="panel-body">
                   <!--  @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif -->
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
                      <form id="image-form" action="thumbnailImagePost" method="POST" enctype = 'multipart/form-data' >
                        
                        <input type="file" name="imagefile" class="form-control" style="background-color: #DDDCDC;"><br>
                       
                        <textarea form="image-form" name="imagedescription" class="form-control" placeholder="Describe image"></textarea><br>
                        <label>Image Category:</label>
                    <select id="category" class="input-large" name="categoryoption" style="border-radius: 5px;">
                          <option value="slider">Home slider</option>
                          <option value="gallery">Gallery</option> 
                        </select><br>
                        <input type="submit"  value="Upload Image" style="margin-top: 2%;background-color:#1B207C;" class="btn btn-primary">
                                            {{ csrf_field() }}
                                        </form>

                   
                </div>
            </div>
        <!-- <div class="row">
        </div> -->
   <div class="container">  
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
