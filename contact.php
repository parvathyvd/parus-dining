<?php include('includes/header.php'); ?>


<?php

if (isset($_POST['contact-submit'])) {

    $my_name =$POST['name'];
    $my_email =$POST['email'];


  if(!$my_name || !$my_email)
  {
    echo "<h4>All fields are required</h4>";
  }


$to = "parvathyvd@gmail.com";
$subject ="$my_name had sent you an email";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//send the mail

mail($to,$name,$subject,$email,$headers);

?>
<!-- Show success message after email has sent -->
<h5>Thanks for contacting Paru's!</h5>
<p>Please allow 24 hours for a response.</p>
<?php } else { ?>


<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 contact-block">
        <form method="post" action="">
          <div class="form-group">
            <label for="Name">Name</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter Phone">
          </div>
          <button type="submit" class="btn btn-outline-danger red d-flex mx-auto" name="contact-submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php } ?>

<?php include('includes/footer.php'); ?>
