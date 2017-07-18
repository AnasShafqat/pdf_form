<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		Agriculture College Admission Form
	</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/js/bootstrap.min.js">
</head>

<body>

	<div class="panel panel-primary" style="width:80%;margin:30px auto;">
	
      <div class="panel-heading">
		<h1> IATI Admission Form</h1>
      </div>
      <div class="panel-body">
		<b>Terms And Conditions:</b>
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
</div>

<div class="form-style" id="contact_form">
    <div class="form-style-heading">Enter Correct Information</div>
    <div id="contact_results"></div>
    <form action="pdf_form.php" id="contact_body" method="post">
        <label for="session"><span>Session <span class="required">*</span></span>
            <input type="text" name="session" placeholder="2017-2019" data-required="true"/>
        </label>
		<label for="quotta"><span>Quotta <span class="required">*</span></span>
            <input type="text" name="quotta" placeholder="None" data-required="true"/>
        </label>
		<label for="fullname"><span>Full Name <span class="required">*</span></span>
            <input type="text" name="fullname" data-required="true"/>
        </label>
		<label for="f_name"><span>Father/Guardian Name <span class="required">*</span></span>
            <input type="text" name="f_name" data-required="true"/>
        </label>
		<label for="p_address"><span>Permanent Address <span class="required">*</span></span>
            <input type="text" name="p_address" data-required="true"/>
        </label>
		<label for="c_address"><span>Current Address <span class="required">*</span></span>
            <input type="text" name="c_address" data-required="true"/>
        </label>
		<label for="f_occupation"><span>Father/Guardian's Occupation <span class="required">*</span></span>
            <input type="text" name="f_occupation" data-required="true"/>
        </label>
		<label><span>Father/Guardian's Phone <span class="required">*</span></span>
            <input type="text" name="phone1" value="+92" data-required="true"/>&mdash;
            <input type="text" name="phone2" maxlength="15" data-required="true"/>
        </label>
		<label for="d_district"><span>Domicile District <span class="required">*</span></span>
            <input type="text" name="d_district" data-required="true"/>
        </label>
		<label for="dob"><span>Date of Birth <span class="required">*</span></span>
            <input type="text" name="dob" value="<?php echo date("d, M, 1990"); ?>" data-required="true" />
        </label>
		<label for="age"><span>Age Upto Application Recieved <span class="required">*</span></span>
            <input type="text" name="age" data-required="true"/>
        </label>
        <label for="email"><span>Email <span class="required">*</span></span>
            <input type="email" name="email" data-required="true"/>
        </label>
        <label for="n_o_copies"><span>Number of copies attached <span class="required">*</span></span>
            <input type="text" name="n_o_copies" data-required="true"/>
        </label>
        
		<label for="matric"><span>Matriculation <span class="required">*</span></span>
            <div style="width:100%">
			<table width="100%" border="1px" style="border-collapse:collapse">
				<tr>
					<th style="padding:10px">Institute</th>
					<th>Board</th>
					<th>Major Subject</th>
					<th>Obtained Marks</th>
					<th>Total Marks</th>
					<th>Grade</th>
				</tr>
				<tr >
					<td><input type="text" name="institute1" data-required="true" style="border:none"/>
					<td><input type="text" name="board1" data-required="true" style="border:none"/>
					<td>
						<select name="select" style="width:90px;border:none">
							<option name="select" value="Arts">Arts</option>
							<option name="select" value="Biology">Biology</option>
							<option name="select" value="Computer">Computer</option>
						</select>
					</td>
					<td><input type="text" name="obtain_marks1" data-required="true" style="width:80px;border:none"/>
					<td><input type="text" name="total_marks1" data-required="true" style="width:70px;border:none"/>
					<td><input type="text" name="grade1" data-required="true" style="width:70px;border:none"/>
				</tr>
			</table>
			</div>
		</label>
		<label for="a_edu"><span>Additional Education with Certificate <span class="required"></span></span>
            <table width="100%" border="1px" style="border-collapse:collapse">
				<tr>
					<th style="padding:10px">Institute</th>
					<th>Board</th>
					<th>Major Subject</th>
					<th>Obtained Marks</th>
					<th>Total Marks</th>
					<th>Grade</th>
				</tr>
				<tr >
					<td>
						<input type="text" name="institute2" data-required="true" style="border:none"/>
					<td>
						<input type="text" name="board2" data-required="true" style="border:none"/>
					<td>
						<select name="select2" data-required="true" style="width:90px;border:none">
							<option name="select" value="Arts">Arts</option>
							<option name="select" value="Biology">Biology</option>
							<option name="select" value="Computer">Computer</option>
						</select>
						
					</td>
					<td>
						<input type="text" name="obtain_marks2" data-required="true" style="width:80px;border:none"/>
					<td>
						<input type="text" name="total_marks2" data-required="true" style="width:70px;border:none"/>
					<td>
						<input type="text" name="grade2" data-required="true" style="width:70px;border:none"/>
				</tr>
			</table>
        </label>
		<button class="btn btn-primary btn-block" style="padding: 22px;" type="submit" value="submit" name="submit">Download Form with Bank Deposit Slip</button>
	</form>
</div>
</body>
</html>