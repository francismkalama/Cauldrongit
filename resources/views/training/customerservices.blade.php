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
		<li><a href="{{ url('/training/insurancecourses') }}" id="mynavheadertablink"> Insurance Courses </a></li>&nbsp;\
		<li><a href="{{ url('/training/detectfraud') }}" id="mynavheadertablink"> Fraud Detection </a></li>&nbsp;\
		<li><a href="#" id="mynavheadertablink" class="active"> Customer Service </a></li>
	</ul>
	
	</div>

</div>
<div class="container-fluid" style="margin-top: 0;">
	
	<div class="container">
		<div class="row" style="margin-left: 15%;">
			
		</div>		
		<div class="row" style="margin-top: 1%;" id="aboutcaldron">
			<div class="col-md-2 " style="border-left:solid #AB6907;background-color: #1B207C;border-bottom-right-radius: 45px;">
			<h3 style="font-weight: bold;color:black; ">Customer Service</h3>
		</div>
			<div class="col-md-10" style="text-align: justify; text-justify: inter-word;">
					<span style="color:#1B207C;; font-weight: bold;font-size:1.5em;"> 
When developing a Customer Service Training Programme, there are a number of
simple training approaches you can take. We offers some useful tips and
advice, covering the main considerations and principles.
The importance of high quality customer service and effective complaint handling
can’t be overstated If customer service quality is low, then business outcomes,
company reputation and the bottom line will be negatively impacted.
Providing a high level of customer service, to both external and internal clients,
is a top priority of many organizations. Further, embedding that mindset into the
culture of the organization is an effective way to ensure that teams will
continuously strive for excellence in their service levels.
While many companies promise to deliver an incredible customer experience,
some are better at delivering than others. This course is designed around six
critical elements of customer service that, when the company lives them, bring
customers back to experience service that outdoes the competition. 
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