<?php
include('header.php');
?>


    <!--breadcrumbs-->

    <div class="insta-breadcrumb">
        <div class="container">
            <ul>
                <li class="complete">
                    <div class="caption"><span>Initiate Rent </span></div>
                </li>
                <li class="complete">
                    <div class="caption"><span>Tenant Referencing</span></div>
                </li>
                <li class="complete">
                    <div class="caption"><span>Digital Contract Signin</span></div>
                </li>
                <li class="current">
                    <div class="caption"><span> Pay Security Deposit &amp; Rent</span></div>
                </li>
                <li>
                    <div class="caption"><span>Complete</span></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="insta-progress-bar">
        <div class="container">
            <a class="collapsed" data-toggle="collapse" href="#progress_bar" role="button" aria-expanded="false">
                <span class="count">1</span> Initiate Rent
            </a>
            <div class="collapse " id="progress_bar" style="">
                <div class="card card-body">
                    <div class="insta-progress-bar-step complete">
                        <h5>Initiate Rent</h5>
                    </div>
                    <div class="insta-progress-bar-step complete">
                        <h5>Tenant Referencing</h5>
                    </div>
                    <div class="insta-progress-bar-step complete">
                        <h5>Digital Contract Signing </h5>
                    </div>
                    <div class="insta-progress-bar-step current">
                        <h5>Pay Security Deposit &amp; Rent</h5>
                    </div>
                    <div class="insta-progress-bar-step">
                        <h5>Complete</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="app">
        <div class="rent-payment-options">
            <div class="container">
                <div class="pay-breakdown">
                    <div class="row">
                        <div class="col-12">


                            <!--   when international payment done   -->
                            <div class="payment-alert" style="display:block;">
                                <h6>Notifications have been sent.</h6>
                                <p>You have now told us that this payment has been sent by bank transfer, and this request has been received. Once we have received payment, the landlord and all tenants will be informed.</p>
                                <p>Our bank is checked via an automated process, and you will be notified as soon as payment has cleared. This usually takes 24 hours, but can take up to 3 days depending on your bank and transfer method used.</p>
                                <p><b>Below information left for reference</b></p>
                            </div>

                            <!--   outstanding amount table   -->
                            <div class="outstanding-amount">
                                <h6>Amount Breakdown</h6>

                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td>First Month's Rent Payment</td>
                                        <td>£103.00</td>
                                    </tr>
                                    <tr>
                                        <td>Full Deposit Amount</td>
                                        <td>£118.14</td>
                                    </tr>

                                    <tr class="paid">
                                        <td>Holding deposit <span>(Paid)</span></td>
                                        <td> -£24.00</td>
                                    </tr>
                                    <tr>
                                        <td>Amount Due <span>(This amount must be paid before you are allowed to move in)</span></td>
                                        <td> £197.14 </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="info-box">

                                    <p><b>Please do not pay the landlord directly.</b> We need to receive the final balance
                                        in order to set up your tenancy.
                                        You can use any of these methods for your payment:</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="pay-options">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h2>Payment Options</h2>

                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="options-div">

                                <h6>Pay by UK Bank Transfer</h6>
                                <ul class="nav nav-tabs" id="payment-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="fast-payment-tab" data-toggle="tab"
                                           href="#fast_payment" role="tab" aria-controls="fast-payment"
                                           aria-selected="true">
                                            <span class="check"></span>
                                            <img alt="British Gas" class=" " width="90"
                                                 src="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3"
                                                 srcset="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=75&amp;dpr=1 1x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=50&amp;dpr=2 2x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=35&amp;dpr=3 3x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=23&amp;dpr=4 4x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=20&amp;dpr=5 5x">
                                            Fast Payment
                                        </a>
                                    </li>
                                    <li class="nav-item">

                                        <a class="nav-link" id="manual-payment-tab" data-toggle="tab"
                                           href="#manual_payment" role="tab" aria-controls="manual-payment"
                                           aria-selected="false">
                                            <span class="check"></span>
                                            <img alt="British Gas" class=" " width="90"
                                                 src="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3"
                                                 srcset="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=75&amp;dpr=1 1x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=50&amp;dpr=2 2x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=35&amp;dpr=3 3x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=23&amp;dpr=4 4x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=20&amp;dpr=5 5x">
                                            Manual Payment
                                        </a>
                                    </li>
                                    <h6>Pay by International Bank Transfer (24 hour delay)</h6>
                                    <li class="nav-item">
                                        <a class="nav-link " id="transferwise-tab" data-toggle="tab"
                                           href="#transferwise" role="tab" aria-controls="fast-payment"
                                           aria-selected="true">
                                            <span class="check"></span>
                                            <img alt="British Gas" class=" " width="90"
                                                 src="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3"
                                                 srcset="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=75&amp;dpr=1 1x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=50&amp;dpr=2 2x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=35&amp;dpr=3 3x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=23&amp;dpr=4 4x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=20&amp;dpr=5 5x">
                                            TransferWise
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="IBAN-tab" data-toggle="tab" href="#IBAN" role="tab"
                                           aria-controls="manual-payment" aria-selected="false">
                                            <span class="check"></span>
                                            <img alt="British Gas" class=" " width="90"
                                                 src="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3"
                                                 srcset="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=75&amp;dpr=1 1x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=50&amp;dpr=2 2x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=35&amp;dpr=3 3x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=23&amp;dpr=4 4x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=20&amp;dpr=5 5x">
                                            IBAN / International Bank
                                        </a>
                                    </li>

                                    <h6>Pay in instalment</h6>
                                    <li class="nav-item">
                                        <a class="nav-link " id="instalments-tab" data-toggle="tab"
                                           href="#instalments" role="tab" aria-controls="fast-payment"
                                           aria-selected="true">
                                            <span class="check"></span>
                                            <img alt="British Gas" class=" " width="90"
                                                 src="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3"
                                                 srcset="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=75&amp;dpr=1 1x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=50&amp;dpr=2 2x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=35&amp;dpr=3 3x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=23&amp;dpr=4 4x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=20&amp;dpr=5 5x">
                                            Instalments
                                        </a>
                                    </li>
                                    <h6>Pay Outstanding Balance By UK Debit Card</h6>
                                    <li class="nav-item">
                                        <a class="nav-link " id="debit-card-tab" data-toggle="tab"
                                           href="#debit-card" role="tab" aria-controls="fast-payment"
                                           aria-selected="true">
                                            <span class="check"></span>
                                            <img alt="British Gas" class=" " width="90"
                                                 src="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3"
                                                 srcset="https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=75&amp;dpr=1 1x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=50&amp;dpr=2 2x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=35&amp;dpr=3 3x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=23&amp;dpr=4 4x, https://uswitch-cms.imgix.net/uswitch-imgix/energy/supplier-logos/british-gas.png?auto=format&amp;fit=fill&amp;fill=solid&amp;w=90&amp;h=undefined&amp;ixlib=react-8.6.3&amp;q=20&amp;dpr=5 5x">
                                            UK Debit Card
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="tab-content" id="payment-tabs-content">
                                <a href="javascript:void(0) " class="close-btn">
                                    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                </a>
                                <div class="tab-pane fade show active" id="fast_payment" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <h6>Fast Payment</h6>
                                    <p>Please use the following link to use our fast payment system:</p>
                                    <div class="form-group flex">
                                        <label for="amount">Amount</label>
                                        <div class="input-group">
                                            <div class="curancy">£</div>
                                            <input class="input-amount form-control" type="number" data-val="true"
                                                   step="any" value="197.14" max="197.1400" min="0.01" name="amount"
                                                   placeholder="Enter Amount To Pay">
                                        </div>
                                    </div>
                                        <a href="#" class="btn">Make fast payment now</a>
                                        <p>By using our fast payment system you are permitting TrueLayer to initiate a
                                            payment
                                            and
                                            agree to the TrueLayer <a rel="noopener nofollow noreferrer" target="_blank"
                                                                      href="https://truelayer.com/enduser_tos/">end-user
                                                terms</a>
                                            and <a rel="noopener nofollow noreferrer" target="_blank"
                                                   href="https://truelayer.com/privacy/">privacy policy</a>.</p>

                                </div>
                                <div class="tab-pane fade" id="manual_payment" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <h6>Manual Payment Options</h6>
                                    <p>To manually pay money by <b>bank transfer</b> please use the following details:
                                    </p>
                                    <div class="bank-details">
                                        <p>Payee (Optional): <b>Zacoota Ltd</b </p>
                                        <p>Account Number: <b>10708955</b> </p>
                                        <p>Sort Code: <b>04-00-60</b></p>
                                        <p>Payment Reference: <b>1013754</b> </p>
                                        <p>Amount: <b>£197.14</b> (or any partial amount)</p>
                                        <p class="text-danger"><i class="fa fa-exclamation-triangle"
                                                                  aria-hidden="true"></i> Please ensure the sort code
                                            and account number match exactly</p>

                                    </div>
                                    <p>This amount will be confirmed instantly upon receipt to all tenants and the landlord.</p>
                                </div>
                                <div class="tab-pane fade" id="transferwise" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <h6>TransferWise Instructions</h6>
                                    <ul>
                                        <li>Enter the total payment amount <b>£197.14 (GBP)</b> in the "Recipient gets"
                                            box
                                        </li>
                                        <li>Ensure the currency is set to GBP</li>
                                        <li>Click the padlock</li>
                                    </ul>
                                    <div class="bank-details">
                                        <p>Total Amount: <b> £197.14 (GBP)</b></p>
                                        <p>Who are you sending money to? <b>"Business or charity"</b></p>
                                        <p>Their email: <b>leave blank</b></p>
                                        <p>Name of the business / charity: <b>Zacoota Ltd</b></p>
                                        <p>I know their bank details: <b><i class="fa fa-check" aria-hidden="true"></i></b></p>
                                        <p>UK Sort Code: <b>04-00-72</b></p>
                                        <p>Account Number: <b>10708952</b></p>
                                        <p>
                                                    <span class="text-danger"><i class="fa fa-exclamation-triangle"
                                                                                 aria-hidden="true"></i>Please ensure the sort code and account number match exactly</span>
                                        </p>
                                        <p>Payment Reference: <b>1013754</b></p>
                                        <p>
                                               <span class="text-danger"> <i class="fa fa-exclamation-triangle"
                                                                             aria-hidden="true"></i>Incorrect payment references will cause delays</span>
                                        </p>
                                    </div>
                                    <a href="#" class="btn">
                                        go to transferWise
                                    </a>
                                    <div class=" payment-send">
                                        <p><b>Then once you've paid, you have to click here to enable us to process payment.</b></p>
                                        <a href="#" class="btn">I have sent payment for the remaining £197.14</a>
                                        <p>Please note that however you make payment, the transfer will need to be set up such
                                            that we receive payment in GBP (£). Failure to do so will mean we incur a charge for
                                            the transaction, and in such a case you would need to make up that charge by sending
                                            any outstanding bank fees relating to the transaction.</p>
                                        <p>If you have any problems, or the payment has taken over 3 days, please just <a href="#">send us a message</a> and provide your payment reference details.
                                            We can then open an investigation.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="IBAN" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <h6>IBAN / International Bank Details</h6>
                                    <p>The transfer will need to be set up such that we receive payment in GBP (£), for the full amount owed. Failure to do so will mean we incur a charge for the transaction, and in such a case you would need to make up that charge by sending any outstanding bank fees relating to the transaction.</p>
                                    <div class="bank-details">
                                        <p>Account name or Beneficiary name: <b>Zacoota Ltd</b></p>
                                        <p>Account Number: <b>73212165</b></p>
                                        <p>Sort Code: <b>20-79-06</b></p>
                                        <p>IBAN: <b>GB05BUKB20790673212165</b></p>
                                        <p>SWIFT Code:<b>BARCGB22</b></p>
                                        <p>Receive Amount:<b>£197.14 (GBP)</b></p>
                                        <p>Payment Reference: <b>1013754</b></p>
                                        <p>Bank: <b>BARCLAYS BANK PL, Leicester, Leicestershire, United Kingdom, LE87
                                                2BB</b></p>
                                        <p>
                                            <span class="text-danger"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Incorrect payment references will cause delays</span>
                                        </p>
                                        <p>Beneficiary mailing address: <b>Euro House, 1394 High Road, London, N20 9YZ</b></p>

                                    </div>
                                    <p>As international transfers typically take 3+ working days to reach us, we recommend you make payment as soon as possible, to ensure move-in isn't delayed.</p>
                                    <div class="payment-send">
                                        <p><b>Then once you've paid, you have to click here to enable us to process payment.</b></p>
                                        <a href="#" class="btn">I have sent payment for the remaining £197.14</a>
                                        <p>Please note that however you make payment, the transfer will need to be set up such
                                            that we receive payment in GBP (£). Failure to do so will mean we incur a charge for
                                            the transaction, and in such a case you would need to make up that charge by sending
                                            any outstanding bank fees relating to the transaction.</p>
                                        <p>If you have any problems, or the payment has taken over 3 days, please just <a href="#">send us a message</a> and provide your payment reference details.
                                            We can then open an investigation.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="instalments" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <h6>Pay In Instalments</h6>
                                    <p>Borrow at great rates and repay during the tenancy.</p>
                                    <a href="#" class="btn">get a load today</a>
                                </div>
                                <div class="tab-pane fade" id="debit-card" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <h6>Pay By UK Debit Card</h6>
                                    <p>To pay the full outstanding amount of £197.14 by <b>UK debit card</b> please click
                                        the button below.</p>
                                    <p><b>We can not accept credit cards for this transaction.</b></p>

                                    <a href="#" class="btn">Pay £197.14 By Debit Card</a>
                                    <div class="alerts">
                                        <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                            <b>Large sums paid by debit card can be blocked by your bank, including blocking
                                                your payment card</b>.
                                            We recommend using a bank transfer where possible for this reason.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    if ($('ul#payment-tabs li').length) {
        $("ul#payment-tabs li").click(function () {
            $('html, body').animate({
                scrollTop: $("#pay-options").offset().top - 100
            }, );
        });
    }
    $(window).resize(function() {
        if ($(window).width() < 992) {
            $('.nav-link ').removeClass('active');
            $("ul#payment-tabs li").on("click", function() {
                $('.rent-payment-options .tab-content ').addClass('active');
            });

        }
        $(".rent-payment-options .tab-content a.close-btn").on("click", function() {
            $('.rent-payment-options .tab-content ').removeClass('active');
            $('.nav-link ').removeClass('active');
        });
    }).resize();
</script>

<?php
include('footer.php');
?>