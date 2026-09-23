<?php 

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
    }

    $mailTo = "kkm339@gmail.com";
    $headers = "\n\nSubject : ".$subject."\nFrom : ".$email.".\nName : ".$name.".\nMessage: ".$message;

    $notif = $subject;

    mail($mailTo, $notif, $headers);
    header("Location: ../contact/?mailsend");
?>