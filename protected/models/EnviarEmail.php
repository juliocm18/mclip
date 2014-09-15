<?php
Yii::import('application.extensions.phpmailer.JPhpMailer');

class EnviarEmail
{
	public function enviar(array $from, array $to, $subject, $message)
	{
		$mail = new JPhpMailer;
		$mail->IsSMTP();
		$mail->Host = 'xeon.soluhost.net'; 
		$mail->SMTPAuth = true; 
		$mail->SMTPSecure = "ssl"; 
		$mail->Username = 'info@medicclip.com'; 
		$mail->Port = '465'; 
		$mail->Password = 'info123'; 
		$mail->SetFrom($from[0],$from[1]);
		$mail->Subject=$subject;
		$mail->MsgHTML($message);
		$mail->AddAddress($to[0],$to[1]);
		$mail->send();
	}
}

?>
