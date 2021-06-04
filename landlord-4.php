
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
                    <p>We are now awaiting payment for the deposit and first month of rent from the tenants. No further action is required from the landlord.</p>
                    <p>More information, including when payment is expected and how it is processed, can be found here</p>
                    <a href="#">View full payment status </a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include('footer.php');
?>