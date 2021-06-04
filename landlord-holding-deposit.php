<?php
include('header.php');
?>

<!--breadcrumbs-->

<div class="insta-breadcrumb">
    <div class="container">
        <ul>
            <li class="current">
                <div class="caption"><span>Tenants initiate Rent Now </span></div>
            </li>
            <li class="">
                <div class="caption"><span> Tenants credit check</span></div>
            </li>
            <li>
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
                <div class="insta-progress-bar-step current">
                    <h5>Tenants initiate Rent Now</h5>
                </div>
                <div class="insta-progress-bar-step">
                    <h5>Tenants credit check</h5>
                </div>
                <div class="insta-progress-bar-step">
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


<div class="holding-deposit-landlord">
    <div class="container">
        <!--respond div-->
        <div class="respond-application">
            <p><b>23 hours left to respond</b></p>
            <p>Application Accepted: Mon, 28 Dec 2020 06:12:21 GMT.
                You have accepted applicants, but have not yet started the Rent Now application. <a
                        href="#landlord-options">Proceed with Application</a></p>
            <span class="btn remove-div"><i class="fa fa-times"></i></span>
        </div>
        <div class="Congrat_div">
            <div class="wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="name">
                            <h2> Congratulations Sam!</h2>
                        </div>
                        <p>Your property  has received a Rent
                            Now tenancy application </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="application-for">
            <div class="">
                <div class="div">
                    <h3>Application For</h3>

                    <p><a href="#">Room in a Shared House, Sewell Road, BD3</a></p>
                </div>
                <div class="div">
                    <h3>    Move In Date: </h3>

                    <p>
                        Sep 1, 2021 <a class="btn edit" data-toggle="modal" data-target="#prop_date">
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            Change Date</a>
                    </p>
                </div>
                <div class="div">
                    <h3>  Renal Amount</h3>

                    <p> £1000 <a class="btn edit" data-toggle="modal" data-target="#rental_amount"><img src="assets/images/rental-coin.png" class="img-circle" alt="Rental icon"> Change Amount</a></p>
                </div>
            </div>
        </div>

        <div class="row application">
            <div class="col-md-12 col-lg-12">
                <div class="inner">

                    <!--    applicant  -->
                    <div class="housemates" id="applicant">
                        <h3>Applicant</h3>

                        <table class="table other-tenants">

                            <tbody>
                            <tr>
                                <td>
                                    <span>Mark ott (Lead tenant)</span>
                                    oneday2144@gmail.com - +447932107444

                                </td>
                                <td>
                                    <div class="action-bottom text-right">
                                        <a href="#" class="btn btn-send-message">
                                            Send Message
                                        </a>

                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span>Sam Malik</span>
                                    oneday2144@gmail.com - +447932107444

                                </td>
                                <td>
                                    <div class="action-bottom text-right">
                                        <a href="#" class="btn remove">Remove</a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span>Khuram Qadeer</span>
                                    oneday2144@gmail.com - +447932107444

                                </td>
                                <td>
                                    <div class="action-bottom text-right">
                                        <a href="#" class="btn remove">Remove</a>
                                    </div>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!--    guarantors            -->
                    <div class="guarantors">
                        <h3>Guarantors</h3>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td><span>Zaki shah - (Guarantor For Sam Malik)</span>
                                    oneday2144@gmail.com - +447932107444
                                </td>
                                <td>
                                    <div class="action-bottom text-right">
                                        <a href="#" class="btn remove">Remove</a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <!--   add tenants and  guarantor -->
                    <div class="guarantors_tenants landlord_option">
                        <div class="wrap">
                            <h3>Add Additional Tenant or request Guarantor</h3>
                            <p>Additional application can be added later. with tenants also able to propose additional
                                applicants for approval. However if you know you want to ad an additional tenant, or a
                                guarantor, please click the applicant link.</p>
                            <div class="action-btn ">
                                <a class="btn add-tenant" data-toggle="modal" data-target="#add_tenant">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i> Add tenant
                                </a>
                                <a class="btn add-guarantor" data-toggle="modal" data-target="#add_guarantor">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i> Add or Request Guarantor
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!--        proposed options-->
        <div class="proposed-options">
            <!--   proposed tenants -->
            <div class="guarantors pro-guarantor">
                <h3>Proposed Tenants</h3>
                <table class="table pro-gurantor">
                    <tbody>
                    <tr>
                        <td><span>Ali shah </span>
                            alishah@gmail.com - +447932107444
                        </td>
                        <td>
                            <div class="action-btn">
                                <a href="#" class="btn accept">
                                    <i class="fa fa-check"></i> Accept
                                </a>
                                <a href="#" class="btn reject"  data-toggle="modal" data-target="#tenant_rejected">
                                    <i class="fa fa-times"></i> Remove
                                </a>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
            <!--   proposed guarantor -->
            <div class="guarantors pro-guarantor">
                <h3>Proposed Guarantors</h3>
                <table class="table pro-gurantor">
                    <tbody>
                    <tr>
                        <td><span>Zaki shah - (Guarantor For Sam Malik)</span>
                            oneday2144@gmail.com - +447932107444
                        </td>
                        <td>
                            <div class="action-btn">
                                <a href="#" class="btn accept">
                                    <i class="fa fa-check"></i> Accept
                                </a>
                                <a href="#" class="btn reject" data-toggle="modal" data-target="#tenant_guarantor">
                                    <i class="fa fa-times"></i> Remove
                                </a>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!--            landlord options        -->
