<?php
    $success = "";
    $error = "";
    $name = $message = $email = "";
    $errors = array('name'=>'', 'email'=>'', 'message'=>'');

    if(isset($_POST["submit"]))
    {
        if(empty(trim($_POST["name"])))
        {
            $errors['name'] = "Full name is required"; 
        }else
        {
            $name = SanitizeString($_POST["name"]);
            if(!preg_match('/^[a-zA-Z\s]{6,50}$/', $name))
            {
                $errors['name'] = "Only letters and spaces allowed";
            }
        }

        if(empty(trim($_POST["email"])))
        {
            $errors["email"] = "Email is required";
        }else
        {
            $email = SanitizeString($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors["email"] = "Provide a valid email address";
            }
        }

        if(empty(trim($_POST["message"])))
        {
            $errors["message"] = "Please type your message";
        }
        else
        {
            $message = SanitizeString($_POST["message"]);
            if(!preg_match("/^[a-zA-Z\d\s]+$/", $message)){
                $errors["message"] = "Only letters, spaces and maybe numbers allowed";
            }
        }

        if(array_filter($errors)){

        }else
        {
            $name = SanitizeString($_POST["name"]);
            $email = SanitizeString($_POST["email"]);
            $message = SanitizeString($_POST["message"]);

            $to = "torimiro@gmail.com";
            $subject = "This is an email from your personal website";

            $headers = 'From: ' . $name . ' Email ' . $email . "\r\n" . 
            'Reply-To: ' . $email . "\r\n" . 
            'X-Mailer: ' . 'Your Personal Website';
        

        $ml = mail($to, $subject, $message, $headers);
        if (!$ml)
        {
            $error = "Sorry message could not send, try again or send an email to 'torimiro@gmail.com'";
        }else
        {
            $success = "Message sent successfully";
        }
    }

    }
	
	function SanitizeString($var)
    {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return stripslashes($var);
    }

?>

<?php require_once('templates/header.php') ?>
    <div class="container contact">
        <h4>Contact</h4>
        
        <hr>

        <br>
    
        
      <div class="row">
        <div class="col s12 l5">
        <span class="">Get in touch with me via email</span>
          <p> </p>
        </div>
        <div class="col s12 l5 offset-l2">

        <div class="success"><?php echo $success ?></div>
        <div class="error"><?php echo $error ?></div>
        <form action="contact.php" method="post">
             
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name) ?>">
                        
                        <label for="name">Full name*</label>
                        <div class="error"><?php echo $errors["name"] ?></div>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email) ?>">
                        <label for="email">Email*</label>
                        <div class="error"><?php echo $errors["email"] ?></div>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="message" class="materialize-textarea" name="message"><?php echo htmlspecialchars($message) ?></textarea>
                        <label for="message">Message*</label>
                        <div class="error"><?php echo $errors["message"] ?></div>
            </div>
            <div class="input-field center">
                    <input type="submit" class="btn-large" name="submit" id="submit" value="Send"></input>
                </div>
            
            </form>
            
  
        </div>
      </div>

<br>
<br>


</div>


<?php require_once('templates/footer.php') ?>