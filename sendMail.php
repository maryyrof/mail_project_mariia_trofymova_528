<?php

$firstName = "Mariia";
$lastName = "Trofymova";
$group = "528";
$subject = "Test Email from PHP";

echo "First Name: " . $firstName . "<br>";
echo "Last Name: " . $lastName . "<br>";
echo "Group: " . $group . "<br>";
echo "Subject: " . $subject . "<br><br>";

$message = "First Name: " . $firstName . "\r\n";
$message .= "Last Name: " . $lastName . "\r\n";
$message .= "Group: " . $group . "\r\n";

$yourEmail = "masha.trofim.07@gmail.com";

$headers = "From: " . $yourEmail . "\r\n";
$headers .= "Reply-To: " . $yourEmail . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if(mail($yourEmail, $subject, $message, $headers)) {
    echo "Mail was sent!";
} else {
    echo "Mail sending failed!";
}

?>
