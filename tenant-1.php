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

<!--if landlord request for guarantor -->
<div class="guarantor-request">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-7">
                    <p><i class="fa fa-info-circle" aria-hidden="true"></i> The landlord has requested you provide a
                        guarantor</p>

                </div>
                <div class="col-md-5">
                    <div class="action-btn">
                        <a href="#" class="btn add" data-toggle="modal" data-target="#add_guarantor"><i
                                    class="fa fa-plus" aria-hidden="true"></i> Add A Guarantor</a>
                        <a href="#" class="btn reject"><i class="fa fa-times"></i> Unable To Provide Guarantor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="Congrat-div">
    <div class="container h-100">
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

<div class="holding-deposit-view">
    <div class="container">
        <div class="wrap">
            <div class="instarent-propery-details">
                <div class="inner">
                    <div class="flex">
                        <div class="image">
                            <a href="#">
                                <img src="assets/images/savings-card.jpg" class="img-fluid" alt="porperty iamge">
                            </a>
                        </div>
                        <div class="content">
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

            <!--    house mates            -->
            <div class="housemates">
                <h3>My Housemates</h3>
                <table class="table desktop-view">
                    <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col"> Phone</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>+447932107444</td>
                        <td>oneday2144@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Sam</td>
                        <td>Malik</td>
                        <td>+447932107444</td>
                        <td>oneday2144@gmail.com</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table mobile-view">
                    <tbody>
                    <tr>
                        <td>
                            <span>Mark ott</span>
                            oneday2144@gmail.com - +447932107444

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Sam Malik</span>
                            oneday2144@gmail.com - +447932107444

                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="email_send">
                    <a class="btn send-mail" href="mailto:tenantname@gmail.com">
                        <i class="fa fa-plus" aria-hidden="true"></i> Send Email To All Parties
                    </a>
                </div>
            </div>

            <!--    guarantors            -->
            <div class="guarantors">
                <h3>Guarantors</h3>
                <table class="table desktop-view">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col"> Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Guarantors For</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Zakk</td>
                        <td>+447932107444</td>
                        <td>oneday2144@gmail.com</td>
                        <td>Sam</td>
                    </tr>

                    </tbody>
                </table>
                <table class="table mobile-view ">
                    <tbody>
                    <tr>
                        <td><span>Zaki shah - (Guarantor For Sam Malik)</span>
                            oneday2144@gmail.com - +447932107444
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="email_send">
                    <a class="btn send-mail" href="mailto:tenantname@gmail.com">
                        <i class="fa fa-plus" aria-hidden="true"></i> Send Email To All Parties
                    </a>
                </div>

            </div>


            <!--     guarantors and tenants    -->
            <div class="guarantors_tenants ">
                <div class="inner">
                    <h3>Need to add tenants or guarantors?</h3>
                    <h6>Add Additional Tenant or request Guarantor</h6>
                    <p>As the lead tenant, if you would like to add a guarantor, or an additional tenant, you can do
                        so
                        here:</p>
                    <div class="action-btn ">
                        <a class="btn add-tenant" data-toggle="modal" data-target="#add_tenant">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> Add tenant
                        </a>
                        <a class="btn add-guarantor" data-toggle="modal" data-target="#add_guarantor">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> Add A Guarantor
                        </a>
                    </div>
                    <p><b><i class="fa fa-info-circle" aria-hidden="true"></i> Note: The landlord will need to accept
                            the new person, and will decide whether they are
                            referenced or not.</b></p>
                </div>
            </div>

            <!--   Proposed  tenants        -->
            <div class="housemates pro-tenants">
                <h3>Proposed Tenants</h3>
                <table class="table desktop-view">
                    <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col"> Phone</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>+447932107444</td>
                        <td>oneday2144@gmail.com</td>
                    </tr>

                    </tbody>
                </table>
                <table class="table mobile-view">
                    <tbody>
                    <tr>
                        <td>
                            <span>Mark ott</span>
                            oneday2144@gmail.com - +447932107444

                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>

            <!--  Proposed  guarantors            -->
            <div class="guarantors pro-guarantor">
                <h3>Proposed Guarantors</h3>
                <table class="table desktop-view">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col"> Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Guarantors For</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Zakk</td>
                        <td>+447932107444</td>
                        <td>oneday2144@gmail.com</td>
                        <td>Sam</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table mobile-view ">
                    <tbody>
                    <tr>
                        <td><span>Zaki shah - (Guarantor For Sam Malik)</span>
                            oneday2144@gmail.com - +447932107444
                        </td>
                    </tr>
                    </tbody>
                </table>


            </div>


        </div>
    </div>
