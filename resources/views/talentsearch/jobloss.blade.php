@extends('layouts.myheader')
@section('content')
<div class="">
	<div class="" style="margin-top: 1%;">
		<!-- <img src="{{ URL::to('/') }}/slider/Trainingcourses4.jpg" style="padding-left: 20%;"> -->
		<img src="{{ URL::to('/') }}/slider/cauldronmodified4.jpg" style="padding-left: 15%;">
	</div>
</div>
<div class="container-fluid" style="margin-top: 1%;margin-bottom: 0;padding-left: 8%;">
	<div style="" >	
	
	<ul id="mynavheadertab" style="font-size: 1.5em;">
		<li style="font-weight: bold;">Talent Search: </li>
		
		<li><a href="{ url('/talentsearch/careergrowth') }}" id="mynavheadertablink"> Career growth</a></li>&nbsp;\
		<li><a href="{{ url('/talentsearch/productivity') }}" id="mynavheadertablink">  Productivity </a></li>&nbsp;\
		<li><a href="#" id="mynavheadertablink" class="active"> Dealing with Job loss </a></li>&nbsp;\
		<li><a href="{{ url('/talentsearch/carrerchoice') }}" id="mynavheadertablink" > Choosing a Career </a></li>

 


	</ul>
	
	</div>

</div>
<div class="container-fluid" style="margin-top: 0;">
	
	<div class="container">
		<div class="row" style="margin-left: 15%;">
			
		</div>		
		<div class="row" style="margin-top: 1%;" id="aboutcaldron">
			<div class="col-md-2 " style="border-left:solid #AB6907;background-color: #1B207C;border-bottom-right-radius: 45px;">
			<h3 style="font-weight: bold;color:black; ">Job Loss</h3>
		</div>
			<div class="col-md-10" style="text-align: justify; text-justify: inter-word;">
					<span style="color:#1B207C;; font-weight: bold;font-size:1.5em;"> 
Both professional and financial, the loss of job can be difficult. Being laid off can be an opportunity for change, once you are ready to navigate your reality. We are here to help you with the bricks of knowledge in order to build your life after.
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