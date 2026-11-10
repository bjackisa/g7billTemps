<?
//////////////////////
//Start Header Section
//////////////////////
//Company Logo
$logostartpoint = 210 - LOGOWIDTH;
$logostartpoint = $logostartpoint / 2;
$pdf->Image($logo ,$logostartpoint,17,LOGOWIDTH);
//INVOICE title
$pdf->SetFont('Arial','B',18);
$pdf->Cell(0,5,STOCKINVOICETITLE,0,0,'C');
$pdf->Ln(4);
//Company Name
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,$companyname,0,0,'R');
$pdf->Ln(4);
//INVOICE Reference
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5, STOCKINVOICETITLE.' #'.$display_arr[ID],0,0,'L');
//Company Address 1
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5,$companyaddress1,0,0,'R');
$pdf->Ln(4);
//INVOICE date
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,INVDATE.' : '.$display_arr[InvoiceDate],0,0,'L');
//Company Address2 / City
if ($companyaddress2 != "" ){
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,$companyaddress2,0,0,'R');
}else{
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,$companycity.', '.$companystate.' '.$companyzip,0,0,'R');
}
$pdf->Ln(4);
//INVOICE Due date
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,INVDUEDATE.' : '.$display_arr[DateDue],0,0,'L');
//Company City / State
if ($companyaddress2 != "" ){
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,$companycity.', '.$companystate.' '.$companyzip,0,0,'R');
}else{
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,$companycountry,0,0,'R');
}
$pdf->Ln(4);
//VAT Number
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,TXTVATNUM,0,0,'L');
//Company State / Zip
if ($companyaddress2 != "" ){
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,$companycountry,0,0,'R');
}
$pdf->Ln(4);
//Blank (Left)
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5, '',0,0,'L');

$pdf->Ln(4);
//Blank (Left)
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5, '',0,0,'L');

$pdf->Ln(4);
//Draw Line
$pdf->SetLineWidth(0.5);
$pdf->Line(0, 45, 250, 45);
$pdf->Ln(10);
////////////////////
//End Header Section
////////////////////
/////////////////////////
//Start Client/Order Infomation
/////////////////////////
if (empty(Vars::Extended("invoice_hide_name",$userstats[ownerid]))) {
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5, $userstats[fname].' '.$userstats[lname],0,0,CINFOALIGN);
}

$pdf->SetFont('Arial','BU',10);
$pdf->Cell(0,5, ORDERINFO,0,0,OINFOALIGN);
$pdf->Ln(4);

$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5, $userstats[org],0,0,CINFOALIGN);

$pdf->SetFont('Arial','',10);
$pdf->Cell(0,10, INVSUBTOTAL.': '.$display_arr[SubTotal],0,0,OINFOALIGN);
$pdf->Ln(4);

$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5, $userstats[add1].' '.$userstats[add2],0,0,CINFOALIGN);
$pdf->Cell(0,10, INVTAX.': '.$display_arr[AmountTax],0,0,OINFOALIGN);
$pdf->Ln(4);

$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5, $userstats[city],0,0,CINFOALIGN);

$pdf->Cell(0,10, TXTTAXRATE.': '.TAXRATE,0,0,OINFOALIGN);
$pdf->Ln(4);


$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5, $userstats[strStateValue].', '.$userstats[zip],0,0,CINFOALIGN);
$pdf->Cell(0,10, INVTOTAL.': '.$display_arr[AmountDue],0,0,OINFOALIGN);
$pdf->Ln(4);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5, $userstats[country],0,0,CINFOALIGN);
$pdf->Cell(0,10, INVPAID.': '.$display_arr[AmountPaid],0,0,OINFOALIGN);
$pdf->Ln(4);
if($userstats[phone] !=''){
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5, $userstats[phone],0,0,CINFOALIGN);
}

$pdf->SetFont('Arial','B',10);

$pdf->Cell(0,10, TXTAMOUNTDUE.' : '.$display_arr[Balance],0,0,OINFOALIGN);
$pdf->Ln(4);

$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5, $userstats[email],0,0,CINFOALIGN);
$pdf->SetFont('Arial','',10);
if($display_arr[DatePaid]==""){
	$display_arr[DatePaid]="NA";
}
$pdf->Ln(4);
$pdf->Cell(0,10, INVLASTPAY.': '.$display_arr[DatePaid],0,0,OINFOALIGN);

$pdf->Ln(4);
if($display_arr[AuthCode]==""){
	$display_arr[AuthCode]="NA";
}
if($display_arr[PayType]==""){
	$display_arr[PayType]="NA";
}
$pdf->Cell(0,10, INVAUTH.': '.$display_arr[AuthCode],0,0,OINFOALIGN);
$pdf->Ln(4);
$pdf->Cell(0,10, INVORDERID.': '.$display_arr[OrderID],0,0,OINFOALIGN);
$pdf->Ln(4);
$pdf->Cell(0,10, INVPAYTYPE.': '.$display_arr[PayType],0,0,OINFOALIGN);
$pdf->Ln(10);

///////////////////////
//End Client/Order Infomation
///////////////////////

///////////////////////
//Start Invoice Items
///////////////////////
$pdf->SetFont('Arial','BU',14);
$pdf->Cell(0,10, INVORDERDESC,0,0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Ln(8);
$ddata=false;
$ddata=array();
reset($ddata);
$head=0;
for($x=0; $x < count($invoicearr); $x++){
	$ID=$invoicearr[$x]['id'];
	$date=$invoicearr[$x]['invoice_date'];
	$amount=$invoicearr[$x]['amount'];
	$description=$invoicearr[$x]['description'];
	if($ID!=''){
		if($head == 0){
			$dheader=array('','',VAMOUNT,VDESCRIPTION);
			$head++;
		}
		$ddata[]=array('','',$amount,$description);
	}
}
$pdf->DetailTable($dheader,$ddata, ORDERLEGEND);
$pdf->Ln(4);
///////////////////////
//End Invoice Items
///////////////////////

///////////////////////
//Start Transaction Items
///////////////////////
$head=0;
$ddata=false;
$ddata=array();
reset($ddata);
for($x=0; $x < count($transactionarr); $x++){
	$ID=$transactionarr[$x]['id'];
	$date=$transactionarr[$x]['date'];
	$amount=$transactionarr[$x]['amount'];
	$description=$transactionarr[$x]['description'];
	if($ID!=''){
		if($head == 0){
			$pdf->SetFont('Arial','BU',14);
			$pdf->Cell(0,10, INVPAYHIST,0,0,'C');
			$pdf->SetFont('Arial','',10);
			$pdf->Ln(8);
			$dheader=array(VID,VDATE,VAMOUNT,VDESCRIPTION);
			$head++;
		}
		$ddata[]=array($ID,$date,$amount,$description);
	}
}
if($x > 0){
	$pdf->DetailTable($dheader,$ddata, '');
	$pdf->Ln(4);
}
///////////////////////
//End Transaction Items
///////////////////////
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,10, INVBLURB,0,0,'C');
$pdf->Ln(10);

$pdf->Cell(0,10, THANKYOU,0,0,'C');
$pdf->Ln(10);
?>