</div>

<!--            unverified emails-->
<div class="unverified-emails">
    <div class="container">
        <div class="inner">
            <h3>Update Unverified Emails</h3>
            <p>Not all tenants/guarantors have created their OpenRent accounts yet, please check their email
                addresses are valid and update if required.</p>
            <p>When you update an email address we will invite the new email to join this Rent Now application.</p>
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
                            <input type="email" class="form-control" id="email_update" aria-describedby="emailHelp"
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
                            <input type="email" class="form-control" id="email_update" aria-describedby="emailHelp"
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
</div>

<!--     deposit placed       -->
<div class="deposit-placed ">
    <div class="container">
        <div class="review-commit">
            <h6>Please note: wait for landlord to accept application</h6>
            <p>We have sent your details to the landlord, and are awaiting a response from them as to how to
                proceed.</p>
            <p>If accepted by the landlord, we will contact you to either begin referencing or ask you to
                review
                and sign the contract.</p>
        </div>

    </div>
</div>

<!--     cancel deposit      -->

<section class="cancel-deposit">
    <div class="container">
        <h3>Cancel holding deposit</h3>
        <p>You have placed a holding deposit on this property - as such, cancelling or pulling out of the tenancy at
            this stage would normally result in you losing your holding deposit.</p>
        <p>As we can see it has been over 24 hours since the holding deposit was placed and the landlord hasn't
            responded, you can pull out with no penalty at this stage.</p>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="conform_cancel">
            <label class="form-check-label" for="conform_cancel"> I confirm I am retracting my offer on this
                property</label>
        </div>
        <button class="btn cancel-btn">
            Retract Offer and Cancel Rent Now Application
        </button>
    </div>
</section>


<!-- add tenant Modal -->
<div class="modal fade" id="add_tenant" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Add Tenant</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="success alert alert-success">
                    <p>Thanks - Tenant Application has been sent to the landlord. They will only be added to the list
                        below once the landlord confirms your request.</p>
                </div>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control f_name" id="first_name" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control la_name" id="last_name" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control phone_number" id="user_number"
                               placeholder="phone number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control tenant_email" id="user_email"
                               placeholder="Email address">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn">Add</button>
                <!--     when tenant is add message success show the show this button      -->
                <button type="button" class="btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- add Guarantor Modal -->
<div class="modal fade" id="add_guarantor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Add Guarantor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="success alert alert-success">
                    <b>Success!</b>
                    <p>Thanks - Guarantor application has been sent to the landlord. They will only be added to the list below once the landlord confirms your request.
                    </p>
                </div>
                <p>Add a pre-agreed guarantor to the tenancy:</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control f_name" id="first_name" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control la_name" id="last_name" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control phone_number" id="user_number"
                               placeholder="phone number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control tenant_email" id="user_email"
                               placeholder="Email address">
                    </div>
                    <div class="guarantor-for">
                        <h6> Guarantor for: (optional)</h6>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check_all">
                                    <label class="form-check-label" for="check_all">Everyone</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="tenant_1">
                                    <label class="form-check-label" for="tenant_1">Zakk Raja</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="tenant_2">
                                    <label class="form-check-label" for="tenant_2">Sam Malik</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="tenant_3">
                                    <label class="form-check-label" for="tenant_3">Khuram Mughal</label>
                                </div>
                            </li>
                        </ul>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn add-guarantor">Add</a>

            </div>
        </div>
    </div>
</div>

<script>
    $("#check_all").click(function () {
        $('div#add_guarantor input:checkbox').not(this).prop('checked', this.checked);
    });
</script>
<?php
include('footer.php');
?>
