@extends('layouts.myheader')
@section('content')
<div class="" style="border-top: 1px solid #1B207C;">
	<div class="" style="margin-top: 1%;">
		<!-- <img src="{{ URL::to('/') }}/slider/Trainingcourses4.jpg" style="padding-left: 20%;"> -->
		<img src="{{ URL::to('/') }}/slider/cauldronmodified4.jpg" style="padding-left: 15%;">
	</div>
</div>
<div class="container" style="border-bottom: 3px solid #AB6907;margin-top: 1%;">
<nav class="navbar navbar-default" style="font-weight: bold;margin-bottom: 1%;min-height: 10px;background-color: #DDDCDC;">
  <div class="container-fluid" style="margin-left: 20%;"  >
     <ul class="nav navbar-nav" id="mynavheadertab" style="margin-bottom: 0;">
      <li class="active">Sales Management &nbsp;: &nbsp;</li>

      <li class="active"><a href="#" style="padding: 0;">Recruiting&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Selling skills&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Leadership and development&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Cross – selling and up – selling&nbsp;\&nbsp;</a></li>
          
    </ul>
  </div>
</nav>	
</div>
<div class="container">
	<span style="color:#1B207C;; font-weight: bold;">
	Selling Skills <br>
Selling involves helping customers identify problems, offering information about
potential solutions, and providing after the sale service to ensure long term
satisfaction. In order to perform all these functions effectively, it requires
customer- centric which entails a seller’s goal to add value.
Thus the total benefit that the seller’s product need to offer to the buyer.
Cauldron has an array of techniques that can be utilized to benefit an
organization’s sales force and enhance the production turnover.  </span> 
</div>
@endsection
@section('footer')
<div class="container-fluid" style="border-top:1px solid #AB6907; height:auto; color: #ffff; background-color:#1B207C; margin-top:4%; ">
	<div class="container">
		<div class="row" style="text-align: center;">
			<div class="col-md-12" >
				<span>Cauldron Consulting Limited<br>Kindaruma Road off Ngong Road<br><address style="padding: 0;margin: 0;">P.O. Box 37377-00100,<br>Nairobi,Kenya.</address>&copy; Cauldron <?php echo date('Y');?> </span>
</div>
</div>
</div>
</div>
@endsection