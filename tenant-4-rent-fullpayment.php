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
            <div class="container-fluid p-0">

                <div class="flex">
                    <div class="main-content">
<!--       show when international payment done                 -->
                        <div class="content payment-alert" style="display: none">
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
                            <div class="content tb-view">
                                    <h6>Amount Due <span class="total"> £197.14</span></h6>
                                    <h5 class="breakdown">Breakdown</h5>
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
                            <div class="content tb-view">
                                <div class="already-received">
                                    <h6>Already paid the Final Balance?</h6>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#directly-paid">
                                        I've paid the Landlord Directly
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h6>Need to contact the landlord <span class="name"> Sam malik</span> ?</h6>
                                <div class="send-msg">
                                    <a href="#">Send message</a>
                                </div>
                            </div>
                            <!--   outstanding amount table for mobile    -->
                            <div class="content outstanding-amount">
                                <h6>Amount Due <span class="total"> £197.14</span></h6>
                                <h5 class="breakdown">Breakdown</h5>
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
                                <a href="javascript:void(0)" class="btn-black" data-toggle="modal" data-target="#directly-paid">
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
                    <div class="side-bar">
                        <h6>Amount Due <span class="total"> £197.14</span></h6>
                        <h5 class="breakdown">Breakdown</h5>
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
                        <div class="already-received">
                            <h6>Already paid the Final Balance?</h6>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#directly-paid">
                                I've paid the Landlord Directly
                            </a>


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
    <!--directly paid to landlord  modal -->
    <div class="modal fade custom-modal" id="directly-paid" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>I've paid the Landlord Directly</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>We have not been notified of any payment. Please ensure that you have paid using the bank
                        details provided on this page.</p>
                    <p>If you have instead paid the landlord directly, further actions will be required from the
                        landlord. If this is the case, let us know using the button below and we will get in
                        touch with the landlord.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="paid">I've paid the Landlord Directly</a>
                </div>

            </div>
        </div>
    </div>



<?php
include('footer.php');
?>