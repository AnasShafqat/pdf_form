<?php 
	
	// Collect Form Data...
	if(!empty($_POST['submit'])) {
	
    $session 		= $_POST["session"];
    $quotta	 		= $_POST["quotta"];
    $fullname 		= $_POST["fullname"];
    $f_name			= $_POST["f_name"];
    $p_address 		= $_POST["p_address"];
    $c_address 		= $_POST["c_address"];
    $f_occupation 	= $_POST["f_occupation"];
	$phone1 		= $_POST["phone1"];
	$phone2 		= $_POST["phone2"];
	$phone  	    = $phone1.$phone2;
	$d_district 	= $_POST["d_district"];
	$dob 			= $_POST["dob"];
	$age 			= $_POST["age"];
	$email 			= $_POST["email"];
	$n_o_copies 	= $_POST["n_o_copies"];
	$institute1 	= $_POST["institute1"];
	$board1 		= $_POST["board1"];
	$select  		= $_POST["select"];	
	$obtain_marks1 	= $_POST["obtain_marks1"];
	$total_marks1 	= $_POST["total_marks1"];
	$grade1 		= $_POST["grade1"];
	$institute2 	= $_POST["institute2"];
	$board2 		= $_POST["board2"];
	$select2  		= $_POST["select2"];	
	$obtain_marks2 	= $_POST["obtain_marks2"];
	$total_marks2 	= $_POST["total_marks2"];
	$grade2 		= $_POST["grade2"];
	


	// PDF Conversion Start....
	require("fpdf.php");

	$pdf = new FPDF();
	// var_dump(get_class_methods($pdf));

	$pdf->AddPage();

	$pdf->SetFont("Arial","B","20");
	$pdf->Cell(0,14,"Inservice Agriculture Training Institute Rahim Yar Khan",1,1,"C");

	$pdf->SetFont("Arial","","13");

	$pdf->Cell(50,10,"Session :",0,0);
	$pdf->Cell(50,10,"$session",0,0);

	$pdf->Cell(50,10,"Qoutta :",0,0);
	$pdf->Cell(50,10,"$quotta",0,1);

	$pdf->Cell(50,10,"Full Name :",0,0);
	$pdf->Cell(50,10,"$fullname",0,0);

	$pdf->Cell(50,10,"Father Name :",0,0);
	$pdf->Cell(50,10,"$f_name",0,1);

	$pdf->Cell(50,10,"Permanent Address :",0,0);
	$pdf->Cell(0,10,"$p_address",0,1);

	$pdf->Cell(50,10,"Current Address :",0,0);
	$pdf->Cell(0,10,"$c_address",0,1);

	$pdf->Cell(50,10,"Father Occupation :",0,0);
	$pdf->Cell(0,10,"$f_occupation",0,1);

	$pdf->Cell(50,10,"Phone No :",0,0);
	$pdf->Cell(0,10,"$phone",0,1);

	$pdf->Cell(50,10,"Domicile District :",0,0);
	$pdf->Cell(0,10,"$d_district",0,1);

	$pdf->Cell(50,10,"Date of Birth :",0,0);
	$pdf->Cell(0,10,"$dob",0,1);

	$pdf->Cell(50,10,"Email :",0,0);
	$pdf->Cell(0,10,"$email",0,1);

	$pdf->Cell(50,10,"Number of Copies :",0,0);
	$pdf->Cell(0,10,"$n_o_copies",0,1);

	$pdf->Cell(50,10,"Age :",0,0);
	$pdf->Cell(0,10,"$age",0,1);

	$pdf->Cell(0,10,"Education",1,1,"C");

	$pdf->Cell(50,10,"Institute :",1,0);
	$pdf->Cell(0,10,"$institute1",1,1);

	$pdf->Cell(50,10,"Board :",1,0);
	$pdf->Cell(0,10,"$board1",1,1);

	$pdf->Cell(50,10,"Major Subject :",1,0);
	$pdf->Cell(0,10,"$select",1,1);

	$pdf->Cell(50,10,"Obtain Marks :",1,0);
	$pdf->Cell(0,10,"$obtain_marks1",1,1);

	$pdf->Cell(50,10,"Total Marks :",1,0);
	$pdf->Cell(0,10,"$total_marks1",1,1);

	$pdf->Cell(50,10,"Grades :",1,0);
	$pdf->Cell(0,10,"$grade1",1,1);

	$pdf->Cell(0,10,"Additional Education",1,1,"C");

	$pdf->Cell(50,10,"Institute :",1,0);
	$pdf->Cell(0,10,"$institute2",1,1);

	$pdf->Cell(50,10,"Board :",1,0);
	$pdf->Cell(0,10,"$board2",1,1);

	$pdf->Cell(50,10,"Major Subject :",1,0);
	$pdf->Cell(0,10,"$select2",1,1);

	$pdf->Cell(50,10,"Obtain Marks :",1,0);
	$pdf->Cell(0,10,"$obtain_marks2",1,1);

	$pdf->Cell(50,10,"Total Marks :",1,0);
	$pdf->Cell(0,10,"$total_marks2",1,1);

	$pdf->Cell(50,10,"Grades :",1,0);
	$pdf->Cell(0,10,"$grade2",1,1);


	// Form Data End...


	// Challan Form Start....

	// Student Copy Start....
	$pdf->SetFont("Arial","B","12");
	$pdf->Cell(0,5,"The Bank of Punjab (Student Copy)",1,1,"C");

	$pdf->SetFont("Arial","","10");
	$pdf->Cell(0,5,"7-ABU DHABI ROAD BRANCH,RAHIM YAR KHAN",1,1,"C");

	$pdf->Cell(0,4,"PH:068-9230197",1,1,"C");

	$pdf->SetFont("Arial","","9");
	$pdf->Cell(0,4,"                                                      Date:                                                             Chalan No:  ",1,1);

	$pdf->Cell(0,4,"Inservice Agriculture Training Institute,Rahim Yar Khan",1,1,"C");

	$pdf->Cell(0,4,"Name:  ",1,1);

	$pdf->Cell(0,4,"Father Name: ",1,1);

	$pdf->Cell(0,4,"Roll No:                                                  Class:  ", 1,1);

	$pdf->Cell(0,4,"Due Date:  ",1,1);

	$pdf->Cell(0,4,"For Admission Fee,2017",1,1,"C");

	$pdf->Cell(160,4,"Paticulars",1,0);
	$pdf->Cell(30,4,"Rs.",1,1,"C");

	$pdf->Cell(160,4,"Security Fund PLS-900076",1,0);
	$pdf->Cell(30,4,"2000",1,1,"C");

	$pdf->Cell(160,4,"Mosque Fund PLS-900077",1,0);
	$pdf->Cell(30,4,"600",1,1,"C");

	$pdf->Cell(160,4,"Students Welfare PLS-900078",1,0);
	$pdf->Cell(30,4,"700",1,1,"C");

	$pdf->Cell(160,4,"Electricity Charges,PLS-591-0",1,0);
	$pdf->Cell(30,4,"1200",1,1,"C");

	$pdf->Cell(160,4,"Sports Fund PLS-1950-5",1,0);
	$pdf->Cell(30,4,"700",1,1,"C");

	$pdf->Cell(160,4,"Magzine Fund PLS-1951-7",1,0);
	$pdf->Cell(30,4,"500",1,1,"C");

	$pdf->Cell(160,4,"Grand Total",1,0,"R");
	$pdf->Cell(30,4,"5700",1,1,"C");

	$pdf->Cell(0,4,"Received the above mentioned amount",0,1,"C");

	$pdf->Cell(0,4,"For the Bank of Punjab",0,1,"R");

	$pdf->Cell(0,4,"Class Incharge                                                   7-Abu Dhabi Road Rahim Yar Khan",0,1);

	$pdf->Cell(0,4,"",0,1);
	// Student Copy End....

	// College Copy Start....
	$pdf->SetFont("Arial","B","12");
	$pdf->Cell(0,5,"The Bank of Punjab (College Copy)",1,1,"C");

	$pdf->SetFont("Arial","","10");
	$pdf->Cell(0,5,"7-ABU DHABI ROAD BRANCH,RAHIM YAR KHAN",1,1,"C");

	$pdf->Cell(0,4,"PH:068-9230197",1,1,"C");

	$pdf->SetFont("Arial","","9");
	$pdf->Cell(0,4,"                                                      Date:                                                             Chalan No:  ",1,1);

	$pdf->Cell(0,4,"Inservice Agriculture Training Institute,Rahim Yar Khan",1,1,"C");

	$pdf->Cell(0,4,"Name:  ",1,1);

	$pdf->Cell(0,4,"Father Name: ",1,1);

	$pdf->Cell(0,4,"Roll No:                                                  Class:  ", 1,1);

	$pdf->Cell(0,4,"Due Date:  ",1,1);

	$pdf->Cell(0,4,"For Admission Fee,2017",1,1,"C");

	$pdf->Cell(160,4,"Paticulars",1,0);
	$pdf->Cell(30,4,"Rs.",1,1,"C");

	$pdf->Cell(160,4,"Security Fund PLS-900076",1,0);
	$pdf->Cell(30,4,"2000",1,1,"C");

	$pdf->Cell(160,4,"Mosque Fund PLS-900077",1,0);
	$pdf->Cell(30,4,"600",1,1,"C");

	$pdf->Cell(160,4,"Students Welfare PLS-900078",1,0);
	$pdf->Cell(30,4,"700",1,1,"C");

	$pdf->Cell(160,4,"Electricity Charges,PLS-591-0",1,0);
	$pdf->Cell(30,4,"1200",1,1,"C");

	$pdf->Cell(160,4,"Sports Fund PLS-1950-5",1,0);
	$pdf->Cell(30,4,"700",1,1,"C");

	$pdf->Cell(160,4,"Magzine Fund PLS-1951-7",1,0);
	$pdf->Cell(30,4,"500",1,1,"C");

	$pdf->Cell(160,4,"Grand Total",1,0,"R");
	$pdf->Cell(30,4,"5700",1,1,"C");

	$pdf->Cell(0,4,"Received the above mentioned amount",0,1,"C");

	$pdf->Cell(0,4,"For the Bank of Punjab",0,1,"R");

	$pdf->Cell(0,4,"Class Incharge                                                   7-Abu Dhabi Road Rahim Yar Khan",0,1);
	$pdf->Cell(0,4,"",0,1);
	// College Copy End....

	// Bank Copy Start....
	$pdf->SetFont("Arial","B","12");
	$pdf->Cell(0,5,"The Bank of Punjab (Bank Copy)",1,1,"C");

	$pdf->SetFont("Arial","","10");
	$pdf->Cell(0,5,"7-ABU DHABI ROAD BRANCH,RAHIM YAR KHAN",1,1,"C");

	$pdf->Cell(0,4,"PH:068-9230197",1,1,"C");

	$pdf->SetFont("Arial","","9");
	$pdf->Cell(0,4,"                                                      Date:                                                             Chalan No:  ",1,1);

	$pdf->Cell(0,4,"Inservice Agriculture Training Institute,Rahim Yar Khan",1,1,"C");

	$pdf->Cell(0,4,"Name:  ",1,1);

	$pdf->Cell(0,4,"Father Name: ",1,1);

	$pdf->Cell(0,4,"Roll No:                                                  Class:  ", 1,1);

	$pdf->Cell(0,4,"Due Date:  ",1,1);

	$pdf->Cell(0,4,"For Admission Fee,2017",1,1,"C");

	$pdf->Cell(160,4,"Paticulars",1,0);
	$pdf->Cell(30,4,"Rs.",1,1,"C");

	$pdf->Cell(160,4,"Security Fund PLS-900076",1,0);
	$pdf->Cell(30,4,"2000",1,1,"C");

	$pdf->Cell(160,4,"Mosque Fund PLS-900077",1,0);
	$pdf->Cell(30,4,"600",1,1,"C");

	$pdf->Cell(160,4,"Students Welfare PLS-900078",1,0);
	$pdf->Cell(30,4,"700",1,1,"C");

	$pdf->Cell(160,4,"Electricity Charges,PLS-591-0",1,0);
	$pdf->Cell(30,4,"1200",1,1,"C");

	$pdf->Cell(160,4,"Sports Fund PLS-1950-5",1,0);
	$pdf->Cell(30,4,"700",1,1,"C");

	$pdf->Cell(160,4,"Magzine Fund PLS-1951-7",1,0);
	$pdf->Cell(30,4,"500",1,1,"C");

	$pdf->Cell(160,4,"Grand Total",1,0,"R");
	$pdf->Cell(30,4,"5700",1,1,"C");

	$pdf->Cell(0,4,"Received the above mentioned amount",0,1,"C");

	$pdf->Cell(0,4,"For the Bank of Punjab",0,1,"R");

	$pdf->Cell(0,4,"Class Incharge                                                   7-Abu Dhabi Road Rahim Yar Khan",0,1);
	// Bank Copy End....

	$pdf->output();
}
?>