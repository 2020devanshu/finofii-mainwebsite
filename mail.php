

<?php
$to = "gj@finofii.com";
$name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $phone = $_POST['phone']; //getting customer Phome number
 $company = $_POST['company-name']; //getting subject line from client
 $subject = "Contact us Mail"; // For customer confirmation
$txt = "Cleint Name: " . $name . "\n"
 . "Phone Number: " . $phone . "\n\n"
 . "Email: " . $fromEmail . "\n\n"
 . "Company Name: " . $company . "\n\n";
$headers = "From: care@finofii.com" . "\r\n" .
"CC: devanshu@takniik.com";




$mail_status = mail($to,$subject,$txt,$headers);
if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We will contact you shortly.');
  window.location.href = 'index.html';
 </script>
  <script>
              const scriptURL = "https://script.google.com/macros/s/AKfycbycXMbtRrs9c0dgxhuX-gS83qH3f7z_KclDfSD39Zqk4YIYl0M9CBIwbD7PedKuvAQ5/exec";
              const form = document.forms["formName"];
              form.addEventListener("submit", (e) => {
                if (document.getElementById("name").value === null || document.getElementById("name").value === "" || document.getElementById("name").value === undefined || document.getElementById("company-name").value === null || document.getElementById("company-name").value === "" || document.getElementById("company-name").value === undefined || document.getElementById("email").value === null || document.getElementById("email").value === "" || document.getElementById("email").value === undefined || document.getElementById("phone").value === null || document.getElementById("phone").value === "" || document.getElementById("phone").value === undefined || document.getElementById("phone").value.length < 10) {
                  console.log(username);
                  console.log(companyName);
                  console.log(email);
                  console.log(phone);
                  alert("Empty Values");
                } else {
                  e.preventDefault();
                  fetch(scriptURL, {
                    method: "POST",
                    body: new FormData(form),
                  }).then((response) => alert("Thank you! your form is submitted successfully.")).then(() => {
                    window.location.reload();
                  }).catch((error) => console.error("Error!", error.message));
                }
              });
            </script>
 <?php
 }else { ?>
  <script language="javascript" type="text/javascript">
   alert('Message failed. Please, send an email to ramandeep@takniik.com');
   window.location.href = 'index.html';
  </script>
 <?php } ?>


?>