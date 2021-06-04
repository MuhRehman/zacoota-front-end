<?php
include('header.php');
?>

<section class="restpassword">
    <div class="container">
        <div class="resetpassword-inner">
            <form>

               <div class="row">
                    <div class="col-md-12">
                        <p>Please enter the email address used to sign up to zacoota in the box below, and press reset to send a new password.</p>
                    </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <input type="email" class="form-control" id="reset_pass" aria-describedby="emailHelp" placeholder="Enter email">
                       </div>
                       <button type="reset" class="btn btn-primary">Rest</button>
                   </div>
               </div>
            </form>
        </div>
    </div>
</section>


<?php
include('footer.php');
?>
