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
        <div class="rent-fullpayment">
            <div class="container">

                <div class="flex">
                    <div class="main-content">
                        <div class="content payment-alert">
                            <h6>Thanks for letting us know you have made payment.</h6>
                            <p>We will email you automatically when the full balance has cleared with us.</p>
                            <h6>Notifications have been sent.</h6>
                            <p>You have now told us that this payment has been sent by bank transfer, and this request has been received. Once we have received payment, the landlord and all tenants will be informed.</p>
                            <p>Our bank is checked via an automated process, and you will be notified as soon as payment has cleared. This usually takes 24 hours, but can take up to 3 days depending on your bank and transfer method used.</p>

                        </div>
                        <div class="information">
                            <p>
                                we can see the move in dae ha now passed. If there has been a problem making payment, or
                                your move in date has changed, you will need to contact the landlord to let them know
                                immediately.
                            </p>
                            <p>
                                Otherwise - you should make payment ASAP. If you fail to make payment your tenancy isn't
                                valid and in the worst case could fall through completely.
                            </p>
                        </div>
                        <div class="content-wrap">
                            <div class="content">
                                <h2>Full Payment - Remaining Deposit & One Month's Rent</h2>

                            </div>
                            <div class="content">
                                <h6>Need to contact the landlord <span class="name"> Sam malik</span> ?</h6>
                                <div class="send-msg">
                                    <a href="#">Send message</a>
                                </div>
                            </div>
                            <!--   outstanding amount table for mobile    -->
                            <div class="content outstanding-amount">
                                <h6>Amount Outstanding</h6>
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

                                    <tr>
                                        <td>Holding deposit (Paid)</td>
                                        <td> -£24.00</td>
                                    </tr>
                                    <tr>
                                        <td>Total Outstanding</td>
                                        <td> £197.14</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="info-box">
                                    <p>This amount must be paid before you are allowed to move in</p>
                                </div>
                            </div>
                            <!--  already paid amount table for mobile    -->
                            <div class="content already-paid">
                                <h6>Already paid the Final Balance?</h6>
                                <p>We have not been notified of any payment. Please ensure that you have paid using the bank details provided on this page.</p>
                                <p>If you have instead paid the landlord directly, further actions will be required from the landlord. If this is the case, let us know using the button below and we will get in touch with the landlord.</p>
                                <a href="#">
                                    I've paid the Landlord Directly
                                </a>
                            </div>
                            <div class="content pay-options">
                                <h6>Payment Options</h6>
                                <p><b>Please do not pay the landlord directly.</b> We need to receive the final balance
                                    in order to set up your tenancy.</p>
                                <p>You can use any of these methods for your payment:</p>

                                <div class="see-options">
                                    <a href="#">See options</a>
                                </div>

                            </div>
                            <div class="content">

                                <div class="row">
                                    <div class="col-12">
                                        <h6>Balance Reminders ?</h6>

                                        <div class="info" style="display: block;">
                                            <p>All payments must be made before the move-in date and we encourage the
                                                tenants to pay this as soon as possible. By default, email prompts will
                                                be
                                                regularly sent to ensure everything goes ahead smoothly.</p>
                                            <p>As it is past the move-in date, prompt emails cannot be disabled.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content options">
                                <div class="flex">
                                    <a href="javascript:void(0)" data-toggle="modal"
                                       data-target="#tenant-surrender-tenancy">Cancel Option</a>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#ask-question">Frequently
                                        Asked Questions</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--landlord Cancel Options modal -->
    <div class="modal right fade option-modal" id="tenant-surrender-tenancy" tabindex="-1" role="dialog"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Cancel Options</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="cancel-tenancy">
                        <p>
                            All parties involved have signed the contract and are legally responsible for fulfilling
                            their part of the agreement. This means it is not possible to cancel anymore. However, if
                            the tenancy can't go ahead for some reason, we can help facilitate a tenancy surrender.
                        </p>
                        <p>
                            You should take independent legal advice if you are unsure whether or not to surrender the
                            tenancy, or how to do so. By using this service, you agree that Zacoota holds no liability
                            for any problems arising in connection with this tenancy or the process of surrendering it.
                        </p>
                        <p>
                            To continue, all parties will have to agree to a tenancy surrender by signing a deed and
                            informing us of the tenancy surrender.
                        </p>
                        <p>
                            Read more about tenancy surrenders <a href="#" target="_blank">here</a>.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="btn cancel">
                        Surrender this tenancy
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!--Asked Questions modal -->
    <div class="modal right fade option-modal" id="ask-question" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Frequently Asked Questions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="faq-card">
                        <h6>What will happen to the deposit?</h6>
                        <p>
                            Once collected, the deposit will be placed into a government-authorised deposit custodial
                            scheme.
                            Namely, mydeposits.
                            <a target="_blank" href="#">Learn more about mydeposits</a>.
                        </p>
                        <p>
                            We advise you to conduct an independent inventory report prior to the tenants moving in.
                            This will help avoid any disputes in deductions at the end of the tenancy.
                            <a target="_blank" href="#">Learn more about Inventory Services</a>.
                        </p>
                        <h6>What will happen to my first month's rent?</h6>
                        <p>
                            The first month's rent will be held by Zacoota until the tenants have moved into the
                            property. The rent will be received 10 days after move-in and transferred to your
                            <a target="_blank" href="#">Nominated Bank Account</a>.
                            It is normally sent on the 8th day after move-in.
                        </p>
                        <p>
                            You can learn more about this on our FAQ about
                            <a target="_blank" href="#">why we hold onto the first month's rent for 7 days</a>.
                        </p>
                        <h6>What about the remaining months?</h6>
                        <p>
                            We will collect the rent from the tenants and transfer any payments received
                            immediately to your designated bank details.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--pay by uk banks modal -->
    <div class="modal right fade tenancy-modal" id="pay-uk-bank" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Pay by UK Bank Transfer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="payment-options">
                        <div class="content-wrap">
                            <div class="fast-payment content">
                                <h6>fast payment</h6>
                                <p>Please use the following link to use our <b>fast payment </b>system:</p>
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">£</div>
                                        <input class="input-amount form-control" type="number" data-val="true"
                                               step="any"
                                               value="197.14" max="197.1400" min="0.01" name="amount"
                                               placeholder="Enter Amount To Pay">
                                    </div>
                                </div>
                                <a href="#" class="btn">Make fast payment now</a>
                                <p>By using our fast payment system you are permitting TrueLayer to initiate a payment
                                    and
                                    agree to the TrueLayer <a rel="noopener nofollow noreferrer" target="_blank"
                                                              href="https://truelayer.com/enduser_tos/">end-user
                                        terms</a>
                                    and <a rel="noopener nofollow noreferrer" target="_blank"
                                           href="https://truelayer.com/privacy/">privacy policy</a>.</p>
                            </div>
                        </div>
                        <div class="content-wrap mt-4">
                            <div class="manual-payment content">
                                <h6>Manual Payment Options</h6>
                                <p>To manually pay money by <b>bank transfer</b> please use the following details:</p>
                                <div class="bank-details">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Payee (Optional):</td>
                                            <td><b>Zacoota Ltd</b></td>
                                        </tr>
                                        <tr>
                                            <td>Account Number:</td>
                                            <td><b>10708955</b></td>
                                        </tr>
                                        <tr>
                                            <td>Sort Code:</td>
                                            <td><b>04-00-60</b></td>
                                        </tr>
                                        <tr>
                                            <td>Payment Reference:</td>
                                            <td><b>1013754</b></td>
                                        </tr>
                                        <tr>
                                            <td>Amount:</td>
                                            <td><b>£197.14</b> (or any partial amount)</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="text-danger"><i class="fa fa-exclamation-triangle"
                                                                             aria-hidden="true"></i> Please ensure the sort code and account number match exactly</span>
                                            </td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <p>This amount will be confirmed instantly upon receipt to all tenants and the
                                    landlord.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- International Bank modal -->
    <div class="modal right fade tenancy-modal" id="international-bank" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Pay by International Bank Transfer (24 hour delay)</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="payment-options">
                        <div class="head">
                            <p>If you are paying us from a non-UK account, we recommend you pay through TransferWise and
                                not via bank transfer.</p>
                            <p>You will save up to 89% compared to using your bank. TransferWise use the real mid-market
                                exchange rate and charge a much lower upfront fee instead.</p>
                            <p>Please use the following link to see more information and set up the payment:</p>
                        </div>
                        <div class="content-wrap">
                            <div class="transferwise content">
                                <h6>TransferWise Instructions</h6>
                                <ul>
                                    <li>Enter the total payment amount <b>£197.14 (GBP)</b> in the "Recipient gets" box
                                    </li>
                                    <li>Ensure the currency is set to GBP</li>
                                    <li>Click the padlock</li>
                                </ul>
                                <div class="instruction-video">

                                </div>

                                <div class="bank-details">

                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Total Amount:</td>
                                            <td><b> £197.14 (GBP)</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> Who are you sending money to?</td>
                                            <td><b>"Business or charity"</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Their email:</td>
                                            <td><b>leave blank</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Name of the business / charity:</td>
                                            <td><b>Zacoota Ltd</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>I know their bank details:</td>
                                            <td><b><i class="fa fa-check" aria-hidden="true"></i></b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>UK Sort Code:</td>
                                            <td><b>04-00-72</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Account Number:</td>
                                            <td><b>10708952</b></td>
                                            <td>
                                                <span class="text-danger"><i class="fa fa-exclamation-triangle"
                                                                             aria-hidden="true"></i>Please ensure the sort code and account number match exactly</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Payment Reference:</td>
                                            <td><b>1013754</b></td>
                                            <td>
                                                <span class="text-danger"> <i class="fa fa-exclamation-triangle"
                                                                              aria-hidden="true"></i>Incorrect payment references will cause delays</span>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>


                                </div>
                                <a href="#" class="btn">
                                    go to transferWise
                                </a>

                            </div>
                        </div>
                        <div class="content-wrap mt-4">
                            <div class="manual-payment content">
                                <h6>IBAN / International Bank Details</h6>
                                <p><b>The transfer will need to be set up such that we receive payment in GBP (£), for
                                        the full amount owed. Failure to do so will mean we incur a charge for the
                                        transaction, and in such a case you would need to make up that charge by sending
                                        any outstanding bank fees relating to the transaction.</b></p>
                                <div class="bank-details">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Account name or Beneficiary name:</td>
                                            <td><b>Zacoota Ltd</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Account Number:</td>
                                            <td><b>73212165</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sort Code:</td>
                                            <td><b>20-79-06</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>IBAN:</td>
                                            <td><b>GB05BUKB20790673212165</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>SWIFT Code:</td>
                                            <td><b>BARCGB22</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Receive Amount:</td>
                                            <td><b>£197.14 (GBP)</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Payment Reference:</td>
                                            <td><b>1013754</b></td>
                                            <td><span class="text-danger"> <i class="fa fa-exclamation-triangle"
                                                                              aria-hidden="true"></i> Incorrect payment references will cause delays</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bank:</td>
                                            <td><b>BARCLAYS BANK PL, Leicester, Leicestershire, United Kingdom, LE87
                                                    2BB</b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Beneficiary mailing address:</td>
                                            <td><b>Euro House, 1394 High Road, London, N20 9YZ</b></td>
                                            <td></td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                                <p>As international transfers typically take 3+ working days to reach us, we recommend
                                    you make payment as soon as possible, to ensure move-in isn't delayed.</p>
                            </div>
                            <div class="content payment-send">
                                <p><b>Then once you've paid, you have to click here to enable us to process payment.</b>
                                </p>
                                <a href="#" class="btn">I have sent payment for the remaining £197.14</a>
                                <p>Please note that however you make payment, the transfer will need to be set up such
                                    that we receive payment in GBP (£). Failure to do so will mean we incur a charge for
                                    the transaction, and in such a case you would need to make up that charge by sending
                                    any outstanding bank fees relating to the transaction.</p>
                                <p>If you have any problems, or the payment has taken over 3 days, please just <a
                                            href="#">send us a message</a> and provide your payment reference details.
                                    We can then open an investigation.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!--pay Instalments modal -->
    <div class="modal right fade tenancy-modal" id="pay-instalments" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Pay in Instalments</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="payment-options">
                        <div class="content-wrap">
                            <div class="content">
                                <h6>Pay in Instalments</h6>
                                <p>Borrow at great rates and repay during the tenancy.</p>

                                <a href="#" class="btn">get a load today</a>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--pay  UK Debit Card modal -->
    <div class="modal right fade tenancy-modal" id="pay-debit-card" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Pay Outstanding Balance By UK Debit Card</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="payment-options">
                        <div class="content-wrap">
                            <div class="content">
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

<?php
include('footer.php');
?>