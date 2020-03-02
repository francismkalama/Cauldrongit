@extends('layouts.myheader')
@section('content')
<div class="">
	<div class="" style="margin-top: 1%;">
		<!-- <img src="{{ URL::to('/') }}/slider/Trainingcourses4.jpg" style="padding-left: 20%;"> -->
		<img src="{{ URL::to('/') }}/slider/cauldronmodified4.jpg" style="padding-left: 15%;">
	</div>
</div>
<div class="container-fluid" style="margin-top: 1%;margin-bottom: 0;padding-left: 12%;">
	<div style="" >	
	
	<ul id="mynavheadertab" style="font-size: 1.5em;">
		<li style="font-weight: bold;">Training: </li>
		<li><a href="{{ url('/training/personalfinance') }}" id="mynavheadertablink" > Personal Finance</a></li>&nbsp;\
		<li><a href="{{ url('/training/insuranceproducts') }}" id="mynavheadertablink"> Insurance Products</a></li>&nbsp;\
		<li><a href="#" id="mynavheadertablink" class="active"> Insurance Courses </a></li>&nbsp;\
		<li><a href="{{ url('/training/detectfraud') }}" id="mynavheadertablink"> Fraud Detection </a></li>&nbsp;\
		<li><a href="{{ url('/training/customerservice') }}" id="mynavheadertablink" > Customer Service </a></li>
	</ul>
	
	</div>

</div>
<div class="container-fluid" style="margin-top: 0;">
	
	<div class="container">
		<div class="row" style="margin-left: 15%;">
			
		</div>		
		<div class="row" style="margin-top: 1%;" id="aboutcaldron">
			<div class="col-md-2 " style="border-left:solid #AB6907;background-color: #1B207C;border-bottom-right-radius: 45px;">
			<h3 style="font-weight: bold;color:black; ">Insurance Courses</h3>
		</div>
			<div class="col-md-10" style="text-align: justify; text-justify: inter-word;">
					<span style="color:#1B207C;; font-weight: bold;font-size:1.5em;"> 
We have a technical team that has a background rich of insurance knowledge. We train on Diploma in
Insurance offered by two institution based in the UK. Chattered Insurance Institute and the Cambridge
International College.
		</span>
			</div>
		</div>
	
	</div>

	<div>

	</div>
</div>

@endsection
@section('footer')
<div class="container-fluid" style="border-top:1px solid #AB6907; height:auto; color: #ffff; background-color:#1B207C; margin-top:10%; ">
	<div class="container">
		<div class="row" style="text-align: center;">
			<div class="col-md-12" >
				<span>Cauldron Consulting Limited<br>Kindaruma Road off Ngong Road<br><address style="padding: 0;margin: 0;">P.O. Box 37377-00100,<br>Nairobi,Kenya.</address>&copy; Cauldron <?php echo date('Y');?> </span>
</div>
</div>
</div>
</div>
@endsection