<div class="landlord-options" id="landlord-options">
    <div class="container">
        <h3>You now have the following options</h3>
        <div class="flex">
            <button class="btn" data-toggle="modal" data-target="#tenant_ref_opt">
                View Tenant Referencing Options (Recommended)
            </button>
            <button class="btn" data-toggle="modal" data-target="#contract_opt">
                View Direct To Contract Options
            </button>
            <button class="btn" data-toggle="modal" data-target="#reject_opt">
                View Cancel / Reject Application Options
            </button>
        </div>
    </div>

</div>

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
            </div>
        </div>
    </div>
</div>
<!-- add Guarantor Modal -->
<div class="modal fade" id="add_guarantor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Add or Request Guarantor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="success alert alert-success">
                    <b>Request Sent!</b>
                    <p>Please allow enough time for the lead tenant to acknowledge and respond to your request. Their proposed guarantor will be sent to you via email for approval.</p>
                </div>
                <div class="guarantor-options">
                    <p>Need your tenant(s) to provide a guarantor? You can manually add or request the tenant(s) to provide a guarantor by
                        clicking one of the buttons below. </p>
                    <hr>
                    <div class="text-center">
                        <a href="javascript:void(0)" id="req_guarantor">Request a Guarantor</a>
                        <a href="javascript:void(0)" id="add_guarantor">Manually Add Guarantor</a>
                    </div>
                </div>
                <div class="req_guarantor">
                    <p>If you don't already have the details for a guarantor, you can send a request to a tenant to
                        supply them.</p>
                    <p>Please select which tenant(s) you would like a guarantor for:</p>

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

                </div>
                <div class="add_guarantor">
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
            </div>
            <div class="modal-footer back">
                <button type="button" class="btn remove">back</button>
                <a href="javascript:void(0)" class="btn add">Add Guarantor</a>
                <a href="javascript:void(0)" class="btn request">Request Guarantor</a>
            </div>
        </div>
    </div>
</div>

<!-- proposed date Modal -->
<div class="modal fade custom-modal" id="prop_date" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Change Move In Date</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="info">
                    <p>You are welcome to change either of these now. but note the <b>tenants will be notified,</b> and
                        this may be used as <b>reasonable grounds to withdraw their application - </b>so please <b>make
                            sure any changes are discussed</b> using the contact details above.</p>
                </div>
                <div class="data">
                    <p>This is the date the tenants have entered as the pre-agreed move-in-date..</p>
                    <form>
                        <div class="move_in_date" id="move_in_date"></div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="back">
                    <a href="javascript:void(0);" class="btn back">back</a>
                </div>
                <div class="change">
                    <a href="javascript:void(0);" type="button" class="btn change">Save</a>
                </div>
                <button type="button" class="btn next">I understand</button>
            </div>
        </div>
    </div>
