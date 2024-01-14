<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

if(isset($_POST['firstname']))
{
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "b0609613@gmail.com";
    $mail->Password = "xvbj thjw pgsv zfas";

    $mail->setFrom("b0609613@gmail.com", "Kuekennest");
    $mail->addAddress("onhigh37@gmail.com");

    $message = $_POST['message'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $mail->Body = $firstname." ".$lastname." schreibt: ".$message." Email: ".$email.", Telefon: ".$phone;

    if($mail->send())
    {
        echo "Deine Email wurde versendet";
    }
    else
    {
        echo "Fehler: ".$mail->ErrorInfo;
    }
}
?>

<section class="h-fit flex flex-col main font-medium">

    <div class="flex flex-col items-center mt-20 justify-evenly w-full lg:flex-row">
        <div class="w-full px-5 lg:w-1/3 h-full flex flex-col">
            <h2 class="text-3xl">Kontaktiere mich</h2>
            <p>Falls Sie eine Frage haben oder Ihrem Kind einen Platz sichern möchten, füllen Sie das Formular aus oder kontaktieren Sie mich gerne direkt.</p>

            <ul class="mt-5 border-2 bg-white p-5 shadow-lg">
                <li>Severine Deutl</li>
                <li>Am Pfingstbach 39</li>
                <li>99099 Erfurt-Niedernissa</li>
                <li>Mobil: 0152/06428003</li>
                <li>Telefon: 0361/6539322</li>
            </ul>
            <div class="self-center w-full mt-10 shadow-lg p-2 bg-white border-2">
                <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.621325010195!2d11.101091976586794!3d50.94921577169177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a40d00ae719ce1%3A0x1a65fe786a802ed7!2sAm%20Pfingstbach%2039%2C%2099099%20Erfurt!5e0!3m2!1sen!2sde!4v1703944211320!5m2!1sen!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

        <div class="w-full h-full px-5 lg:w-1/3">
            <h2 class="text-3xl mt-10 lg:mt-0">Schick mir eine Nachricht</h2>
            <div class="flex flex-col items-start">
                <form method="post" action="/kuekennest2/contact" id="contact-form" class="flex flex-col flex-center space-y-2 w-full border-2 border-slate-400 p-5 rounded-lg mt-10 shadow-lg">
                    <label for="firstname"></label>
                    <input required type="text" name="firstname" id="firstname" placeholder="Vorname" class="rounded-md bg-slate-50 p-1 outline-blue-400 border-2 border-slate-400" oninput="validateTextInput(event)">

                    <label for="lastname"></label>
                    <input required type="text" name="lastname" id="lastname" placeholder="Nachname" class="rounded-md bg-slate-50 p-1 outline-blue-400 border-2 border-slate-400" oninput="validateTextInput(event)">

                    <label for="email"></label>
                    <input required type="text" name="email" id="email" placeholder="Email" class="rounded-md bg-slate-50 p-1 outline-blue-400 border-2 border-slate-400">

                    <label for="phone"></label>
                    <input required type="tel" id="phone" name="phone" placeholder="Telefonnummer" class="rounded-md bg-slate-50 p-1 outline-blue-400 border-2 border-slate-400" oninput="validatePhoneNumber(event)">

                    <label for="message"></label>
                    <textarea required id="message" name="message" placeholder="Ihre Nachricht" class="rounded-md bg-slate-50 p-1 outline-blue-400 border-2 border-slate-400"></textarea>

                    <button class="border-2 border-slate-400 rounded-xl" type="submit">Nachricht senden</button>
                </form>

            </div>
        </div>
    </div>

</section>

<script>
    function validateTextInput(event)
    {
        const value = event.target.value;

        if (/[^a-zA-z]/.test(value))
        {
            event.target.value = value.slice(0, -1);
        }
    }


    function validatePhoneNumber(event)
    {
        const value = event.target.value;

        if (/[^\d|^+]/.test(value))
        {
            event.target.value = value.slice(0, -1);
        }
    }
</script>

