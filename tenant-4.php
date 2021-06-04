
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
    <div class="contract-signed">
        <div class="container">
            <div class="content-wrap">
                <div class="content">
                    <h2>Tenancy Agreement - Contract</h2>
                </div>
                <div class="content">
                    <h2>Congratulations</h2>
                    <p>You have successfully signed this contract.</p>
                </div>
                <div class="content download-contract">

                    <h6>The contract will be sent via email to all parties, and is also available for download:</h6>
                    <div class="flex">
                        <a href="#" class="btn-1"> Download Contract</a>
                    </div>
                </div>
                <div class="content full-payments">
                    <h2>What happens next?</h2>
                    <p>We are now expecting immediate payment for the deposit and first month of rent.</p>
                    <p>How to pay, and details on how to make alternative payment arrangements, can be found here:</p>
                    <a href="#">View full payment status </a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include('footer.php');
?>