</div>

<!-- Rental amount Modal -->
<div class="modal fade custom-modal" id="rental_amount" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Change Monthly Rental Amount</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="info">
                    <p>You are welcome to change either of these now. but note the <b>tenants will be notified,</b> and
                        this may be used as <b>reasonable grounds to withdraw their application - </b>so please <b>make
                            sure any changes are discussed</b> using the contact details above.</p>
                </div>
                <div class="data">
                    <p>This is the rental amount as displayed on your advert.</p>
                    <form>
                        <div class="form-inline">
                            <div class="input-group-addon">£</div>
                            <input class="text-box single-line form-control" data-val="true"
                                   data-val-number="The field Monthly Rent (£) must be a number."
                                   data-val-range="Please enter a number between 100 and 100000"
                                   data-val-range-max="100000" data-val-range-min="100" id="RentPerMonth"
                                   name="RentPerMonth" type="text" value="0">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="back">
                    <a href="javascript:void(0);" class="btn back">back</a>
                </div>
                <div class="change">
                    <a href="javascript:void(0);" type="button" class="btn change">Save</a>
                </div>
                <button type="button" class="btn next">I understand</button>
            </div>
        </div>
    </div>
</div>

<!-- Tenant referencing opt Modal -->
<div class="modal right fade option-modal" id="tenant_ref_opt" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>View Tenant Referencing Options</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="wrap">
                    <p>I would like Zacoota to reference these tenants. If they pass referencing, I am happy to move to
                        contract signing, and these Is can move into my property upon contract signing, and payment of
                        deposit and rent money to Zacoota.</p>
                </div>

                <div class="included">
                    <div class="wrap">
                        <h4>What's Included?</h4>
                        <ul>
                            <li>Cost per reference: £20.00</li>
                            <li>Cost for entire tenancy set up if tenants move in: £49.00 (deducted form your first
                                month
                                payment)
                            </li>
                            <li>Support and options if tenants fail references</li>
                            <li>Holding deposit (£23.00) passed on to landlord if tenants withdraw thier application
                                after 72
                                hours.
                            </li>
                            <li>You will be provided with a completion report once references are complete (full details
                                below).
                            </li>
                            <li>Zacoota will proces the deposit and first month's rent from the tenant. The landlord
                                should not
                                process money.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wrap">
                    <h4>Full Service Breakdown</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th aria-hidden="true">Comprehensive<br> Referencing</th>
                            <th aria-hidden="true">swift<br> Referencing</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Time Taken</td>
                            <td>
                                3-5 Working Days<br> (On Average)
                            </td>
                            <td>
                                1 Working Days<br> (On Average)
                            </td>
                        </tr>
                        <tr>
                            <td>Credit Check</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>

                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>

                            </td>
                        </tr>
                        <tr>
                            <td>Fraud Checks</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>

                            </td>
                        </tr>
                        <tr>
                            <td>Outstanding Debt Search</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>

                            </td>
                        </tr>
                        <tr>
                            <td>Right to REnt Check Advice</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>

                            </td>
                        </tr>
                        <tr>
                            <td>Affordability Rating</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#d42114" width="24px"
                                     height="24px">
                                    <path d="M6.188 18.872A9 9 0 0 0 18.872 6.188L6.188 18.872zm-1.06-1.06L17.812 5.128A9 9 0 0 0 5.128 17.812zM12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5z"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>Previous Landlord Reference (if applicable)</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#d42114" width="24px"
                                     height="24px">
                                    <path d="M6.188 18.872A9 9 0 0 0 18.872 6.188L6.188 18.872zm-1.06-1.06L17.812 5.128A9 9 0 0 0 5.128 17.812zM12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5z"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr >
                            <td>Income Check</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#d42114" width="24px"
                                     height="24px">
                                    <path d="M6.188 18.872A9 9 0 0 0 18.872 6.188L6.188 18.872zm-1.06-1.06L17.812 5.128A9 9 0 0 0 5.128 17.812zM12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5z"></path>
                                </svg>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn">Start Referencing </a>
            </div>
        </div>
    </div>
