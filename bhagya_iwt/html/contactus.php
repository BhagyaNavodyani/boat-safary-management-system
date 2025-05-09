<html>
    <body>

<div class="div_2">
    <form class="form_1" method="post" action="contact_us.php">
       
        <label for="fname" class="fname" >First Name :</label>
        <input type="text" id="fname" name="fname"><br/><br/>
 
        <label for="lname" class="lname" >Last Name :</label>
        <input type="text" id="lname" name="lname"><br/><br/>
 
        <label for="email" class="email">Email :</label>
        <input type="email" id="email" name="email"><br/><br/>
 
        <p class="message"><label for="message">Message :</label></p>
        <textarea id="message" name="message"></textarea><br/><br/>
 
        <input onclick="confirm('Are you sure! You want to submit the form..')" id="submitButton" type="submit" value="submit">
    </form>
</div></body></html>