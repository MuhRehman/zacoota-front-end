<?php
include('header.php');
?>

<div class="insta-breadcrumb">
    <div class="container">
        <ul>
            <li class="complete">
                <div class="caption"><span>Initiate Rent </span></div>
            </li>
            <li class="current">
                <div class="caption"><span>Tenant Referencing</span></div>
            </li>
            <li>
                <div class="caption"><span>Digital Contract Signin</span></div>
            </li>
            <li>
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
                <div class="insta-progress-bar-step current">
                    <h5>Tenant Referencing</h5>
                </div>
                <div class="insta-progress-bar-step">
                    <h5>Digital Contract Signing </h5>
                </div>
                <div class="insta-progress-bar-step">
                    <h5>Pay Security Deposit &amp; Rent</h5>
                </div>
                <div class="insta-progress-bar-step">
                    <h5>Complete</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="references-status tenant-status">
    <div class="container">
        <!--  information      -->
<!--        <div class="information">-->
<!--            <div class="row">-->
<!--                <div class="col-md-7">-->
<!--                    <p> For help with the referencing process please read our help guide:</p>-->
<!--                </div>-->
<!--                <div class="col-md-5">-->
<!--                    <a href="#">Referencing Help Guide</a>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
        <div class="content-wrap">
            <div class="heading-text content">
                <h3>Your Referencing Status - In Progress</h3>
            </div>
            <div class="content property-details">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Property:</h3>
                        <a href="#">
                            9 Sewell Road,<br>
                            Bradford<br>
                            BD3 9TD
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="info">
                            <p class="title">
                                <i class="fa fa-info-circle" aria-hidden="true"></i> Please wait for landlord to proceed
                            </p>

                            <p>To ask a landlord a question, please do so with the contact information below. We will
                                notify you by email of all updates.</p>
                        </div>
                    </div>
                </div>


            </div>
            <!--    landlord        -->
            <div class="landlord content">
                <h3>want to Ask your Landlord <span class="name"> Nasim Akhtar</span> a question?</h3>
                <div class="send-msg">
                    <a href="#">Send message</a>
                </div>

            </div>
            <!--     referencing in Progress -->
            <div class="references content">
                <h3>References in progress (requested by landlord)</h3>
                <p>Once we've completed referencing, we will send you an email with a summary of what we've found a
                    full detailed report </p>
                <p>For further information about your references please contact Rentguard: 01227 467 250</p>
                <table class="table references-table">
                    <tbody>
                    <tr>
                        <td>
                            <span class="name">Mark ott </span> (Guarantor)<br>
                            Comprehensive Reference
                        </td>
                        <td>
                            <span class="status">Awaiting tenant to complete referencing application</span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span class="name">Khuram qadeer</span> <br>
                            Comprehensive Reference In Progress
                        </td>
                        <td>
                            <span class="status">Awaiting tenant to complete referencing application</span>
                        </td>


                    </tr>

                    </tbody>
                </table>

            </div>
            <!--    Not Being Referenced -->
            <div class="references content">
                <h3>References not required</h3>
                <p>This is a list of tenants that the landlord has <b>not </b>requested to be referenced.</p>
                <table class="table references-table">
                    <tbody>
                    <tr>
                        <td>
                            <span class="name"> Mark ott </span>(Lead tenant)
                        </td>

                    </tr>
                    <tr>

                        <td>
                            <span class="name"> Sam Malik</span>
                        </td>

                    </tr>

                    </tbody>
                </table>


            </div>

            <!--    Proposed Applicant      -->
            <div class="proposed-applicant content">
                <h3>Proposed Tenants / Guarantor</h3>
                <ul>
                    <li>
                        <h6>Zakk joe</h6>
                        <span> Guarantor for sam malik</span>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> sammalik@gmail.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +447932107444</p>

                    </li>
                    <li>
                        <h6>ALi waris</h6>
                        <span> tenant</span>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> sammalik@gmail.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +447932107444</p>


                    </li>
                </ul>
            </div>
            <!--   add tenants and  guarantor -->
            <div class="new-applicant h-100 content">
                <div class="row align-items-center h-100">
                    <div class="col-md-6 mx-auto">
                        <h6>Add Additional Tenant or request Guarantor</h6>
                        <div class="action-btn ">
                            <a class="btn add-tenant" data-toggle="modal" data-target="#add_tenant">
                                <i class="fa fa-user-plus" aria-hidden="true"></i> Add tenant
                            </a>
                            <a class="btn add-guarantor" data-toggle="modal" data-target="#add_guarantor">
                                <i class="fa fa-user-plus" aria-hidden="true"></i> Add or Request Guarantor
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info">
                            <p>Additional application can be added later. with tenants also able to propose additional
                                applicants for approval. However if you know you want to ad an additional tenant, or a
                                guarantor, please click the applicant link.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--            unverified emails-->
            <div class="unverified-emails content">
                <div class="inner">
                    <h3>Update Unverified Emails</h3>
                    <p>Not all tenants/guarantors have created their OpenRent accounts yet, please check their email
                        addresses are valid and update if required.</p>
                    <p>When you update an email address we will invite the new email to join this Rent Now
                        application.</p>
                    <p>We will also inform the landlord that their address has changed.</p>
                    <span class="form-text ">That Email address doesn't look right to us, can you double check it? We won't be able to send a verification email if your address doesn't work!</span>
                    <table class="table desktop-view">

                        <tbody>
                        <tr>
                            <td>
                                <span class="name">Mark Otto</span>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email_update"
                                           aria-describedby="emailHelp" value="shaif@gmail.com">
                                </div>
                            </td>

                            <td>
                                <a href="javascript:void(0)" class="btn update">Update</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table mobile-view">

                        <tbody>
                        <tr>
                            <td>
                                <span class="name">Mark Otto</span>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email_update"
                                           aria-describedby="emailHelp" value="shaif@gmail.com">
                                </div>
                            </td>
                            <td>
                                <a href="javascript:void(0)" class="btn update">Update</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="content Cancel-deposit">

                <a href="#" class="btn-3" data-toggle="modal" data-target="#contract_cancle"> See cancel options</a>
            </div>
        </div>
    </div>
</div>



<!--Cancel option modal-->
<div class="modal right fade option-modal" id="contract_cancle" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Cancel Options</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
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
                <div class="modal-footer">
                    <a href="#" class="cancel">
                        Forfeit Holding Deposit and Cancel Rent Now
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
<?php
include('footer.php');
?>
