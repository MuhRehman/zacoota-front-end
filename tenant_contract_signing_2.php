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
            <li class="">
                <div class="caption"><span> Tenants credit check</span></div>
            </li>
            <li class="current">
                <div class="caption"><span> Contract Signing</span></div>
            </li>
            <li>
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
                <div class="insta-progress-bar-step">
                    <h5>Tenants credit check</h5>
                </div>
                <div class="insta-progress-bar-step current ">
                    <h5>Contract Signing<</h5>
                </div>
                <div class="insta-progress-bar-step">
                    <h5>Pay Deposit &amp; Rent</h5>
                </div>
                <div class="insta-progress-bar-step">
                    <h5>Complete</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contract-signing">
    <div class="container">
        <div class="content-wrap">
            <!--    heading        -->
            <div class="content heading-text">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Tenancy Agreement - Contract</h2>
                    </div>

                </div>
            </div>

            <div class="content">
                <h2>Congratulations</h2>
               <p>You have successfully signed this contract.</p>
            </div>
            <div class="content awaiting-signature">
                <h2>Awaiting signature</h2>
                <p>We are still awaiting actions from:</p>
                <table class="table awaiting">
                    <tbody>
                    <tr>
                        <td>
                            <span class="name">Nasim Akhtar (Landlord can only sign once all tenants and guarantors have signed)</span>
                        </td>

                        <td>
                            <div class="action-btn">
                                <a href="#">send message</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="name">M Ali (landlord co-signatory)</span>
                        </td>

                        <td>
                            <div class="action-btn">

                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>When all parties have signed, a final version will be sent out, and made available on your Zacoota dashboard.</p>

            </div>

            <div class="content manage-contract">
                <h2>Manage Contract</h2>
                <div class="flex">
                    <a href="#" class="btn-1"> Download Preliminary Contract</a>
                    <a href="#"  class="btn-1">  Manage My Tenancy</a>
                    <a href="#"  class="btn-3" data-toggle="modal" data-target="#contract_cancle"> See cancel options</a>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- reject option Modal -->
<div class="modal right fade option-modal" id="contract_cancle" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Cancel Options</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="cancel-deposit">
                    <p>You have placed a holding deposit on this property - as such, cancelling or pulling out of the tenancy at this stage will result in you losing your holding deposit.</p>
                    <p>Zacoota will pass on this holding deposit to the landlord in order to partly compensate them for the time lost in this application so far.</p>
                    <p>
                        Please refer to our <a href="#">holding deposit terms and conditions</a> which you agreed to before placing your deposit for more information.
                    </p>
                    <div class="form-group">
                        <input data-val="true" id="Agreetocancle" name="AgreeToTerms" type="checkbox" value="true">
                        <label for="Agreetocancle">I understand the £23 holding deposit will be passed to the landlord</label>
                    </div>

                </div>


            </div>
            <div class="modal-footer">
                <a href="#" class="cancel">
                    Forfeit Holding Deposit and Cancel Rent Now
                </a>
            </div>

        </div>
    </div>
</div>

<?php
include('footer.php');
?>
