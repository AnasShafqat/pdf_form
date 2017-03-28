<!DOCTYPE html>
<html>
<head>
	<title>Instructions of Online Form</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/js/bootstrap.min.js">
</head>
<body>

<div class="panel panel-primary" style="width:80%;margin:30px auto;">
      <div class="panel-heading">
      	Terms And Conditions
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

		<form action="index.php" onsubmit="if(document.getElementById('agree').checked){return true;
			} 
			else { 
				alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); 
			return false; 
		}">
		<input type="checkbox" name="checkbox" value="check" id="agree" />
			I have read and agree to the Terms and Conditions and Privacy Policy
		<button type="submit" value="submit" class="btn btn-primary">Submit</button>

		</form>

    </div>
</div>

</body>
</html>