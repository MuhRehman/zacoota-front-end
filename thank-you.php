<?php
include('header.php');
?>



<div class="thank-you">
    <div class="container   h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 mx-auto">
               <div class="thank-you-inner">

               </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#payment_success">
            check-out
        </button>

        <!-- Modal -->
        <div class="modal fade" id="payment_success" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                       <div class="icon-box">
                           <i class="fa fa-check" aria-hidden="true"></i>
                       </div>
                        <h2>Thank you!</h2>

                        <p>Your payment has been successful<br>Please check your email for details</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>



<!--        cancel popup-->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#payment_success">
            check-out
        </button>

        <!-- Modal -->
        <div class="modal fade" id="payment_success" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="icon-box">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <h2>Thank you!</h2>

                        <p>Your payment has been successful<br>Please check your email for details</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('footer-search.php');
?>
