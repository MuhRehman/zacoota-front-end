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

<div class="references-status">
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
                                <i class="fa fa-info-circle" aria-hidden="true"></i>  Please start the referencing process with our referencing partner Rentguard:
                            </p>

                            <p>Please watch out for emails from Rentguard. Don't forget to check your spam and junk folders!</p>
                            <p><strong>For more information or to accelerate your referencing please contact Rentguard on: <a href="tel:+441227467250">01227 467 250</a> <br>(Quote Zacoota 1013754)</strong></p>
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
                        <td>

                        </td>
                        <td>
                            <div class="send-btn">
                                <a href="#">Send message</a>
                            </div>
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
                        <td>

                        </td>
                        <td>
                            <div class="send-btn">
                                <a href="#">Send message</a>
                            </div>
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
                        <td>

                        </td>
                        <td>
                            <div class="send-btn">
                                <a href="#">Send message</a>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <span class="name"> Sam Malik</span>
                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="send-btn">
                                <a href="#">Send message</a>
                            </div>
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
                        <a href="javascript:void(0)" class="approve">Accept</a>
                        <a href="javascript:void(0)" class="remove" data-toggle="modal" data-target="#tenant_rejected">Reject</a>

                    </li>
                    <li>
                        <h6>ALi waris</h6>
                        <span> tenant</span>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> sammalik@gmail.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +447932107444</p>
                        <a href="javascript:void(0)" class="approve">Accept</a>
                        <a href="javascript:void(0)" class="remove" data-toggle="modal"
                           data-target="#guarantor_rejected">Reject</a>

                    </li>
                </ul>
            </div>
            <!--   add tenants and  guarantor -->
            <div class="new-applicant h-100 content">
                <div class="row align-items-center h-100">
                    <div class="col-md-6 mx-auto">
                        <h6>Add Additional a Guarantor</h6>
                        <div class="action-btn ">
                            <a class="btn add-guarantor" data-toggle="modal" data-target="#add_guarantor">
                                <i class="fa fa-user-plus" aria-hidden="true"></i> Add Guarantor
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



        </div>
    </div>
</div>




<?php
include('footer.php');
?>
