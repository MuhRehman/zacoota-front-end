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
                <h2>signed</h2>
                <table class="table signed">
                    <tbody>
                    <tr>
                        <td>
                            <span class="name">Sam Mailk</span>
                        </td>
                        <td><span class="status">signed</span> </td>
                        <td>
                            <div class="action-btn">
                                <a href="#">send message</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="content awaiting-signature">
                <h2>Awaiting signature</h2>
                <p><i class="fa fa-info-circle" aria-hidden="true"></i> Please wait for tenants, guarantors and co‑signatories to sign first</p>
                <table class="table awaiting">
                    <tbody>
                    <tr>
                        <td>
                            <span class="name">Yassir Hussein (guarantor)</span>
                        </td>
                        <td><span class="status">awaiting signature</span> </td>
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
                        <td><span class="status">awaiting signature</span> </td>
                        <td>
                            <div class="action-btn">
                                <a href="#">send message</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>The contract must first be signed by all the tenants and any guarantors, then it will become available for you, the landlord, to sign.</p>
                <p>We have notified the tenants of this process.</p>
                <div class="info">
                    <p>Once all signatures have been received from the tenants, you will be notified via email at nas.akhtar1@outlook.com.</p>
                </div>
            </div>
            <div class="content action-btn">
                <div class="flex">
                    <a href="#" class="btn-1">
                        Manage References
                    </a>

                </div>
            </div>
            <div class="content manage-contract">
                <h2>Manage Contract</h2>
                <div class="info-box">
                    <p>Remember - This is a legally binding contract. Make sure you understand what is required of you.</p>
                </div>
                <p>If you want to download a copy before signing, an unsigned version is available here:</p>
                <p>Updating the contract details will mean that any parties that have signed (shown above) will need to sign again.</p>
                <div class="flex">
                    <a href="#" class="btn-1"> View Unsigned Contract</a>
                    <a href="#"  class="btn-1"> Edit Contract</a>
                    <a href="#"  class="btn-3" data-toggle="modal" data-target="#contract_cancle"> See cancel options</a>
                </div>
            </div>

        </div>
        <div class="content-wrap mt-4">
            <div class="content legal-covered">
                <h2>Make sure you are legally covered</h2>
                <p>As per all tenancies in the UK, you are required by law to make sure any Gas and Electrical fittings are safe and functional.</p>
                <p>If you still need to book engineers to certify your property, you can do so below:</p>
                <ul>
                    <li>
                        <img src="assets/images/costs-up-front.png" class="img-fluid">
                        <h5>Gas Safety</h5>
                        <p>from £45</p>
                        <a href="#">Book Engineer now</a>
                    </li>
                    <li>
                        <img src="assets/images/costs-up-front.png" class="img-fluid">
                        <h5>Electrical Safety</h5>
                        <p>from £69</p>
                        <a href="#">Book Engineer now</a>
                    </li>
                    <li>
                        <img src="assets/images/costs-up-front.png" class="img-fluid">
                        <h5>EPC</h5>
                        <p>from £69</p>
                        <a href="#">Book Engineer now</a>
                    </li>

                </ul>
            </div>
            <div class="content inventory h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-6 mx-auto">
                        <h6>Have you organised an inventory for your new tenancy?</h6>
                        <a href="#">Order inventory now</a>
                    </div>
                    <div class="col-md-6">
                        <div class="info">
                            <p>
                                To ensure you can claim for any damages against your deposit, you need an inventory and schedule of condition for your property.

                                OpenRent can ensure you have an inventory compliant for all deposit schemes, and legal proceedings, with prices starting from only £85
                            </p>
                        </div>
                    </div>
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
                <div class="no-available">
                    <div class="wrap">
                      <p>If it is no longer possible to offer the property to these tenant(s) then please cancel the application using the button below. By cancelling the application promptly you are allowing the tenant(s) to restart their search for a new home as soon as possible.</p>
                        <a href="#"> <i class="fa fa-times"></i> Cancel Application</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<?php
include('footer.php');
?>
