
    <div class="form">
        <h4>Send us a message</h4>
            <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                    <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                </form>
    </div>

    <?php
        $to = $_GET["email"];
        $subject = "Message from BIZZACC";
        $text = "A testing message from bizzacc for customer";
        $headers = "From: digitalbizzacc@gmail.com" . "\r\n" .
            "CC: digitalbizzacc@gmail.com";

        mail($to, $subject, $text, $headers);

        $toOffice = "digitalbizzacc@gmail.com";
        $subjectOffice = "Message from " . $_GET["name"];
        $textOffice = "Subject: " . $_GET["subject"] .
                        "\nMessage: " . $_GET["message"];
        $headersOffice = "From: digitalbizzacc@gmail.com" . "\r\n" .
            "CC: digitalbizzacc@gmail.com";

        mail($to, $subject, $text, $headers);
    ?>