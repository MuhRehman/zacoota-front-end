<?php
include('header.php');
?>

<div class=" send-message">
    <div class="container">
        <div class="send-message-inner">
            <!--            payment protection alert-->
            <div class="payment-alert">
                <p> To protect your payment, always communicate and pay through the Zacoota website.<br> <a href="#">Click here </a>for more information on our Instarent feature. </p>
            </div>


            <!--            landlord and property details-->
            <div class="landlord-details">
                <div class="row">
                    <div class="col-8">
                        <div class="landlord-contact-box">
                            <h4>Contact Giba</h4>
                            <p>Property Description: <a href="#">2 Bed Detached House, IG1 4LZ</a></p>
                        </div>
                    </div>
                    <div class="col-4 text-right">
                        <div class="landlord-image">
                            <img src="assets/images/savings-card.jpg" class="img-fluid" alt="sam">
                        </div>
                    </div>
                </div>
            </div>




            <!--            message box-->
            <div class="message-box">

                <form>
                    <div class="form-group">
                        <label for="send_message">Send message</label>
                        <textarea class="form-control" id="send_message" rows="6"></textarea>
                    </div>
                    <div class="btn-group">
                        <a href="#" type="submite" class="btn mb-2">Send message</a>
                        <a href="#" class="btn">Go Back</a>
                    </div>

                </form>
            </div>
            <div class="instrent-box" style="display: block">
                <p><img src="assets/images/instarent-with-text.svg" alt="instarent banner"> Find it. Reserve it. Rent it.</p>
                <p> InstaRent discover properties that you can reserve on the spot and rent entirely online </p>
            </div>
            <div class="discretion">
                <h5>What is Instarent?</h5>
                <p>Instarent is Zacoota's tenancy creation & safety tool, giving tenants:</p>
                <h5>Security:</h5>
                <p>Never hand money over to someone you just met. With our Instarent tool you can confidently reserve and rent a property online knowing any initial rent or deposit payments will be safely collected and secured by Zacoota.</p>
                <h5>Quick and convenient:</h5>
                <p>Moving homes can take days if not weeks. With our Instarent tool, you can place a holding deposit, reserve a property, sign contracts and collect the keys within hours. Easily manage the whole process online 24/</p>
                <h5>Free for Tenants:</h5>
                <p>Zacoota tenants pay no admin or commissions, EVER!</p>
                <h5>100% refund:</h5>
                <p>You will get a full refund of your holding deposit if the landlord rejects your application through no fault of your own.</p>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');