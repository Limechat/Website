<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);





// Building message



$MESSAGE_BODY='<table style=" background:#F4F4F4 ; text-align : center">
        
        <tr>
                <th colspan="2" style="padding:10px;">
                        <b>Contact Details</b>
                </th>
        </tr>
        <tr>
                <td style="padding:10px;">
                        <b>First Name:</b>
                </td>
                <td style="padding:10px;">' . $_POST["f_name"] . '</td>
        </tr>

        <tr>
                <td style="padding:10px;">
                        <b>Last Name:</b>
                </td>
                <td style="padding:10px;">' . $_POST["l_name"] . '</td>
        </tr>

        
        <tr>
                <td style="padding:10px;">
                        <b>E-mail:</b>
                </td>
                <td style="padding:10px;">' . $_POST["email"] . '</td>
        </tr>
        <tr>
                <td style="padding:10px;">
                        <b>Contact:</b>
                </td>
                <td style="padding:10px;">' . $_POST["phone"] . '</td>
        </tr>


        <tr>
                <td style="padding:10px;">
                        <b>Country:</b>
                </td>
                <td style="padding:10px;">' . $_POST["country"] . '</td>
        </tr>
        <tr>
                <td style="padding:10px;">
                        <b>Company:</b>
                </td>
                <td style="padding:10px;">' . $_POST["company"] . '</td>
        </tr>

        <tr>
                <td style="padding:10px;">
                        <b>Designation:</b>
                </td>
                <td style="padding:10px;">' . $_POST["designation"] . '</td>
        </tr>
        
        <tr>
                <td style="padding:10px;">
                        <b>Message:</b>
                </td>
                <td style="padding:10px;">' . $_POST["message"] . '</td>
        </tr>
</table>';


// End building message





try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = getenv("USERNAME");                     // SMTP username
    $mail->Password   = getenv("Password");                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('admin@limechat.ai', 'Limechat AI');
    $mail->addAddress('pandeyvishal64742@gmail.com', 'Vishal Pandey');     // Add a recipient
    $mail->addReplyTo('contact@limechat.ai', 'Limechat AI');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Get Demo Form Submit';
    $mail->Body    = $MESSAGE_BODY;
    $mail->AltBody = 'HTML MESSAGE IS NOT SUPPORT PLEASE CHECK';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<script type="text/javascript">
    window.location.href = '/'
</script>