</div>

<!-- contract option Modal -->
<div class="modal right fade option-modal" id="contract_opt" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>View Direct To Contract Options</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contract-options">
                    <div class="included">
                        <div class="wrap">
                            <h4>What's Included?</h4>
                            <ul>
                                <li>Cost to Tenants: Free</li>
                                <li>Cost to landlord on completion: £49.00 (deducted form your first month
                                    payment)
                                </li>
                                <li>Cost to landlord if tenants / landlord don't complete the transaction: £0.00</li>
                                <li>Holding deposit (£23.00) passed on to landlord if tenants withdraw their application
                                    after 72 hours.
                                </li>
                                <li>Zacoota will process the deposit and first month's rent from the tenant. The
                                    landlord
                                    should not
                                    process money.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="wrap">
                        <h4>Full Service Breakdown</h4>
                        <table class="table">

                            <tbody>
                            <tr>
                                <td>

                                    Best-in-clas contract AST (up-to-date with legal requirements and legislation )
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Over 163,000 Landlords using Zacoota
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ability to add custom clauses to suit your tenancy
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    You remain in control
                                </td>
                            </tr>
                            <tr >
                                <td>
                                    Fast and secure digital signing
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Rent collection optional
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p>By clicking "proceed to contract", your are agreeing to accepting these tenants on condition
                            that
                            they sign the <a href="#">Zacoota tenancy agreement</a>, and pay the required deposit and
                            first
                            month's rent. The first month's rent will be paid directly to Zacoota, and passed to you 10
                            days
                            after move-in. </p>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" data-toggle="modal" data-target="#proceed_contract" data-dismiss="modal">Proceed To Contract Without Referencing </a>
            </div>
        </div>
    </div>
</div>

<!-- reject option Modal -->
<div class="modal right fade option-modal" id="reject_opt" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>View Cancel / Reject Application Options</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="no-available">
                    <div class="wrap">
                        <h4>Property no longer available</h4>
                        <p>This property is no longer available</p>
                        <p>At Zacoota, our aim is to make the rental process as smooth as possible. One pat of doing
                            this is by ensuring all listed propertyies are available to rent.
                            Hence, continued de-listing of properties ager a deposit has been placed, will result in a
                            negative impact on your landlord profile.
                        </p>
                        <a href="#"> <i class="fa fa-times"></i> Click here to go to property removal page</a>
                    </div>
                </div>
                <div class="unsuited-tenants">
                    <div class="wrap">
                        <h4>Unsuitable Tenants or Unwanted holding Deposit</h4>
                        <p>These tenants are not suitable for my property, please return their deposit them. </p>
                        <a href="#"> <i class="fa fa-times"></i>Click here to go to send message to tenants</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- Tenant Rejected Modal -->
<div class="modal fade custom-modal" id="tenant_rejected" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Tenant Rejected</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure, you want to reject Ali hamza</p>
               <p>The proposed tenant ali hamza has been rejected.</p>
                <p>We have contacted the tenant to inform them of this and suggested that they reach out to you to discuss the application. We also advise that you try to reach out to them to avoid any delays with the application.</p>
                <p>You can see our advice on how to proceed where tenants fail referencing <a href="#">here</a> .</p>
            </div>
            <div class="modal-footer">
                <div class="reject">
                    <a href="javascript:void(0);" class="btn ">Reject</a>
                </div>
                <div class="cancel">
                    <a href="javascript:void(0);" type="button" class="btn ">cancel</a>
                </div>
                <button type="button" class="btn close-btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Guarantor Rejected Modal -->
