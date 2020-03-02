@extends('layouts.myheader')
@section('content')
<div class="">
	<div class="" style="margin-top: 1%;">
		<!-- <img src="{{ URL::to('/') }}/slider/Trainingcourses4.jpg" style="padding-left: 20%;"> -->
		<img src="{{ URL::to('/') }}/slider/cauldronmodified11.jpg" style="padding-left: 15%;">
	</div>
</div>
<div class="container-fluid" style="margin-top: 1%;margin-bottom: 0;">
	<div style="display: inline;">	
	
	<ul id="mynavheadertab" style="font-size: 1.5em;">
		<li style="font-weight: bold;">Financial Consultancy : </li>
		<li><a href="{{ url('/finance/budgeting') }}" id="mynavheadertablink" > Budgeting</a></li>&nbsp;\
		<li><a href="#" id="mynavheadertablink" class="active"> Saving</a></li>&nbsp;\
		<li><a href="{{ url('/finance/investing') }}" id="mynavheadertablink"> Investing</a></li>&nbsp;\
		<li><a href="{{ url('/finance/retirement') }}" id="mynavheadertablink"> Retirement</a></li>&nbsp;\
		<li><a href="{{ url('/finance/taxes') }}" id="mynavheadertablink"> Taxes</a></li>&nbsp;\
		<li><a href="{{ url('/finance/insurance') }}" id="mynavheadertablink"> Insurance</a></li>&nbsp;\
		<li><a href="{{ url('/finance/debtmanagement') }}" id="mynavheadertablink"> Debt management</a></li>
	</ul>
	
	</div>

</div>
<div class="container-fluid" style="margin-top: 0;">
	<div class="container">
		<!-- <div class="row" style="margin-left: 15%;">
			<div class="col-md-2 " style="border-left:solid #AB6907;background-color: #1B207C;border-bottom-right-radius: 45px;">
			<h3 style="font-weight: bold;color:black; ">Saving</h3>
		</div>
		</div> -->		
		<div class="row" style="margin-top: 1%;" id="aboutcaldron">
			<div class="col-md-2 " style="border-left:solid #AB6907;background-color: #1B207C;border-bottom-right-radius: 45px;">
			<h3 style="font-weight: bold;color:black; ">Saving</h3>
		</div>
			<div class="col-md-10" style="text-align: justify; text-justify: inter-word;">
					<span style="color:#1B207C;; font-weight: bold;font-size:1.5em;"> 
I think of the worst case scenario, walk myself through what I’d do if that happened and make a plan. Not only does it help to ease my stress and anxiety about the future, but it also allows me to live more in the present. Besides having an abstract back-up plan, it’s good to have a concrete one too. Think of saving as the fire extinguisher in your house. Ideally you’ll never need to use it, but when you actually have to; you’re so glad it’s there. Cauldron are tailor made to suit your saving need.
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