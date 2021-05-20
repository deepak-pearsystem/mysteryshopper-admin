<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="description" content="RealHa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('img/fav.png') }}" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Forgot</title>
	
			<style>
     @media (max-width: 768px) {
      .top_bg{max-width: 100% !important; padding: 30px 0 !important;}
	  
	  .top_bg_2 {width:88% !important;}
	  .top_bg_3 {width: 75% !important;}
	  .top_bg_4 {width: 90% !important;}
	  .img_fl_m {width: 100% !important; margin-bottom:20px;}
	  .cont_araa {width: 100% !important;}
	  .cont_araa p {margin-left: 0 !important;}
	  .cont_araa p {padding-left: 0 !important;}
     }
    </style>
	
</head>

<body style="margin:0; font-family: 'Roboto', sans-serif;">
  <div style="max-width:100%; margin:0 auto; background:#f2f3f8; padding:30px" class="top_bg">
	
	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
            <tbody>
			 
			  
			  <tr>				
			   <td colspan="4">
				<div style="width:69%;margin:0 auto;"  class="top_bg_2">
				 <img src="{{ url('images/logo/logo.svg') }}" alt="" style="padding-bottom:22px;width:15%" />
				</div>
			   </td>				
              </tr>
			  
			  <tr>
                <td colspan="4">
				<div style="background:#fff; width:62%; margin:0 auto; padding:30px; border-radius:4px; box-shadow:0px 0px 6px #cccccc4f;" class="top_bg_3">	
					
				<h1 style="font-size:14px; font-weight:700; margin:0 0 15px 0; color: #3e3e46;">Welcome Covid Shield</h1>	
					
				  <h2 style="font-size:14px; font-weight:700; margin:0 0 15px 0; color: #3e3e46;">Dear {{ $data['name'] }},</h2>
                  <p style="font-size:16px; margin:0 0px 15px 0; color:#f8b837;font-weight: 400;">Forgot your password? It happens to the best of us.</p>

                  <p style="font-size:14px; margin:0 20px 25px 0; color:#3e3e46;">To reset your password, click the button below. The link will self-destruct after three days,</p>

                  
                  <p style=" margin:0 0 5px 0; display: inline-flex;">
				   <a href="{{ $data['reset_link'] }}" style="font-size:14px; background:#f8b837; color:#fff; font-weight:500;
                    padding:14px 21px; text-decoration:none;">Reset Your Password</a>
			      </p>
                 
				  
				  <p style="font-size:14px; margin:25px 0 3px 0; color:#3e3e46;">Warmest regards,</p>
				  
				  <p style="font-size:14px; margin:0 0 10px 0; color:#3e3e46;">Covid Shield Team</p>
				  
				 </div>
				 
				 
				 
				 <div style="width:68%;margin:0 auto; padding:20px 0" class="top_bg_4">
				  <p style="color: #9b99a5; font-size: 13px; margin-top: 0px; margin-bottom: 10px; letter-spacing: 0.1px;">This is an automated system email. Please do not reply to this email.</p>
				  <p style="font-size:14px; margin-top:0; color:#272727; letter-spacing: 0.1px;">  
					If you have any enquiries, please do not hesitate to reach out to us at 
					<a href="#" style="color:#3b73bf;">{{ env('FROM_EMAIL_CS') }}</a>
				  </p>
				 </div>
				</td>
              </tr> 
	
			</tbody>
	</table>		

    </div>
</body>

</html>