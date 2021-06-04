<?php
include('header-listing.php');
?>



<!--main content-->
<div class="instarent-content-wrap">
    <div class="container">
<!--        for hide and show-->
        <div class="instarent-checkout-wrap">
        <div class="row">
            <div class="col-12">
                <a href="instarent.php" class=" btn back-rent-now"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
            </div>

            <!--                main content-->

            <div class="col-md-12">


                <div class="instarent-checkout">
<!--                    <div class="rent-now-payment-details-box">-->
<!--                        <p>This holding deposit will go towards your first month's rent in full.</p>-->
<!--                    </div>-->
                    <div class="rent-now-payment-details-box">
                        <p>To confirm your interest and to secure this property using the Instarent service, you must place a holding deposit. The holding deposit will go towards your first month's rent in full.</p>
                    </div>


                    <div class="card-accepted">
                        <p>Please note we can only accept <b>UK debit cards</b> for this transaction </p>
                    </div>


                    <!--                place holding deposit-->

                    <div class="rent-now-payment-details">
                        <div class="price-details">
                            <h4>Payment summary</h4>
                            <div class="creditcard-logos">
                                <img src="assets/images/creditcard-logo.png" class="img-fluid">
                            </div>
                            <!--                    order summery      -->
                            <div class="order-summery">
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Description:</h6>
                                        <p> Instarent - Holding deposit</p>
                                    </div>
                                    <div class="col-12">
                                        <h6>Property Reference:</h6>
                                        <p> Flat 6, 175 Huxley Road, London E10 (#9856678)</p>
                                    </div>

                                </div>
                            </div>
<!--                            <table class="table table-borderless">-->
<!---->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td> Total rent/deposit amount (due after contract signing)</td>-->
<!--                                    <td></td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>Monthly Rent-->
<!---->
<!--                                    </td>-->
<!--                                    <td>£600.00</td>-->
<!--                                </tr>-->
<!---->
<!--                                <tr>-->
<!--                                    <td>Deposit</td>-->
<!--                                    <td>£807.00</td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>Holding deposit amount-->
<!---->
<!--                                    </td>-->
<!--                                    <td> £161.00</td>-->
<!--                                </tr>-->
<!--                                </tbody>-->
<!---->
<!--                            </table>-->
                        </div>
                        <div class="instarent-deposit">
                            <div class="payable-amount">
                                <div class="row">
                                    <div class="col-7">
                                        <h5>Amount due now:</h5>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h5> £161.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form id="payment-form">
                            <div id="card-element">
                                <!-- Elements will create input elements here -->
                            </div>

                            <!-- We'll put the error messages in this element -->
                            <div id="card-errors" role="alert"></div>
                            <div class="rent-now-payment-details-note">
                                <p>By selecting the button below, I have read and agree to the <a href="Terms-conditions.php">terms and conditions</a> set out by Zacoota,
                                    including the information relative to holding deposits. I also agree to pay the total amount shown,
                                    which includes the monthly rent and deposit required. I understand until the landlord consents to my
                                    application any agreements will not come in to effect.</p>
                            </div>
                            <button class="btn" id="submit">Pay Now</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </div>
</div>


<script>
    //move in date
    $(function () {
        var today = new Date();
        var widget = $("#move_in_date").datepicker("widget");
        $("#move_in_date").datepicker({
            minDate: today,
            format: 'dd-mm-yyyy',
        });

        // $("#move_in_date").datepicker("setDate", "today");


    });

</script>
<script>
    $(document).ready(function () {
        $("#add_tenant").click(function () {

            $(".tenant-details").clone().appendTo(".tenant-details-new");
        });
        $(".remove").click(function () {

            $(this).parent('.tenant-details').remove();
        });
    });
</script>
<script>
    // Set your publishable key: remember to change this to your live publishable key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
    var stripe = Stripe('pk_test_FdpEN5ETRiWKRMGAaRUFAg6W');
    var elements = stripe.elements();
    // Set up Stripe.js and Elements to use in checkout form
    var elements = stripe.elements();
    var style = {
        hidePostalCode: true,
        base: {
            color: "#32325d",
            fontSize: "16px",
           border:"1px solid #dee2e6",
        }
    };

    var card = elements.create("card", { style: style });
    card.mount("#card-element");

</script>

<?php
include('footer.php');
?>
