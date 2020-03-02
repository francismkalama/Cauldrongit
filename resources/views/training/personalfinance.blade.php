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
		<li><a href="#" id="mynavheadertablink" class="active"> Personal Finance</a></li>&nbsp;\
		<li><a href="{{ url('/training/insuranceproducts') }}" id="mynavheadertablink"> Insurance Products</a></li>&nbsp;\
		<li><a href="{{ url('/training/insurancecourses') }}" id="mynavheadertablink"> Insurance Courses </a></li>&nbsp;\
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
			<h3 style="font-weight: bold;color:black; ">Personal Finance</h3>
		</div>
			<div class="col-md-10" style="text-align: justify; text-justify: inter-word;">
					<span style="color:#1B207C;; font-weight: bold;font-size:1.5em;"> 
Our membership covers all disciplines within the insurance profession (claims,
broking, underwriting and sales), those working in the life and pensions sector,
the mortgage advice market and financial planning (under the Personal
Finance Society brand).
We are here to build trust in the insurance and financial planning profession.
We believe this will be achieved by creating a genuine global profession where
the best interests of the consumer are to the fore, where ongoing learning and
expertise are cherished, and where the highest standards of ethical behaviour
are embraced.
Through the support and advocacy of our members, specifically those within the
various faculties, societies, boards and committees we are able to ensure that our
activities remain relevant and reflect the needs of our members whilst at the same
time serving the demands of the public.
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