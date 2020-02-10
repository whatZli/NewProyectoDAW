<form action="#" id="usrform">
    <fieldset> 
        <h2>Contact with us</h2>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="" placeholder="Your name">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="" placeholder="Your Mail">
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" value="" placeholder="Your subject">
        <label for="message">Message</label>
        <textarea id="message" name="comment" form="usrform" placeholder="Write here your text"></textarea>
        <div>En proceso...</div>
        <div class="g-recaptcha" data-sitekey="CLAVE EJEMPLO"></div>
        <input type="submit" name="send" value="Send message">
    </fieldset>
</form>