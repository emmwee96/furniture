<!-- This line is an example of comment -->
<!-- Comment is just a text to tell you what to do -->
<!-- Remove all these kind of comment by just deleting it, when you finish editing the file, comment will still consume a space and makes your email large -->
<html>
	<head>
		<!-- Please don't link any outside file in the html, try to view your html OFFLINE, if you can view it, then that means it is email compatible, or else, your user won't be able to see the html if they have anti-virus installed, or the email client blocked it, because image attachment is a way to embed virus due to the external link are not known, and can skip mail provider virus scan -->
		<!-- When I say don't link, I mean all kind of file, including jQuery, bootstrap, stylesheet, whatever, use plain HTML/CSS code, and no javascript allowed. -->
	</head>
	<body style="margin: 0; padding: 0;">
		<center>Your order is placed</center><br />
		<div style="width: 100%; margin: auto; max-width: 600px; background-color: #52acef;">
			<br />
			<div style="width: 90%; margin: auto; text-align:center; background-color: white;">
				<!-- Please don't link any outside file in the html, try to view your html OFFLINE, if you can view it, then that means it is email compatible, or else, your user won't be able to see the html if they have anti-virus installed, or the email client blocked it, because image attachment is a way to embed virus due to the external link are not known, and can skip mail provider virus scan -->
				<!-- Use a small picture if possible -->
				<!-- Generate the following image code using: https://www.base64-image.de/ -->
				<h1>LOGO</h1>
			</div>
			<br />
			<div style="width: 90%; margin: auto; background-color: white;">
				<!--Replace with the following words: -->
				<!--"<?php echo $name; ?>" for Facebook name -->
				<!--"<?php echo $date; ?>" for date -->
				<!--Keep the line after the last line, don't delete -->
				<div style="width: 90%; margin: auto; white-space: pre-line;">
					<br>
					<br>
					Dear <?php echo $name; ?> <br>
					<br>
                    Your order has been placed. <br>
                    Please click <a href="<?= site_url('Main/myInvoice/'.$order_id); ?>">here</a> for your invoice.
					<br>
					Warmest regards,<br>
					Custom Furnitures.


					<br>
				</div>
			</div>
			<br />
			<!--Replace all image source below with the above mentioned method, I lazy to demo -->
			<table style="width: 90%; margin: auto; text-align: center;">
				<tr>
					
					<td>
						<a href="">
							<img src="http://commonextract.com/edm-test/facebook.png" style="max-width: 80%;" />
						</a>
					</td>
					
				</tr>
			</table>
			<br />
			<!--Keep the line after the last line, don't delete -->
			<div style="width: 90%; margin: auto; text-align: center; white-space: pre-line; color: white;">
				
			</div>
		</div>
	</body>
</html>