<div class="modal fade custom-modal" id="tenant_guarantor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Guarantor Rejected</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure, you want to reject Sami Ullah, guarantor for Sam Mail, M Ali, Jhon Alex?</p>
                <p>The proposed guarantor Sami Ullah, guarantor for Sam Mail, M Ali, Jhon Alex has been rejected.</p>
                <p>We have contacted the tenant to inform them of this and suggested that they reach out to you to discuss the application. We also advise that you try to reach out to them to avoid any delays with the application.</p>
                <p>You can see our advice on how to proceed where tenants fail referencing <a href="#">here</a> .</p>
            </div>
            <div class="modal-footer">
                <div class="reject">
                    <a href="javascript:void(0);" class="btn ">Reject</a>
                </div>
                <div class="cancel">
                    <a href="javascript:void(0);" type="button" class="btn ">cancel</a>
                </div>
                <button type="button" class="btn close-btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Proceed contract Modal -->
<div class="modal fade custom-modal" id="proceed_contract" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Proceed to contract?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><b>Are you sure you don't want to reference any tenants?</b></p>
                <p>95% of our landlords reference all tenants prior to contract signing.</p>
            </div>
            <div class="modal-footer">
                <div class="cancel">
                    <a href="javascript:void(0);" type="button" class="btn ">cancel</a>
                </div>
                <div class="proceed-btn">
                    <a href="javascript:void(0);" class="btn "><i class="fa fa-check" aria-hidden="true"></i>  Proceed To Contract </a>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    //move in date
    $(function () {
        var today = new Date();
        var widget = $("#move_in_date").datepicker("widget");
        $("#move_in_date").datepicker({
            minDate: today,
            format: 'dd-mm-yyyy',
        });
    });

</script>
<script>
    $("#check_all").click(function () {
        $('div#add_guarantor input:checkbox').not(this).prop('checked', this.checked);
    });
</script>
<script>
    $('.next').click(function () {
        $(this).hide();
        $('.info').hide();
        $(".data").show();
        $('.back').show();
        $('.change').show();
    });
    $('.back').click(function () {
        $(this).hide();
        $('.change').hide();
        $('.data').hide();
        $(".info").show();
        $('.next').show();
    });
    $('button.close').click(function () {

        $('.change').hide();
        $('.data').hide();
        $(".info").show();
        $('.next').show();
    });
    $(document).ready(function () {
        $(".modal").on("hidden.bs.modal", function () {
            $(this).hide();
            $('.change').hide();
            $('.data').hide();
            $(".info").show();
            $('.next').show();
            $(" .guarantor-options").show();
            $(" .req_guarantor").hide();
            $(" .add_guarantor").hide();
            $(" .modal-footer.back").hide();
        });
    });
    $('#req_guarantor').click(function () {
        $('.guarantor-options').hide();
        $(" .req_guarantor").show();
        $(" .modal-footer.back").show();
        $('a.btn.add').hide();
        $('a.btn.request').show();
    });
    $('a#add_guarantor').click(function () {
        $('.guarantor-options').hide();
        $(" .add_guarantor").show();
        $(" .modal-footer.back").show();
        $('a.btn.request').hide();
        $('a.btn.add').show();
    });
    $('button.btn.remove').click(function () {
        $(" .guarantor-options").show();
        $(" .req_guarantor").hide();
        $(" .add_guarantor").hide();
        $(" .modal-footer.back").hide();
    });

</script>
<script>
    $(".remove-div").click(function () {
        $(".respond-application").remove();
    });
</script>

<!--scroll to landlord-options-->
<script>
    if ($('.respond-application  a').length) {
        $(".respond-application  a").click(function () {
            $('html, body').animate({
                scrollTop: $("#landlord-options").offset().top - 77
            }, 2000);
        });
    }
    if ($('.instarent-propery-details  a').length) {
        $(".instarent-propery-details  a").click(function () {
            $('html, body').animate({
                scrollTop: $("#applicant").offset().top - 77
            }, 2000);
        });
    }
</script>


<?php
include('footer.php');
?>
