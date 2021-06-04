<?php
include('header.php');
?>


    <!--breadcrumbs-->

    <div class="insta-breadcrumb">
        <div class="container">
            <ul>
                <li class="complete">
                    <div class="caption"><span>Tenants initiate Rent Now </span></div>
                </li>
                <li class="complete">
                    <div class="caption"><span> Tenants credit check</span></div>
                </li>
                <li class="complete">
                    <div class="caption"><span>Digital Contract Signing</span></div>
                </li>
                <li class="current">
                    <div class="caption"><span> Pay Deposit &amp; Rent</span></div>
                </li>
                <li>
                    <div class="caption"><span> Complete</span></div>
                </li>
            </ul>

        </div>
    </div>
    <div class="insta-progress-bar">
        <div class="container">
            <a class="collapsed" data-toggle="collapse" href="#progress_bar" role="button" aria-expanded="false">
                <span class="count">1</span> Tenants initiate Rent Now
            </a>
            <div class="collapse " id="progress_bar" style="">
                <div class="card card-body">
                    <div class="insta-progress-bar-step complete">
                        <h5>Tenants initiate Rent Now</h5>
                    </div>
                    <div class="insta-progress-bar-step complete">
                        <h5>Tenants credit check</h5>
                    </div>
                    <div class="insta-progress-bar-step complete ">
                        <h5>Digital Contract Signing<</h5>
                    </div>
                    <div class="insta-progress-bar-step current">
                        <h5>Pay Deposit &amp; Rent</h5>
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
                        <div class="content payment-alert" style="display:none;">
                            <h6>Tenants Paid By International Bank Transfer</h6>
                            <p>The tenants have told us that this payment has been sent by international bank transfer. Due to the nature of international bank transfers, this is not instant, but once we have received payment, all parties will be notified by email.</p>
                        </div>
                        <div class="amend-contract">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Have you changed the move-in date since signing the contract? If so, you can make
                                        amendments to the contract here:</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="action-btn">
                                        <a href="#">amend contract</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-wrap">
                            <div class="content">
                                <h2>Landlord Awaiting Full Payment - Remaining Deposit & One Month's Rent</h2>
                                <p>We are still waiting for the final balance to be paid by the tenants. Until we
                                    receive
                                    payment, we are unable to set up your tenancy and cannot instruct for handover of
                                    the
                                    keys</p>
                            </div>
                            <div class="content">
                                <h6>Need to contact the lead tenant <span class="name"> johan joe</span> ?</h6>
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
                                    <p>This amount must be paid before the tenants are given the keys</p>
                                </div>
                            </div>
                            <!--  already paid amount table for mobile    -->
                            <div class="content already-paid">
                                <h6>Already received the Final Balance?</h6>
                                <p>
                                    If you have already received payment directly from the tenants, please let us know here:
                                </p>
                                <a href="#">
                                    The tenant has paid me directly
                                </a>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-12">
                                        <h6>How do the tenants pay ?</h6>

                                        <div class="info" style="display: block;">
                                            <p>Tenants are given the option to pay by Debit Card, UK Bank Transfer, or
                                                International Bank Transfer. We have provided our payment details,
                                                please do
                                                not ask the tenants to pay you directly.</p>
                                            <p>We need to receive the final balance in order to set up your tenancy.</p>
                                        </div>
                                    </div>
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
                                       data-target="#landlord-surrender-tenancy">Cancel Option</a>
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
                            <p>This amount must be paid before the tenants are given the keys</p>
                        </div>
                        <div class="already-received">
                            <p>If you have already received payment directly from the tenants, please let us know
                                here:</p>
                            <a href="#">
                                The tenant has paid me directly
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--landlord Cancel Options modal -->
    <div class="modal right fade option-modal" id="landlord-surrender-tenancy" tabindex="-1" role="dialog"
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
                            Once collected, the deposit will be placed into a government-authorised deposit custodial scheme.
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


<?php
include('footer.php');
?>