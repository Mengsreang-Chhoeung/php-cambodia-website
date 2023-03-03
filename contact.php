<?php
include "layouts/header-component.php";
include "layouts/navbar.php";
?>

<!-- Title -->
<h1 class="title__capital">
  Contact
</h1>
<!-- End of Title -->
<!-- Contact content -->
<div class="detail">
  <form>
    <input type="text" placeholder="Full Name" required />
    <input type="email" placeholder="E-mail" required />
    <input type="text" placeholder="Phone Number" required />
    <textarea placeholder="Your Message" cols="30" rows="10" required></textarea>
    <input type="submit" value="Submit" class="btn" style="
              margin-left: auto;
              border: none;
              cursor: pointer;
              font-size: 18px;
            " />
  </form>
</div>
<!-- End of Contact content -->

<?php
include "layouts/footer-navbar-component.php";
include "layouts/footer-component.php";
?>