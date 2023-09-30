<?php
ob_start();
	//error_reporting(0);
	include("phpmailer/class.phpmailer.php");
	
	$send_mail_to='cascoindia@ymail.com';
	
	$websitename='Casco.co.in';
	$link='http://www.casco.co.in';
   $logolink='http://www.casco.co.in/image/logo.png';

if(isset($_POST['mail_query'])) {
	
	$package='';
		@$name = $_POST['name'];
		$emailid = $_POST['emailid'];
		$phone = $_POST['phone'];
		$mobile = $_POST['mobile'];
		$subject = $_POST['subject'];
		$city=$_POST['city'];
		$address=$_POST['address'];
		@$query=$_POST['query'];
		
		$packagerow='';
		if($package!='')
		$packagerow='
															<tr>
																<td class="scale-center-both" style="width:30%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline><b>State</b></singleline></td>
																<td class="scale-center-both" style="width:10%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline>:</singleline></td>
																<td class="scale-center-both" style="width:60%; font-size: 28px; color: #FE4B22; font-family: Gabriola,Geneva, Helvetica, Arial, sans-serif;"><singleline>'.$package.'</singleline></td>
															</tr>';
															
															
							
		
		$query = $_POST['query'];
 
			$message = '
			
<!DOCTYPE html>
<html><head>
<title>Enquiry from '.$websitename.'</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">    	

	body{
		width: 100%; 
		background-color: #fff; 
		margin:0; 
		padding:0; 
		-webkit-font-smoothing: antialiased;
	}
	html{
		width: 100%; 
	}
	table{
		font-size: 14px;
		border: 0;
	}
	

	@media only screen and (max-width:640px){
		table[class=scale] {
			width: 100% !important;
		}
		td[class=hide] {
			display: none!important;
			height: 0px!important;
		}
		img.reset {
			margin: 0 auto;
		}
		td.title {
			text-align: center;
		}
		td[class=scale-center-both] {
			width: 100%!important;
			text-align: center!important;
			padding-left: 20px!important;
			padding-right: 20px!important;
		}
	}
	@media only screen and (max-width:480px){
		table.scale-full {
			width: 90%;
			text-align: center;
		}
		.table-grids {
			width: 65%;
			margin: 0 auto !important;
			float: none;
		}
		
	}
	@media only screen and (max-width:414px){
		table.scale-full {
			width: 94%;
		}
		td.banner {
			height: 250px;
		}
		td.bnr-text {
			letter-spacing: 2px !important;
		}
		.table-grids {
			width: 75%;
		}
		table[class="table-full"] {
			text-align: center !important;
			float: none;
			margin: 0 auto;
		}
	}
	@media only screen and (max-width:375px){
		.table-grids {
			width: 82%;
		}
	}
	@media only screen and (max-width:320px){
		td.banner {
			height: 200px;
		}
		td.bnr-text {
			font-size: 18px !important;
			line-height: 31px !important;
		}
		.table-grids {
			width: 94%;
		}
	}
	
</style>  
</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
	<table align="center" bgcolor="#414a51" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<td class="hide" height="45"></td>
			</tr>
			<tr>
				<td style="border-top:5px solid #414a51;" align="center">
					<table class="scale" align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" width="600">
						<tbody>
							<tr>
								<td height="20"></td>
							</tr>
							<!--logo-->
							<tr>
								<td class="logo" style="line-height: 0px;" align="center">
									<a href="'.$link.'"><img style="display:inline-block; line-height:0px; font-size:0px; border:0px;" src="'.$logolink.'" alt="'.$logolink.'"></a></td>
							</tr>
							<!--end logo-->
							<tr>
								<td height="20"></td>
							</tr>
							<tr>
								<td style="border-top:1px solid #e1e1e1;" height="20"></td>
							</tr>
							
							<!--//banner-->
							<!--banner-bottom-->
							<tr>
								<td>
				
									<table class="scale-full" align="center" border="0" cellpadding="0" cellspacing="0" width="540">
										<tbody>
											<tr>
												<td>
													<!--left-->
													<table style="width:100%" class="table-grids" align="left" bgcolor="#0975B6" border="0" cellpadding="0" cellspacing="0" width="260">
														<tbody><tr>
															<td style="background-size:100% 100%; background-position: center; background-repeat:no-repeat" align="center" height="50">
																<table class="table-inner table-grids-text" style="padding:0.5em; border: 1px solid #fff;" align="center" border="0" cellpadding="0" cellspacing="0">
																	<tbody>
																		<tr>
																			<td style="font-family: Open Sans, Arial, sans-serif; font-weight: bold; color:#FFFFFF; font-size:20px;letter-spacing: 2px;" align="center">
																				<singleline label="Left Banner 1">Enquiry</singleline>
																			</td>
																		</tr>
																		
																	</tbody>
																</table>
															</td>
														</tr></tbody>
													</table>
													
												</td>
											</tr>
										</tbody>
									</table>
						
								</td>
							</tr>
							<!--//banner-bottom-->
							<tr>
								<td height="25"></td>
							</tr>

							<tr>
								<td style="border-top:1px solid #e1e1e1;" height="25"></td>
							</tr>
							<tr>
								<td align="center">
									<table class="scale" align="center" border="0" cellpadding="0" cellspacing="0" width="540">
										<tbody>

											<tr>
												<td>

													<table class="scale" align="right" border="0" cellpadding="0" cellspacing="0" width="500">
														<tbody>
															<tr>
																<td class="scale-center-both" style="width:30%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline><b>Name</b></singleline></td>
																<td class="scale-center-both" style="width:10%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline>:</singleline></td>
																<td class="scale-center-both" style="width:60%; font-size: 28px; color: #FE4B22; font-family: Gabriola,Geneva, Helvetica, Arial, sans-serif;"><singleline>'.$name.'</singleline></td>
															</tr>
															<tr>
																<td class="scale-center-both" style="width:30%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline><b>Email</b></singleline></td>
																<td class="scale-center-both" style="width:10%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline>:</singleline></td>
																<td class="scale-center-both" style="width:60%; font-size: 28px; color: #FE4B22; font-family: Gabriola,Geneva, Helvetica, Arial, sans-serif;"><singleline>'.$emailid.'</singleline></td>
															</tr>
															
															<tr>
																<td class="scale-center-both" style="width:30%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline><b>Subject</b></singleline></td>
																<td class="scale-center-both" style="width:10%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline>:</singleline></td>
																<td class="scale-center-both" style="width:60%; font-size: 28px; color: #FE4B22; font-family: Gabriola,Geneva, Helvetica, Arial, sans-serif;"><singleline>'.$subject.'</singleline></td>
															</tr>
															<tr>
																<td class="scale-center-both" style="width:30%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline><b>Phone</b></singleline></td>
																<td class="scale-center-both" style="width:10%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline>:</singleline></td>
																<td class="scale-center-both" style="width:60%; font-size: 28px; color: #FE4B22; font-family: Gabriola,Geneva, Helvetica, Arial, sans-serif;"><singleline>'.$phone.'</singleline></td>
															</tr>
															
															<tr>
																<td class="scale-center-both" style="width:30%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline><b>Mobile</b></singleline></td>
																<td class="scale-center-both" style="width:10%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline>:</singleline></td>
																<td class="scale-center-both" style="width:60%; font-size: 28px; color: #FE4B22; font-family: Gabriola,Geneva, Helvetica, Arial, sans-serif;"><singleline>'.$mobile.'</singleline></td>
															</tr>
															
															<tr>
																<td class="scale-center-both" style="width:30%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline><b>City</b></singleline></td>
																<td class="scale-center-both" style="width:10%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline>:</singleline></td>
																<td class="scale-center-both" style="width:60%; font-size: 28px; color: #FE4B22; font-family: Gabriola,Geneva, Helvetica, Arial, sans-serif;"><singleline>'.$city.'</singleline></td>
															</tr>
															
															<tr>
																<td class="scale-center-both" style="width:30%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline><b>Address</b></singleline></td>
																<td class="scale-center-both" style="width:10%; font-size: 25px; color: #BF222A; font-family: Gabriola,Comic Sans MS, Helvetica, Arial, sans-serif;"><singleline>:</singleline></td>
																<td class="scale-center-both" style="width:60%; font-size: 28px; color: #FE4B22; font-family: Gabriola,Geneva, Helvetica, Arial, sans-serif;"><singleline>'.$address.'</singleline></td>
															</tr>
															
															'.$packagerow.'
															
															
														</tbody>
													</table>	
												</td>
											</tr>
											<tr>
												<td style="font-size: 50px; color:#FE4B22; font-family: Gabriola, Helvetica, Arial, sans-serif; letter-spacing: 1px; line-height: 70px;" class="title" align="center"><singleline>Message</singleline></td>
											</tr>
											<tr>
												<td style="color: #999; font-size: 20px; font-family:Gabriola, Arial, sans-serif; line-height: 28px;" class="scale-center-both" align="center"><multiline>'.$query.'</multiline></td>
											</tr>
											<tr>
												<td height="40"></td>
											</tr>
											
											
										</tbody>
									</table>
								</td>
							</tr>
							<tr>
								<td height="25"></td>
							</tr>
							
							<tr>
								<td style="color: #999; font-size: 18px; font-family: Gabriola,Geneva, Arial, sans-serif; line-height: 28px;" class="scale-center-both"><center><multiline><a href="'.$_SERVER['HTTP_REFERER'].'">Refence Link</a></multiline></center></td>
							</tr>
							
							<tr>
								<td style="background-color:#3893A4;">
									<table class="scale-full" align="center" border="0" cellpadding="0" cellspacing="0" width="540">
										<tbody>
											<tr><td style="font-size: 1px;" height="12">&nbsp;</td></tr>
											<tr>
												<td colspan="2" style="font-family: "Open sans", Arial, sans-serif; font-size: 14px; color: #fff; line-height: 24px;" class="copy-right" height="35"><center>
													&copy; 2017 All rights reserved | Design by <a href="http://softinfotechnology.com" style="color:#fff; text-decoration:none;">SIT</a>     
												</center>
												</td>
											</tr>
											<tr><td style="font-size: 1px;" height="12">&nbsp;</td></tr>
										</tbody>
									</table>
								</td>
							</tr>

						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<td class="hide" height="45"></td>
			</tr>
		</tbody>
	</table>

</body></html>';
		
		
		
		
		//$newx='uploads/addtocart.png';
		$email_t = array($send_mail_to,"enquiry@b2benquiry.com");
					//Set who the message is to be sent from
					
					$mail = new PHPMailer();
					$mail->SetFrom($emailid,$name);
					$mail->Subject = 'Enquiry From Your '.$websitename;
					$mail->MsgHTML($message);
					$mail->AltBody = 'This is a plain-text message body';
					
				foreach($email_t as $key=>$index){
				$to = $email_t[$key]; // note the comma
			
					$mail->AddAddress($to);
					$mail->Send();
					$mail->ClearAllRecipients();
					}		
					?>
					
					<script type="text/javascript"> 
    alert("Thanks for submit your query \n We will get back to you within 24 hour");
	
    window.location = "./";

  	</script>
						<?php
					}
	ob_end_flush();
?>