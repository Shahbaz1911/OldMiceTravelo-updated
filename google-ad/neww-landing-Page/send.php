<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'info@micetravelo.com'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST["info@micetravelo.com"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["info@micetravelo.com"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $MESSAGE_BODY = "Name: ".$_POST["date"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["nights"].""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["adults"]).""; 
    $MESSAGE_BODY = "Name: ".$_POST["childs"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["child"].""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["name"])."";
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["mail"]).""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["phone"])."";    
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 
Your message was sent
<?php 
} else { 
?> 
<?php 
}; 
?>