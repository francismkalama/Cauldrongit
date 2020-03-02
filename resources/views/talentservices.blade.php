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
      <li class="active">Talent Search&nbsp;: &nbsp;</li>
   <li class="active"><a href="#" style="padding: 0;">Career growth&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Productivity&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Dealing with Job loss&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Choosing a Career&nbsp;\&nbsp;</a></li>
     </ul>
  </div>
</nav>	
</div>
<div class="container">
	<span style="color:#1B207C;; font-weight: bold;">
	Financial Consultancy
We are designed to be effective at all management levels working through
processes and the unique firm’s management infrastructures ensuring we
enhance performance, inspiration and service delivery into your firm to the ever
challenging industry </span> 
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