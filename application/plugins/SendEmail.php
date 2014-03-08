<?php

class SendEmail {

    public function send($from, $to, $subject, $message) {
        $headers = "Content-type: text/html; charset=UTF-8 " . "\r\n" .
                "From: $from" . "\r\n" .
                "Reply-To: $to" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

        mail($to, $subject, $message, $headers);
    }

    public function getForgotPasswordHtml($resetLink) {
        return '
            <html><head>
		<!-- E-mail title -->
		<title>Flirtbar</title>
	</head><body><table width="100%" height="100%"><tr><td width="100%" height="100%" style="background:url("http://linu-ks.com/flirt/public/img/pattern.jpg");"><table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="margin:20px auto;padding:0;min-height:100%;width:600px;"><tbody><tr><td align="center" valign="middle" style="margin:20px 0;height:47px;min-height:47px;"><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="left" valign="top" style="vertical-align: middle;"><table align="left" border="0" cellpadding="0" cellspacing="0" ><tbody><tr><td align="left" valign="top"><table align="left" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left" valign="top"><table align="left" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left" valign="center" style="color:#343433;font-family:Helvetica;font-size:13px;text-align:left;text-decoration:none;">	
		<!-- Logo img source -->
	</td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td align="center" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 600px;"><tbody><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="center" valign="top" style="line-height: 1.2 !important;padding-bottom: 30px;"><span style="height:15px;line-height:15px;display: block;"></span>
		<!-- Welcome img source -->
	
	<h1 style="display:block;padding-left: 30px;font-family:Tahoma;font-style:normal;;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:16px;text-align:left;font-weight:normal;color:#fff;font-weight:bold;text-decoration:none;padding-right: 30px;">
		<!-- Username -->
		<span style="font-weight:bold;text-align:center;width:100%;display: block;margin-bottom:30px;font-size:20px;">Dein neues Passwort</span>
		<span style="font-weight:normal;">Hey</span> graniti,<br/><br/>
	</h1>
		<!-- Text -->
		<span style="font-family:Tahoma;padding-left: 30px;padding-right: 30px;font-size:16px;color:#fff;text-align: left;display: block;">
			Wir haben dir ein neues Passwort generiert:
			<br><br>
			Link: ' . $resetLink . '
			<br><br>
			Mit diesen Daten kannst Dich hier einloggen: <a href="#" style="text-decoration:none;color:#fff;">http://flirtbar.net/login.php</a><br>
			und dein Passwort im Profil wieder ändern.
			<br><br>
			<span style="display:block;width:100%;border-bottom:1px solid #ddd;margin-bottom:20px;"></span>
			Mit freundlichen Grüßen, dein Team von<br>
			<a href="#" style="text-decoration:none;color:#fff;">flirtbar.net</a><br>
			Dies ist eine automatisch generierte Benachrichtigung.<br>
			Bitte nicht beantworten.</span>
	</span>
	
		<!-- Footer img source -->
	</td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></table></body></html>
';
    }

}
