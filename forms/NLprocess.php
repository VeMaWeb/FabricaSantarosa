<?php

// v2 MB 2020/03/23
 
// Hello! welcome to the settings page.
// Here's your two steps guide:

// FIRST: 
// Instead of newsletter@test.com put the email address of the mailing list,
// (the same that SendBlaster uses in Manage Subscriptions Section)
// ... please pay attention to the  ' ' apostrophes, they must remain around the email address.

$emailmanager = 'cotizacionesweb@santarosa.mx';

// SECOND:
// save this file, and close it. Thank you!


error_reporting(0);

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if ($email) {
	mail($emailmanager,'Subscribe','','From: '.$email);
	?>
<script language = 'javascript'>
	alert('Gracias, su dirección fue agregada a nuestra lista de correo');
	history.go(-1);
	</script>
<?php
} 
else {
	?>
<script language = 'javascript'>
	alert('Lo sentimos, proporcione una dirección de correo electrónico válida.');
	history.go(-1);
	</script>
<?php
}
exit();