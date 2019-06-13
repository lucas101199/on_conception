<h3 id="passer">PASSER-NOUS VOIR</h3>
        <div class="formulaire">
            <div class="info">
                <div class="lien">
                    <h4>SUIVEZ-NOUS</h4>
                    <a href="https://www.youtube.com/channel/UCjq0mQHVEfTHfHK3Ml8xhcg"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/on.conception/"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="petit_logo">
                    <img src="image/logo_on_blanc.png">
                    <p>conception</p>
                </div>
                <div class="tel">
                    <i class="fas fa-phone"></i>
                    <p>+41 79 955 36 43</p>
                </div>
                <div class="mail">
                    <i class="far fa-envelope"></i>
                    <a href="mailto:ON.CONCEPTION@gmail.com">ON.CONCEPTION@gmail.com</a>
                </div>
            </div>
            <div class="contact">
                <h4>UN RENDEZ-VOUS, UNE QUESTION, UN CAFE ?</h4>
                
                <?php
/**
 * This example shows how to handle a simple contact form.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('mail', $_POST)) {
    date_default_timezone_set('Etc/UTC');

    require 'vendor/autoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    $mail->Username = "onconception.contact@gmail.com";
    $mail->Password = "2rey37ne";

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('onconception.contact@gmail.com', $_POST['nom']);
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('onconception.contact@gmail.com', $_POST['nom']);
    //$mail->addCC($_POST['mail'], $_POST['nom']);

    $mail->addCC("ON.CONCEPTION@gmail.com", "Onconception");
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['mail'], $_POST['nom'])) {
        $mail->Subject = $_POST['fonction'];
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Societe: {$_POST['societe']}
Fonction: {$_POST['fonction']}
Email: {$_POST['mail']}
Name: {$_POST['nom']}
Prenom: {$_POST['prenom']}
tel: {$_POST['tel']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.' . $e->ErrorMessage();
        } else {
            $msg = 'Message envoyé ! Merci de nous avoir contacter.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}


?>
            
<form class="form" method="post">
                    <div class="premier">
                        <div class="societe">
                            <label for="societe">SOCIETE</label>
                            <input type="text" id="societe" name="societe">
                        </div>
                        <div class="fonction">
                            <label for="fonction">FONCTION</label>
                            <input type="text" id="fonction" name="fonction">
                        </div>
                    </div>
                    <div class="second">
                        <div class="nom">
                            <label for="nom">NOM*</label>
                            <input type="text" id="nom" name="nom" required>
                        </div>
                        <div class="prenom">
                            <label for="prenom">PRENOM*</label>
                            <input type="text" id="prenom" name="prenom" required>
                        </div>
                    </div>
                    <div class="troisieme">
                        <div class="email">
                            <label for="mail">MAIL*</label>
                            <input type="mail" id="mail" name="mail" required>
                        </div>
                        <div class="telephone">
                            <label for="tel">TELEPHONE*</label>
                            <input type="tel" id="tel" name="tel" required>
                        </div>
                    </div>
                    <div class="dernier">
                        <label for="message">MESSAGE*</label>
                        <textarea name="message" rows="4" required></textarea>
                    </div>
                    <input type="submit">
                    <?php echo $msg; ?>
                </form>
        </div>
        </div>
        