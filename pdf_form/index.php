<!DOCTYPE html>
<html>
<head>
	<title>Instructions for Online Form</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/js/bootstrap.min.js">
	<style>
		li {
			font-size: 16px;
			padding: 12px;
		}
	</style>
</head>
<body>

<div class="panel panel-primary" style="width:50%;margin:30px auto;">
      <div class="panel-heading">
      	<b>Terms and Conditions / General Guidelines</b>
      </div>
      <div class="panel-body">
      	<ol>
		<li>
			The Student Administration Claims Committee may consider written requests for refunds due to exceptional circumstances and may increase the amount of refund provided beyond the above levels.
		</li>
		<li>
			Applications for exceptional circumstances must provide details and appropriate verifiable evidence of the circumstance and why a refund beyond the stated policy should apply.
		</li>
		<li>
			If after 30 days from receipt of an application you have not been notified of an outcome, or if you are unhappy with the decision, you may appeal to the Director.
		</li>
	</ol>

		<form action="admission_form.php" onsubmit="if(document.getElementById('agree').checked){return true;
			} 
			else { 
				alert('Kindly acknowledge that you have read all the given instructions before proceeding to the admission form, by clicking the check-box.'); 
			return false; 
		}">
		<div style="border: 0px solid black; margin-bottom: 10px;">
			<input type="checkbox" name="checkbox" value="check" id="agree" />
				I have read and agree to the Terms and Conditions and Privacy Policy
		</div>
		<div>
			<button class="btn btn-primary btn-block" style="padding: 10px;" type="submit" value="submit" class="btn btn-primary"><b>Proceed to the Form</b></button>
		</div>
		</form>

    </div>
</div>

</body>
</html>