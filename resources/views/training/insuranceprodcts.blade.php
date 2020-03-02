@extends('layouts.myheader')
@section('content')
<div class="" >
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
		<li><a href="#" id="mynavheadertablink" class="active"> Insurance Products</a></li>&nbsp;\
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
			<h3 style="font-weight: bold;color:black; ">Insurance products</h3>
		</div>
			<div class="col-md-10" style="text-align: justify; text-justify: inter-word;">
					<span style="color:#1B207C;; font-weight: bold;font-size:1.3em;"> 
						There are thousands insurance products outside there, from thousands insurance companies. How do you get to know that the product you bought is the best deal that you could get, the terms and conditions are the best and the benefits suits your need?  We have qualified captains in this sea of insurance products who understand the tides of the market and industry. The vast knowledge we have in, matters of insurance, will help you navigate in any insurance contract or investment you want. Insurance products include:
<table>
	<tr>
		<td>&diams;&nbsp;Customer Service for Insurers </td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;&nbsp;Underwriting Practices</td>
	</tr>
	 <tr>
		<td>&diams;&nbsp;Liability Insurance Practices</td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;&nbsp;Claim Evaluation and Settlement</td>
	</tr>
	
		<tr>
		<td>&diams;&nbsp;Selling Disability Income Insurance</td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;&nbsp;Risk Management for Insurers</td>
	</tr>

		<tr>
		<td>&diams;&nbsp;Motor Claims Fundamentals </td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;Reinsurance for Insurance Practitioners</td>
	</tr>
	<tr>
		<td>&diams;&nbsp;Health Insurance Concepts </td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;&nbsp;Life Concepts</td>
	</tr>
	<tr>
		<td>&diams;&nbsp;Ethical Guidelines for the Insurance Professionals</td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;&nbsp;Motor Claims Investigation</td>
	</tr>
	<tr>
		<td>&diams;&nbsp;Foundation Course in Risk</td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;&nbsp;Motor Claims Practices</td>
	</tr>
	<tr>
		<td>&diams;&nbsp;Management and Insurance</td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;Agency Operations and Sales Management</td>
	</tr>
	<tr>
		<td>&diams;&nbsp;Communication Skills for Claims Professionals</td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;&nbsp;Claim Handling Fundamentals</td>
	</tr>
	<tr>
		<td>&diams;&nbsp;Marine Claims Management</td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;&nbsp;Marine Underwriting Management
</td>
	</tr>
	<tr>
		<td>&diams;&nbsp;Customer service for Insurance Professionals</td>
		<td style=" padding-left:50px;"></td>
		<td>&diams;General Insurance Underwriting Fundamentals </td>
	</tr>
	<tr>
		<td>&diams;&nbsp;Underwriting Skills for Agents </td>
		<td style=" padding-left:50px;"></td>
		<td></td>
	</tr>
</table>  
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