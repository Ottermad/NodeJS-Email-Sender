<?php
  $page = 'email_sent';
  include('inc/header.php');
  $to = $_GET['to'];
  $from = $_GET['from'];
  $subject = $_GET['subject'];
  $text = $_GET['text'];
?>
      <!-- main content area for gallery -->
      <section>
        <h3>To:</h3>
        <p><?php echo $to; ?></p>
        <h3>From:</h3>
        <p><?php echo $from; ?></p>
        <h3>Subject:</h3>
        <p><?php echo $subject; ?></p>
        <h3>Body:</h3>
        <p><?php echo $text; ?></p>
      </section>
      
<?php
    include('inc/footer.php');   
?> 