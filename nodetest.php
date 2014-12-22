<?php
  $page = 'email_form';
  include('inc/header.php');
?>
      <!-- main content area for gallery -->
      <section>
        <form action="http://178.62.25.20:8080/myaction" method="post">

            
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" />

            <label for="recipent">Recipent&rsquo;s Email:</label>
            <input type="email" id="recipent" name="recipent" placeholder="Enter the recipent&rsquo;s email address" />

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" placeholder="Enter email's subject" />

            <label for="emailbody">Body:</label>
            <textarea id="emailbody" placeholder="Enter body of email" name="emailbody"></textarea>

            <input type="submit" value="Send email" />

    </form>
      </section>
      
<?php
    include('inc/footer.php');   
?> 