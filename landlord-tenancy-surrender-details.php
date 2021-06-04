<?php
include('header.php');
?>
<div class="rent-fullpayment surrender">
    <div class="container">
        <div class="content-wrap">
            <div class="content">
                <h2>Tenancy surrender</h2>
                <p>We've been informed that this tenancy is being surrendered.</p>
            </div>
            <div class="content bg-war">
                <div class="surrender-breakdown">
                    <h6>We have received a total of £24.00 to date: </h6>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Holding Deposit paid by Johan Joe</td>
                            <td> £24.00</td>
                        </tr>


                        <tr>
                            <td>
                                Total
                            </td>
                            <td>
                                £24.00
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="surrender-breakdown">
                    <h6>The money was apportioned as follows:</h6>
                    <table class="table">

                        <tbody>
                        <tr>
                            <td>
                                Rent - held in Zacoota Client Money account
                            </td>
                            <td>
                                £24.00
                            </td>
                        </tr>


                        <tr>
                            <td>
                                Total
                            </td>
                            <td>
                                £24.00
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <p><b>We intend to repay the tenant(s) the £24.00 currently held in our Client Money account.</b></p>
                <a href="#" data-toggle="modal" data-target="#fund_app"> Why are the funds apportioned like this?</a>

            </div>
            <div class="content">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I declare that all parties have signed a
                        surrender agreement and I would like you to return the £24.00 to the tenants and I understand
                        that releasing the funds does not in itself constitute a surrender of the tenancy. </label>
                </div>
                <div class="action-btn flex">
                    <a href="#" class="btn-3">Confirm surrender</a>
                    <a href="#" class="btn-1">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade custom-modal" id="fund_app" tabindex="-1" role="dialog" style="display: none;"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Fund Apportionment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="fund-app">
                    <h6>Why are all funds returned to the tenant(s)?</h6>
                    <p>By clicking "all parties agree to surrender the tenancy" you confirm that you, the landlord, are
                        withdrawing from the tenancy. </p>
                    <p>If the tenant(s) initiated the surrender process we advise that you cancel this process and ask
                        the tenants to contact us. </p>
                    <h6>What about the deposit? </h6>
                    <p>Until the full balance is paid by the tenant(s) we don’t differentiate between rent and deposit
                        so all funds will be treated the same. </p>
                    <p>Once the full balance is paid we will protect the deposit in a government approved custodial
                        scheme. As the landlord, you will need to arrange for this to be released. We will provide full
                        guidance on how to do this once the surrender is in progress. </p>
                    <h6>I’ve agreed different terms with the other parties?</h6>
                    <p>You are welcome to come to any arrangement that you wish in relation to the funds paid.
                        However, this will need to be arranged privately by those involved. OpenRent will always
                        release funds as outlined here.</p>
                    <p>We recommend that the treatment of all funds is clearly stated in the <a href="#">surrender
                            agreement</a> that you should sign before proceeding. </p>
                    <p>Once OpenRent releases the funds that we hold, you will be able to complete any private
                        arrangements with the tenant(s). </p>
                    <h6>How long will it take for the funds to be returned?</h6>
                    <p>Any card payments will be refunded back onto the card that was used to make the payment. This
                        can take up to 10 working days.</p>
                    <p>Any funds paid by bank transfers will be paid back into the same account that they were
                        received from. This can take up to three working days.</p>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>
