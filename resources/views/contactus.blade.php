@extends('layouts.myheader')
@section('content')
<div class="container" style="margin-top: 2%;" >
	<h4 style="padding-left: 22%;font-weight: bold;font-size: 25px;text-decoration: underline;text-decoration-color: #AB6907;">Contact Us</h4> 
	<div class="row" >
		<div class="col-md-7" style="border-right: 1px solid #1B207C;">
			<form action="contactus" method="POST" id="checkout_form" style="padding-top: 3%;">
		       			<div class="row" >
		       				<div class=""></div>
		       				<div class="col-xs-10 col-sm-offset-1"  >
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="yourname">Your Name:</label>
		       						<input type="text" id="name" name="yourname" class="form-control" required>
		       					</div>
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="mobilenumber">Mobile Number :</label>
		       						<input type="text" id="mobinumber" name="mobilenumber" class="form-control" required>
		       					</div>	
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="email">Email:</label>
		       						<input type="email" id="email" name="email" class="form-control" required>
		       					</div>	
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="subject">Subject:</label>
		       						<input type="text" id="text" name="subject" class="form-control" required>
		       					</div>
		       					<div class="form-group col-xs-8 col-sm-offset-2">
		       						<label for="county">Your Message:</label>
		       						<input type="textarea" id="message" name="message" class="form-control" required>
		       					</div>			       					
		       								       				
		       				<div class="form-group col-xs-8 col-sm-offset-2">
		       						{{ csrf_field() }}
		       						<button type="submit"  class="btn btn-primary" style="background-color: #1B207C"> Send Message</button>
		       					</div>	
		       			</div>
		       		</div>
		       		</form>
		</div>
		<div class="col-md-5" style="padding-top:2%;padding-left: 6%;">
			<div>
<span><strong style="font-weight: bold;color:#1B207C;font-size: 18px;">Cauldron Consulting Limited</strong> </span><br/>
<span style="font-weight: bold;color:#1B207C;">Top Plaza<br/>Kindaruma Road off Ngong Road<br/>1st Floor,Suite 9.</span> 
<address style="font-weight: bold;color:#1B207C;">P.O. Box 37377-00100,<br/>Nairobi,Kenya.</address> 
<span style="font-weight: bold;color:#1B207C;">Email us: <a href="#" style="font-weight: bold;text-decoration: underline;">info@cauldronconsult.com</a></span><br/>
<span style="font-weight: bold;color:#1B207C;">Cell Phone:(+254)708086053</span><br/>
<span style="font-weight: bold;color:#1B207C;">Cell Phone:(+254)720423576</span><br/>
</div>
			
		</div>
	</div>
	
	
</div>

@endsection
@section('footer')
<div class="container-fluid" style="border-top:1px solid #AB6907; height:auto; color: #ffff;clear: both; background-color:#1B207C; position: absolute;width: 100%; ">
	<div class="container">
		<div class="row" style="text-align: center;">
			<div class="col-md-12" >
				<span>Cauldron Consulting Limited<br>Kindaruma Road off Ngong Road<br><address style="padding: 0;margin: 0;">P.O. Box 37377-00100,<br>Nairobi,Kenya.</address>&copy; Cauldron <?php echo date('Y');?> </span>

				 
			</div>
			
		</div>
	</div>
 
</div>
@endsection
