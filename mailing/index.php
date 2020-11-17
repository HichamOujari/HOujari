<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
    $userr=addslashes($_POST['from']);
    $email=addslashes($_POST['to']);

    $content='<hr><p style="margin-left:30px;">'.$userr.'</p><p style="font-family: Sansita Swashed, cursive;">'.addslashes($_POST['msg']).'</p>';

    $btn='<td> <a style="background:#626E6C; border:1px solid #626E6C;" href="http://dev-houjari.rf.gd" target="_blank">Visit Our Website</a> </td><hr>';
		
		$output='<!doctype html>
					<html>
						<head>
						    <meta name="viewport" content="width=device-width" />
						    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
						    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
						    <style>
						    	/* -------------------------------------
									    GLOBAL RESETS
									------------------------------------- */

									/*All the styling goes here*/
									img {
									  border: none;
									  -ms-interpolation-mode: bicubic;
									  max-width: 100%; 
									}

									

									

									/* -------------------------------------
									    BODY & CONTAINER
									------------------------------------- */

									.body {
									  width: 100%; 
									}

									/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
									.container {
									  display: block;
									  Margin: 0 auto !important;
									  /* makes it centered */
									  max-width: 580px;
									  padding: 10px;
									  width: 580px; 
									}

									/* This should also be a block element, so that it will fill 100% of the .container */
									.content {
									  box-sizing: border-box;
									  display: block;
									  Margin: 0 auto;
									  max-width: 580px;
									  padding: 10px; 
									}

									/* -------------------------------------
									    HEADER, FOOTER, MAIN
									------------------------------------- */
									.main {
									  background: #ffffff;
									  border-radius: 3px;
									  width: 100%; 
									}

									.header {
									  padding: 20px 0;
									}

									.wrapper {
									  box-sizing: border-box;
									  padding: 20px; 
									}

									.content-block {
									  padding-bottom: 10px;
									  padding-top: 10px;
									}

									.footer {
									  clear: both;
									  Margin-top: 10px;
									  text-align: center;
									  width: 100%; 
									}
									  .footer td,
									  .footer p,
									  .footer span,
									  .footer a {
									    color: #9a9ea6;
									    font-size: 12px;
									    text-align: center; 
									}

									/* -------------------------------------
									    TYPOGRAPHY
									------------------------------------- */
									h1,
									h2,
									h3,
									h4 {
									  color: #06090f;
									  font-family: sans-serif;
									  font-weight: 400;
									  line-height: 1.4;
									  margin: 0;
									  margin-bottom: 30px; 
									}

									h1 {
									  font-size: 35px;
									  font-weight: 300;
									  text-align: center;
									  text-transform: capitalize; 
									}

									p,
									ul,
									ol {
									  font-family: sans-serif;
									  font-size: 14px;
									  font-weight: normal;
									  margin: 0;
									  margin-bottom: 15px; 
									}
									  p li,
									  ul li,
									  ol li {
									    list-style-position: inside;
									    margin-left: 5px; 
									}

									a {
									  color: #ec0867;
									  text-decoration: underline; 
									}

									/* -------------------------------------
									    BUTTONS
									------------------------------------- */
									.btn {
									  box-sizing: border-box;
									  width: 100%; }
									  .btn > tbody > tr > td {
									    padding-bottom: 15px; }
									  .btn table {
									    min-width: auto;
									    width: auto; 
									}
									  .btn table td {
									    background-color: #ffffff;
									    border-radius: 5px;
									    text-align: center; 
									}
									  .btn a {
									    background-color: #ffffff;
									    border: solid 1px #ec0867;
									    border-radius: 5px;
									    box-sizing: border-box;
									    color: #ec0867;
									    cursor: pointer;
									    display: inline-block;
									    font-size: 14px;
									    font-weight: bold;
									    margin: 0;
									    padding: 12px 25px;
									    text-decoration: none;
									    text-transform: capitalize; 
									}

									.btn-primary table td {
									  background-color: #ec0867; 
									}

									.btn-primary a {
									  background-color: #ec0867;
									  border-color: #ec0867;
									  color: #ffffff; 
									}

									/* -------------------------------------
									    OTHER STYLES THAT MIGHT BE USEFUL
									------------------------------------- */
									.last {
									  margin-bottom: 0; 
									}

									.first {
									  margin-top: 0; 
									}

									.align-center {
									  text-align: center; 
									}

									.align-right {
									  text-align: right; 
									}

									.align-left {
									  text-align: left; 
									}

									.clear {
									  clear: both; 
									}

									.mt0 {
									  margin-top: 0; 
									}

									.mb0 {
									  margin-bottom: 0; 
									}

									.preheader {
									  color: transparent;
									  display: none;
									  height: 0;
									  max-height: 0;
									  max-width: 0;
									  opacity: 0;
									  overflow: hidden;
									  mso-hide: all;
									  visibility: hidden;
									  width: 0; 
									}

									.powered-by a {
									  text-decoration: none; 
									}

									hr {
									  border: 0;
									  border-bottom: 1px solid #f6f6f6;
									  Margin: 20px 0; 
									}

									/* -------------------------------------
									    RESPONSIVE AND MOBILE FRIENDLY STYLES
									------------------------------------- */
									@media only screen and (max-width: 620px) {
									  table[class=body] h1 {
									    font-size: 28px !important;
									    margin-bottom: 10px !important; 
									  }
									  table[class=body] p,
									  table[class=body] ul,
									  table[class=body] ol,
									  table[class=body] td,
									  table[class=body] span,
									  table[class=body] a {
									    font-size: 16px !important; 
									  }
									  table[class=body] .wrapper,
									  table[class=body] .article {
									    padding: 10px !important; 
									  }
									  table[class=body] .content {
									    padding: 0 !important; 
									  }
									  table[class=body] .container {
									    padding: 0 !important;
									    width: 100% !important; 
									  }
									  table[class=body] .main {
									    border-left-width: 0 !important;
									    border-radius: 0 !important;
									    border-right-width: 0 !important; 
									  }
									  table[class=body] .btn table {
									    width: 100% !important; 
									  }
									  table[class=body] .btn a {
									    width: 100% !important; 
									  }
									  table[class=body] .img-responsive {
									    height: auto !important;
									    max-width: 100% !important;
									    width: auto !important; 
									  }
									}

									/* -------------------------------------
									    PRESERVE THESE STYLES IN THE HEAD
									------------------------------------- */
									@media all {
									  .ExternalClass {
									    width: 100%; 
									  }
									  .ExternalClass,
									  .ExternalClass p,
									  .ExternalClass span,
									  .ExternalClass font,
									  .ExternalClass td,
									  .ExternalClass div {
									    line-height: 100%; 
									  }
									  .apple-link a {
									    color: inherit !important;
									    font-family: inherit !important;
									    font-size: inherit !important;
									    font-weight: inherit !important;
									    line-height: inherit !important;
									    text-decoration: none !important; 
									  }
									  .btn-primary table td:hover {
									  	align-center:center;
									    background-color: #626E6C !important; 
									  }
									  .btn-primary a:hover {
									    background-color: #626E6C !important;
									    border-color: #626E6C !important; 
									  } 
									}
						    </style>
						</head>
					  <body><center>
					    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
					      <tr>
					        <td>&nbsp;</td>
					        <td class="container">
					          <div class="header">
					            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
					              <tr>
					                <td class="align-center" width="100%">
					                  <a href="http://dev-houjari.rf.gd"><img src="http://yasmina.emi.ac.ma/~houjari/logo.png" height="70" alt="Hicham Oujari"></a>
					                </td>
					              </tr>
					            </table>
					          </div>
					          <div class="content">
					            <table role="presentation" class="main">

					              <!-- START MAIN CONTENT AREA -->
					              <tr>
					                <td class="wrapper">
					                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
					                    <tr>
					                      <td>
					                      '.$content.'<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
					                          <tbody>
					                            <tr><br>
					                              <td align="center">
					                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
					                                  <tbody>
					                                    <tr>
					                                      '.$btn.'
					                                    </tr>
					                                  </tbody>
					                                </table>
					                              </td>
					                            </tr>
					                          </tbody>
					                        </table>
					                      </td>
					                    </tr>
					                  </table>
					                </td>
					              </tr>

					            <!-- END MAIN CONTENT AREA -->
					            </table>

					          <!-- END CENTERED WHITE CONTAINER -->
					          </div>
					        </td>
					        <td>&nbsp;</td>
					      </tr>
					    </table>
					  </center></body>
					</html>';
		
		//sighature
			$output.='<HTML>
							<HEAD><TITLE>Email Signature</TITLE>
							<META content="text/html; charset=utf-8" http-equiv="Content-Type">
							</HEAD>
							<BODY style="font-size: 10pt; font-family: Arial, sans-serif;"><center>

							<table width="480" style="font-size: 11pt; font-family: Arial, sans-serif;" cellpadding="0" cellspacing="0" border="0">
							<tbody>
							 <tr>
							  
							  <td width="160" style="font-size: 10pt; font-family: Arial, sans-serif; width: 160px; vertical-align: top;" valign="top">	<a href="https://www.dev-houjari.rf.gd/" target="_blank"><img border="0" alt="Logo" width="125" style="width:125px; height:auto; border:0;" src="https://instagram.frba2-2.fna.fbcdn.net/v/t51.2885-19/s150x150/117592628_304157847331121_4081576896802114529_n.jpg?_nc_ht=instagram.frba2-2.fna.fbcdn.net&amp;_nc_ohc=V3smmLHKV_YAX9MLPqK&amp;oh=1a8fb8f6da410923157dc7999c26eab3&amp;oe=5FA2E8F2"></a>	   
							  </td>
							    
							 
							 
							 <td valign="top" width="270" style="width:270px; vertical-align: top; line-height:11px; border-right:2px solid #29abe1"><table cellpadding="0" cellspacing="0" border="0" width="270"><tbody>	<tr>		<td style="font-size:12pt; height:14px; line-height:14px"><strong style="font-family: Arial, sans-serif;font-size: 12pt;color:#29abe1;">Hicham oujari</strong></td>	</tr>	<tr>		<td style="font-size:9pt; height:14px; line-height:14px">			<span style="font-family: Arial, sans-serif; font-size:9pt; color:#000000;">FullStack Developer &amp; a Student at EMI</span>			<span style="font-family: Arial, sans-serif; font-size:9pt; color:#000000;"> | HOujari</span>					</td>	</tr>	<tr>		<td style="height:14px; line-height:14px">&nbsp;</td>	</tr>	<tr>		<td style="font-size:9pt; height:14px; line-height:14px">			<span style="font-family: Arial, sans-serif;color:#000000;FONT-SIZE: 9pt"><strong>M</strong> (+212) 677-926-116</span>								</td>	</tr>	<tr>		<td style="font-size:9pt; height:12px; line-height:12px">			<span style="font-family: Arial, sans-serif;color:#000000;FONT-SIZE: 9pt"><strong>E</strong>  hichamoujari99@gmail.com</span>				</td>	</tr>		<tr>		<td style="height:14px; line-height:14px">&nbsp;</td>	</tr>			<tr>		<td style="font-size:9pt; height:12px; line-height:12px">			<span style="font-family: Arial, sans-serif;color:#000000;FONT-SIZE: 9pt">14 Rue N8 Douar Haj Driss Meknes, Maroc, </span>				</td>	</tr>			<tr>		<td style="font-size:9pt; height:12px; line-height:12px">			<span><a href="http://www.dev-houjari.rf.gd" target="_blank" rel="noopener" style=" text-decoration:none;"><strong style="color:#29abe1; font-family:Arial, sans-serif; font-size:9pt">www.dev-houjari.rf.gd</strong></a></span>				</td>	</tr>	</tbody><tbody>		</tbody></table>
									

							  </td>
							  
							  <td style="vertical-align: top; padding-left:10px" valign="top" width="35">		<table cellpadding="0" cellspacing="0" border="0" width="25">		<tbody><tr>			<td width="25" height="30" valign="top" style="vertical-align: top;"><a href="https://www.facebook.com/hicham.oj.3745" target="_blank" rel="noopener"><img border="0" width="26" height="25" alt="facebook icon" style="border:0; height:25px; width:26px;" src="https://codetwocdn.azureedge.net/images/mail-signatures/generator-dm/hexagonal-logo/fb.png"></a></td>		</tr>				<tr>			<td width="25" height="30" valign="top" style="vertical-align: top;"><a href="https://www.youtube.com/mrho77" target="_blank" rel="noopener"><img border="0" width="26" height="25" alt="youtube icon" style="border:0; height:25px; width:26px" src="https://codetwocdn.azureedge.net/images/mail-signatures/generator-dm/hexagonal-logo/yt.png"></a></td>		</tr>				</tbody></table>

							  </td>
							  
							  <td style="vertical-align: top;" valign="top" width="25">
							  	<table cellpadding="0" cellspacing="0" border="0" width="25">			<tbody><tr><td style="height:12px; font-size:1px" height="12">&nbsp;</td></tr>		<tr>			<td width="25" height="30" valign="top" style="vertical-align: top;"><a href="https://www.linkedin.com/in/hicham-oujari-8b1322196/" target="_blank" rel="noopener"><img border="0" width="26" height="25" alt="linkedin icon" style="border:0; height:25px; width:26px;" src="https://codetwocdn.azureedge.net/images/mail-signatures/generator-dm/hexagonal-logo/ln.png"></a></td>		</tr>		<tr>			<td width="25" height="30" valign="top" style="vertical-align: top;"><a href="https://www.instagram.com/hicham.oj.7/" target="_blank" rel="noopener"><img border="0" width="26" height="25" alt="instagram icon" style="border:0; height:25px; width:26px;" src="https://codetwocdn.azureedge.net/images/mail-signatures/generator-dm/hexagonal-logo/it.png"></a></td>		</tr>						</tbody></table>
							 
							  </td>
							    
							 </tr> 
							 
							 <tr>
							  </tr>
							  
							 <tr><td colspan="4" style="padding-top:15px; line-height:14px; font-size: 7.5pt; color: #808080; font-family: Arial, sans-serif;">This message has been sent as a part of discussion between [Sender’s name] and the addressee whose name is specified above. Should you receive this message by mistake, we would be most grateful if you informed us that the message has been sent to you. In this case, we also ask that you delete this message from your mailbox, and do not forward it or any part of it to anyone else. Thank you for your cooperation and understanding.</td>
							  </tr>
							</tbody>
							</table>

							</center></BODY>
						</HTML>
						';
		//sighature


		$body = $output; 
		$subject = "MaiL - Oujari Hicham";
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Mailer = "smtp";
		$mail->SMTPDebug  = 0;  
		$mail->SMTPAuth   = TRUE;
		$mail->SMTPSecure = "tls";
		$mail->Port       = 587;
		$mail->Host       = "smtp.gmail.com";
		$mail->Username   = "hichamtrt70001@gmail.com";
		$mail->Password   = "Hicham1237*@";
		$mail->IsHTML(true);
		$mail->AddAddress($email, "recipient-name");
		$mail->SetFrom("Hichamoujari@dev-houjari.rf.gd", "dev-Houjari");
		$mail->AddReplyTo("hichamoujari99@gmail.com", "dev-Houjari");
		$mail->AddCC($email, "cc-recipient-name");
		$mail->Subject = $subject;
		$mail->MsgHTML($body); 
		$mail->Send();
		header('Location: ../index.php');
?>