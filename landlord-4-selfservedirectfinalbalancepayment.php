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
        <div class="resolve-payment">
            <div class="container">
                <div class="content-wrap">
                    <div class="content">
                        <h2>Resolve Direct Payment - Remaining Deposit & One Month's Rent</h2>
                    </div>
                    <div class="content">
                        <h6>Thanks For Letting Us Know That You've Received The Outstanding Balance Directly From The Tenant.</h6>
                        <p>Unfortunately it's not compatible with our contract for the landlord to accept payment of the deposit and / or first month's rent from the tenant directly. Until the final payment is settled the contract is not fully in effect and therefore does not offer full protection to either yourself, or your tenants.</p>
                        <p>There are now two options for how to proceed:</p>
                        <ul>
                            <li>Complete with Rent Now, by transferring the balance of deposit and first month's rent to Zacoota</li>
                            <li>Surrender the existing Rent Now contract and sign a private agreement with your tenants.
                                <a class="pop-over-button" data-toggle="popover" data-placement="top" data-html="true" data-content="Unfortunately it's not compatible with our contract for the landlord to accept payment of the deposit and first month's rent from the tenant directly. The agreement specifically states how rent and deposit money will be treated, so if you make alternative arrangements to those agreed in the document we can't guarantee that it will hold up in court nor that you have complied with all legal requirements regarding treatment of the deposit." data-original-title="" title="">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h6> Payment Options</h6>
                        <p>To complete the tenancy creation process please transfer the final balance to the details outlined below:
                        </p>
                        <p><b>Please note that these payment details are unique and should not be used to make any subsequent payments</b></p>
                        <div class="bank-details">
                            <p>Payee (Optional): <b>Zacoota Ltd</b>
                            </p><p>Account Number: <b>10708955</b> </p>
                            <p>Sort Code: <b>04-00-60</b></p>
                            <p>Payment Reference: <b>1013754</b> </p>
                            <p>Amount: <b>£197.14</b> (or any partial amount)</p>
                            <p class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Please ensure the sort code
                                and account number match exactly</p>

                        </div>
                        <p>
                            We'll confirm receipt of payment as soon as it reaches our account and if you have any
                            questions please don't hesitate to
                            <a class="useChatIfPossible" href="javascript:void(0)">contact us</a>.
                        </p>
                    </div>
                    <div class="content surrender">
                        <div class="flex">
                            <a href="#" class="btn-3"> Surrender this tenancy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include('footer.php');
?>