@extends('layouts.myheader')
@section('content')
<div class="" style="border-top: 1px solid #1B207C;">
	<div class="" style="margin-top: 1%;">
		<!-- <img src="{{ URL::to('/') }}/slider/Trainingcourses4.jpg" style="padding-left: 20%;"> -->
		<img src="{{ URL::to('/') }}/slider/cauldronmodified8.jpg" style="padding-left: 15%;">
	</div>
</div>
<div class="container" style="border-bottom: 3px solid #AB6907;margin-top: 1%;">
<nav class="navbar navbar-default" style="font-weight: bold;margin-bottom: 1%;min-height: 10px;background-color: #DDDCDC;">
  <div class="container-fluid" style="margin-left: 20%;"  >
     <ul class="nav navbar-nav" id="mynavheadertab" style="margin-bottom: 0;">
      <li class="active">Training&nbsp;: &nbsp;</li>

      <li class="active"><a href="#" style="padding: 0;">Risk Management&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Insurance products&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Diploma insurance professional papers&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Fraud detection and mitigation&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Diploma from Chartered Insurance Institute&nbsp;\&nbsp;</a></li>
      <li class="active"><a href="#" style="padding: 0;">Diploma from Cambridge Insurance College on Insurance&nbsp;\&nbsp;</a></li>
       <!-- <li class="active"><a href="#" style="padding: 0;">Debt management</a></li>       -->
    </ul>
  </div>
</nav>	
</div>
<div class="container">
	<span style="color:#1B207C;; font-weight: bold;">
	Training and Development <br>
Training is a program that helps employees learn specific knowledge or skills to
improve performance in their current roles. Development is more expansive and
focuses on employee growth and future performance, rather than an immediate
job role. Development requires leadership which is one of our core fundamental
focus to check on when conducting our training services. </span> 
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