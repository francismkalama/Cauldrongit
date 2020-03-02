@extends('layouts.myheader')
@section('content')
<div class="" style="border-top: 1px solid #1B207C;">
	<div class="" style="margin-top: 1%;">
		<!-- <img src="{{ URL::to('/') }}/slider/Trainingcourses4.jpg" style="padding-left: 20%;"> -->
		<img src="{{ URL::to('/') }}/slider/cauldronmodified7.jpg" style="padding-left: 15%;">
	</div>
</div>
<div class="container-fluid">
	<div class="container">
		<div class="row" style="margin-left: 15%;">
			<div class="col-md-2 " style="border-left:solid #AB6907;background-color: #1B207C;border-bottom-right-radius: 45px;">
			<h3 style="font-weight: bold;color:black; ">About Us</h3>
		</div>
		</div>		
		<div class="row" style="margin-top: 1%;" id="aboutcaldron">
			<div class="col-md-2" style="">
			<span style="text-decoration: underline;text-decoration-color: #AB6907;font-weight: bold;color:black;padding-left: 25%;font-size: 1.5em;font-style: italic;">Who We are</span>	
			</div>
			<div class="col-md-8" style="text-align: justify; text-justify: inter-word;">
					<span style="color:#1B207C;; font-weight: bold;font-size:1.5em;"> 
Cauldron Consulting Limited&trade;  is an accomplished consultancy company with a
team of experienced industry players, specialized in delivering exemplary training
and support. We deliver our services to organizations through training their staff
and modelling them to the flexibility of our global dynamic markets.
Our tailor-made training and consultancy are well developed where by it helps
firms to be ahead of the consensus; we achieve this by working with all levels of
management and give a hand on adding value and skills to your staff.
We are oriented to ensure that our clients are satisfied. This is achieved through
evaluating your goals and objectives ensuring that what we feed your staff shall
be worth in the industry venture.
		</span>
			</div>
		</div>
	
	</div>


	
	<hr />
	<div>

	</div>
</div>
@endsection
@section('footer')
<div class="container-fluid" style="border-top:1px solid #AB6907; height:auto; color: #ffff; background-color:#1B207C ">
	<div class="container">
		<div class="row" style="text-align: center;">
			<div class="col-md-12" >
				<span>Cauldron Consulting Limited<br>Kindaruma Road off Ngong Road<br><address style="padding: 0;margin: 0;">P.O. Box 37377-00100,<br>Nairobi,Kenya.</address>&copy; Cauldron <?php echo date('Y');?> </span>
</div>
</div>
</div>
</div>
@endsection