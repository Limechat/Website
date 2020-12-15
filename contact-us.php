---
layout: page
---
      <!--=================================
         Banner -->
      <div class="breadcrumbs">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6 col-sm-12">
                  <h1 class="title">Get Demo</h1>
               </div>
               <div class="col-md-6 col-sm-12 text-right">
                  <ul>
                     <li class="d-inline"><a href="index.html">Home</a></li>
                     <li class="d-inline active">Get Demo</li>
                  </ul>
               </div>
            </div>
         </div>
         <img class="img-fluid breadcrumbs-after" src="images/banner/banner-after.png" alt="image">
      </div>
      <!--=================================
         Banner -->
      <!--=================================
         MAIN CONTENT -->
      <div class="main-content">
         <!--=================================
            Contact -->
         <section class="iq-contactbox">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="contact-box">
                        <h3>Get in Touch</h3>
                        <form class="p-0" id="contact" method="POST">
                           <div class="contact-form mt-4">
                              <div class="row">
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">First Name *</label>
                                       <input type="text" name="f_name"  class="form-control" id="name" placeholder="First Name" required="true">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Last Name</label>
                                       <input type="text" name="l_name"  class="form-control" id="name" placeholder="Last Name">
                                    </div>
                                 </div>
                                 
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Email *</label>
                                       <input type="text" name="email" class="form-control" id="email" placeholder="Your Email" required="true">
                                    </div>
                                 </div>

                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Phone Number</label>
                                       <input type="text" name="phone" class="form-control" id="email" placeholder="Phone Number">
                                    </div>
                                 </div>

                                 
                                 <div class="col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Country</label>
                                       <input type="text" name="country" class="form-control" id="phone" placeholder="Country">
                                    </div>
                                 </div>

                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Company</label>
                                       <input type="text" name="company" class="form-control" id="phone" placeholder="Company">
                                    </div>
                                 </div>

                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Designation</label>
                                       <input type="text" name="designation" class="form-control" id="phone" placeholder="Designation">
                                    </div>
                                 </div>
                                 
                                 
                                 <div class="col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group section-field textarea wow fadeInUp" data-wow-duration="2.5s">
                                       <label class="mb-2">Message (Minimum 20 characters) *</label>
                                       <textarea class="input-message w-100" name="message"  id="message" placeholder="Type Your Message Here" rows="5" required="true" minlength="20"></textarea>
                                    </div>
                                    <input type="hidden" name="action" value="sendEmail">
                                    <div class="section-field iq-mt-20">
                                     <div class="g-recaptcha" data-sitekey="6LdA3mYUAAAAANpUuZTLbKM_s23tTHlcdJ7dYfgI"></div>
                                    </div>
                                    <button id="submit" name="submit" type="submit" value="Send" class="button pull-right wow fadeInUp mt-3" data-wow-duration="1.0s">Send Message</button>
                                 </div> 
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-6 r-mt3">
                     <div>
                        <div class="row">
                           <div class="col-sm-12">
                              <ul class="iq-contact text-white">
                                 <li>
                                    <i class="fas fa-envelope"></i>
                                    <p>contact@limechat.ai</p>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-sm-12">
                              <img src="images/contact/2.svg" style="width: 100%;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            Contact -->
      </div>
      <!--=================================
         MAIN CONTENT -->
            
<div style="display: none;">
<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;
   // Import PHPMailer classes into the global namespace
   // These must be at the top of your script, not inside a function
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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
       $mail->addAddress('admin@limechat.ai', 'Limechat AI');     // Add a recipient
       $mail->addReplyTo('admin@limechat.ai', 'Limechat AI');


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

   echo '<script type="text/javascript"> window.onload = ()=>{ $(".thank-button").click(); } </script>';


}
?>
   
</div>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary thank-button" data-toggle="modal" data-target="#exampleModal" style="display: none;">
  Launch demo modal
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thank you</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Thank for contacting is we will reach out to you soon.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>   


<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>