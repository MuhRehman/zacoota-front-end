<?php
include('header.php');
?>

    <!--breadcrumb-->
    <div class="insta-breadcrumb">
        <div class="container">
            <ul>
                <li class="current">
                    <div class="caption"><span>Initiate Rent </span></div>
                </li>
                <li>
                    <div class="caption"><span>Tenant Referencing</span></div>
                </li>
                <li>
                    <div class="caption"><span>Digital Contract Signin</span></div>
                </li>
                <li>
                    <div class="caption"><span> Pay Security Deposit & Rent</span></div>
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
                    <div class="insta-progress-bar-step current">
                        <h5>Initiate Rent</h5>
                    </div>
                    <div class="insta-progress-bar-step">
                        <h5>Tenant Referencing</h5>
                    </div>
                    <div class="insta-progress-bar-step">
                        <h5>Digital Contract Signing </h5>
                    </div>
                    <div class="insta-progress-bar-step">
                        <h5>Pay Security Deposit & Rent</h5>
                    </div>
                    <div class="insta-progress-bar-step">
                        <h5>Complete</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="holding-deposit-tenant">
        <div class="container">
            <!--if landlord request for guarantor -->
            <div class="guarantor-request mb-3">
                <div class="inner">
                    <div class="row">
                        <div class="col-md-7">
                            <p><i class="fa fa-info-circle" aria-hidden="true"></i> The landlord has requested you
                                provide a
                                guarantor</p>

                        </div>
                        <div class="col-md-5">
                            <div class="action-btn">
                                <a href="#" class="btn add" data-toggle="modal" data-target="#add_guarantor"><i
                                            class="fa fa-plus" aria-hidden="true"></i> Add A Guarantor</a>
                                <a href="#" class="btn reject"><i class="fa fa-times"></i> Unable To Provide
                                    Guarantor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="information">
                <h6><i class="fa fa-info-circle" aria-hidden="true"></i> Please note: wait for landlord to accept application</h6>
                <p>We have sent your details to the landlord, and are awaiting a response from them as to how to
                    proceed.</p>
                <p>If accepted by the landlord, we will contact you to either begin referencing or ask you to
                    review
                    and sign the contract.</p>
            </div>
            <div class="Congrat-div">
                <div class=" h-100">
                    <div class="wrap">
                        <div class="row align-items-center h-100">
                            <div class="col-md-8 col-sm-8 mx-auto">
                                <div class="name">
                                    <h6> Congratulations Zakk!</h6>
                                </div>
                                <p> Your holding deposit has been placed</>
                            </div>
                            <div class="col-md-4 col-sm-4 text-right">
                                <div class="deposit">
                                    <h6> Amount:</h6>
                                    <p>£807.00</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrap">
                <div class="content">
                    <div class="instarent-propery-details">
                        <div class="inner">
                            <div class="flex">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/images/savings-card.jpg" class="img-fluid"
                                             alt="porperty iamge">
                                    </a>
                                </div>
                                <div class="text">
                                    <h6><a href="#">2 Beds Room In A Shared Flat</a></h6>
                                    <p> 99 Huxley Road, London</p>
                                    <div class="rent-now-btn">
                                        <a href="#" class="btn btn-send-message">
                                            <i class="fa fa-comments"></i> Send Message to Landlord
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--    house mates            -->
                <div class="content housemates">
                    <h3>My Housemates</h3>
                    <ul>
                        <li>
                            <h6>Zakk joe</h6>
                            <span> Tenant</span>
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
                    <div class="email_send">
                        <a class="btn send-mail" href="mailto:tenantname@gmail.com">
                            Send Email To All Parties
                        </a>
                    </div>
                </div>
                <!--    guarantors            -->
                <div class="content guarantors">
                    <h3>Guarantors</h3>
                    <ul>

                        <li>

                            <h6>Zakk joe</h6>
                            <span>Guarantor for: <a href="javascript:void(0)" class="more-info" data-toggle="popover" data-placement="top" data-content="<b>Guarantor for:</b></p><p>Sam Malik</p><p>Khuram Qadeer</p><p>Muhammd Ali</p>" data-original-title="" title="">
                                                click here</a>
                                        </span>
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> sammalik@gmail.com</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +447932107444</p>
                        </li>
                    </ul>
                    <div class="email_send">
                        <a class="btn send-mail" href="mailto:tenantname@gmail.com">
                            Send Email To All Parties
                        </a>
                    </div>

                </div>
                <!--     add guarantors and tenants    -->
                <div class="content guarantors_tenants 100 ">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12 col-lg-6 mx-auto order_2">
                            <h3>Need to add tenants or guarantors?</h3>
                            <div class="action-btn ">
                                <a class="btn add-tenant" data-toggle="modal" data-target="#add_tenant">
                                    Add tenant / Guarantor
                                </a>

                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 order_1">
                            <div class="info">
                                <h6>Add Additional Tenant or request Guarantor</h6>
                                <p>As the lead tenant, if you would like to add a guarantor, or an additional tenant,
                                    you can do
                                    so here:</p>
                                <p><b><i class="fa fa-info-circle" aria-hidden="true"></i> Note: The landlord will need
                                        to accept
                                        the new person, and will decide whether they are
                                        referenced or not.</b></p>
                            </div>
                        </div>

                    </div>

                </div>

                <!--   Proposed  tenants        -->
                <div class="content pro-tenants">
                    <h3>Proposed Tenants</h3>
                    <ul>
                        <li>

                            <h6>Zakk joe</h6>
                            <span> Tenant</span>
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
                <!--  Proposed  guarantors            -->
                <div class="content pro-guarantor">
                    <h3>Proposed Guarantors</h3>
                    <ul>

                        <li>
                            <h6>Zakk joe</h6>
                            <span>Guarantor for: <a href="javascript:void(0)" class="more-info"  data-toggle="popover" data-placement="top" data-content="<b>Guarantor for:</b></p><p>Sam Malik</p><p>Khuram Qadeer</p><p>Muhammd Ali</p>" data-original-title="" title="">
                                                click here</a>
                                        </span>
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> sammalik@gmail.com</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +447932107444</p>
                        </li>
                    </ul>
                </div>
                <!--            unverified emails-->
                <div class="content unverified-emails">
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
                                               aria-describedby="emailHelp"
                                               value="shaif@gmail.com">
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
                                               aria-describedby="emailHelp"
                                               value="shaif@gmail.com">
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
                <div class="content cancel-option">
                    <h3>Cancel holding deposit</h3>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#tenant_cancel_op">Cancel Option</a>
                </div>
            </div>

        </div>
    </div>

    <div class="modal right fade option-modal" id="tenant_cancel_op" tabindex="-1" role="dialog" style="display: none;"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Cancel holding deposit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="cancel-deposit">
                        <p>You have placed a holding deposit on this property - as such, cancelling or pulling out of
                            the tenancy at
                            this stage would normally result in you losing your holding deposit.</p>
                        <p>As we can see it has been over 24 hours since the holding deposit was placed and the landlord
                            hasn't
                            responded, you can pull out with no penalty at this stage.</p>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="conform_cancel">
                            <label class="form-check-label" for="conform_cancel"> I confirm I am retracting my offer on
                                this
                                property</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="btn cancel">
                        Retract Offer and Cancel Rent Now Application
                    </a>
                </div>

            </div>
        </div>
    </div>
<script>
    $('span a.more-info').popover('hide')
</script>


<?php
include('footer.php');
?>