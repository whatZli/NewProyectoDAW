<form action="index.php?pag=contact" id="usrform" method="POST" onsubmit="return false">
    <fieldset> 
        <h2>Contact with us</h2>
        <label for="name">Name</label>
        <input type="text" name="name" id="nameFC" value="" placeholder="Your name">
        <label for="email">Email</label>
        <input type="email" name="email" id="emailFC" value="" placeholder="Your Mail">
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subjectFC" value="" placeholder="Your subject">
        <label for="message">Message</label>
        <textarea id="messageFC" name="comment" form="usrform" placeholder="Write here your text"></textarea>
        <div>En proceso...</div>
        <div class="g-recaptcha" data-sitekey="CLAVE EJEMPLO"></div>
        <input type="submit" name="send" id="sendFC" value="Send message">
    </fieldset>
</form>