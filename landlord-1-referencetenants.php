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

<!--referencetenants -->
<div class="referencetenants holding-deposit-landlord">
    <div class="container">


        <!--     information-->

        <div class="information">
            <p> Any Tenants who are under 18 should be removed from
                the contract completely and not referenced.</p>
        </div>
        <div class="content-wrap">
            <div class="heading-text">
                <h3>Tenancy setting & referencing</h3>
                <p>Before you publish this listing and start accepting reservations, we’ll need to confirm a few details
                    about you and your space.</p>
            </div>
            <!--     referencing-->
            <div class="referencing-options">
                <h6>Please select the Tenants/Guarantors you would like to carry out referencing checks against. </h6>
                <table class="table references-table desktop-view">
                    <tbody>
                    <tr>
                        <td>
                            <div class="referencing-switch">
                                <input type="checkbox" id="switch" checked><label for="switch">referencing</label>
                            </div>
                        </td>
                        <td>
                            Mark ott <span>(Lead tenant) </span>
                        </td>
                        <td>
                            <div class="form-inline reference-type">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reference-1" id="comprehensive">
                                    <label class="form-check-label" for="comprehensive">
                                        Comprehensive
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reference-1" id="swift">
                                    <label class="form-check-label" for="swift">
                                        swift
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="referencing-switch">
                                <input type="checkbox" id="switch-2" checked><label for="switch-2">referencing</label>
                            </div>
                        </td>
                        <td>
                            Sam Malik
                        </td>
                        <td>
                            <div class="form-inline reference-type">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reference-2"
                                           id="comprehensive-1">
                                    <label class="form-check-label" for="comprehensive-1">
                                        Comprehensive
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reference-2" id="swift-1">
                                    <label class="form-check-label" for="swift-1">
                                        swift
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <table class="table references-table mobile-view">
                    <tbody>
                    <tr>
                        <td>
                            Mark ott <span>(Lead tenant) </span>
                            <div class="select-wrap">

                                <select class="form-control options" id="options" name="options">

                                    <option value="0" selected="selected"> Referencing Type</option>
                                    <option value="1">swift</option>
                                    <option value="2">Comprehensive</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="referencing-switch" role="radiogroup"
                                 aria-labelledby="guest-control-0-row-title">

                                <div class="form-check">
                                    <input class="form-check-input no" type="radio" name="g1" id="blankRadio1"
                                           value="no">
                                    <label class="form-check-label" for="blankRadio1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentcolor"
                                             stroke-width="3" aria-hidden="true" display="block" overflow="visible"
                                             style="height:16px;width:16px" viewBox="0 0 32 32">
                                            <defs/>
                                            <path d="M6 6l20 20M26 6L6 26"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input yes" type="radio" name="g1" id="blankRadio2"
                                           value="yes" aria-label="...">
                                    <label class="form-check-label" for="blankRadio2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentcolor"
                                             stroke-width="3" aria-hidden="true" display="block" overflow="visible"
                                             style="height:16px;width:16px" viewBox="0 0 32 32">
                                            <defs/>
                                            <path d="M4 16.5l8 8 16-16"/>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Sam Malik
                            <div class="select-wrap">
                                <select class="form-control options" id="options" name="options">
                                    <option value="0" selected="selected"> Referencing Type</option>
                                    <option value="1">swift</option>
                                    <option value="2">Comprehensive</option>
                                </select>
                            </div>
                        </td>

                        <td>
                            <div class="referencing-switch " role="radiogroup"
                                 aria-labelledby="guest-control-0-row-title">
                                <div class="form-check">
                                    <input class="form-check-input no" type="radio" name="g2" id="blankRadio3"
                                           value="no" aria-label="...">
                                    <label class="form-check-label" for="blankRadio3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentcolor"
                                             stroke-width="3" aria-hidden="true" display="block" overflow="visible"
                                             style="height:16px;width:16px" viewBox="0 0 32 32">
                                            <defs/>
                                            <path d="M6 6l20 20M26 6L6 26"/>
                                        </svg>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input yes" type="radio" name="g2" id="blankRadio4"
                                           value="yes" aria-label="...">
                                    <label class="form-check-label" for="blankRadio4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentcolor"
                                             stroke-width="3" aria-hidden="true" display="block" overflow="visible"
                                             style="height:16px;width:16px" viewBox="0 0 32 32">
                                            <defs/>
                                            <path d="M4 16.5l8 8 16-16"/>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <!--    Proposed Applicant      -->
            <div class="tenancy-applicant">
                <h3></h3>
                <div class="tenants">
                    <h3>Proposed <span>( Tenants )</span></h3>
                    <ul>
                        <li>
                            <div class="flex">
                                <div class="image">
                                    <img src="assets/images/user-icon.png" class="img-fluid" alt="user image">
                                </div>
                                <div class="us-details">
                                    <h6>Khuram qadeer</h6>
                                    <span> Tenant </span>
                                </div>
                                <div class="contacts" style="display: none">
                                    <p> khuramqadeer2122@gmail.com</p>
                                    <p> +447932107444</p>
                                </div>
                            </div>
                            <div class="cd-footer">
                                <div>
                                    <div class="action-btn flex ">
                                        <a href="javascript:void(0)" class="btn-1">contact info</a>
                                        <a href="javascript:void(0)" class="approve">Accept</a>
                                        <a href="javascript:void(0)" class="remove">reject</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="Guarantors">
                    <h3>Proposed <span>( Guarantors )</span></h3>
                    <ul>
                        <li>
                            <div class="flex">
                                <div class="image">
                                    <img src="assets/images/user-icon.png" class="img-fluid" alt="user image">
                                </div>
                                <div class="us-details">
                                    <h6>Yaqoob malik</h6>
                                    <span>Guarantor for: <a href="javascript:void(0)" class="more-info"
                                                            data-toggle="popover"
                                                            data-placement="top"
                                                            data-content="<b>Guarantor for:</b></p><p>Sam Malik</p><p>Khuram Qadeer</p><p>Muhammd Ali</p>">
                                                click here</a>
                                        </span>
                                </div>
                                <div class="contacts" style="display: none">
                                    <p> sammalik@gmail.com</p>
                                    <p> +447932107444</p>
                                </div>
                            </div>
                            <div class="cd-footer">

                                <div>
                                    <div class="action-btn flex ">
                                        <a href="javascript:void(0)" class="btn-1">contact info</a>
                                        <a href="javascript:void(0)" class="approve">Accept</a>
                                        <a href="javascript:void(0)" class="remove">reject</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--   add tenants and  guarantor -->
            <div class="new-applicant h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 col-lg-6 mx-auto order_2">
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
                    <div class="col-md-12 col-lg-6 order_1">
                        <div class="info">
                            <p>Additional application can be added later. with tenants also able to propose additional
                                applicants for approval. However if you know you want to ad an additional tenant, or a
                                guarantor, please click the applicant link.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--            unverified emails-->
            <div class="unverified-emails">
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

            <!--     referencing buton   -->
            <div class="referencing-btn">
                <div class="inner">
                    <div class="action">
                        <a href="#" class="btn" id="begin_referencing">Begin Referencing</a>
                    </div>
                </div>
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
                            <th aria-hidden="true">Speedy<br> Referencing</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr row="0">
                            <td>Time Taken</td>
                            <td>
                                3-5 Working Days<br> (On Average)
                            </td>
                            <td>
                                1 Working Days<br> (On Average)
                            </td>
                        </tr>
                        <tr row="1">
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
                        <tr row="2">
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
                        <tr row="3">
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
                        <tr row="4">
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
                        <tr row="5">
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
                        <tr row="6">
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
                        <tr row="7">
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

        </div>
    </div>
</div>


<!-- add tenant and guarantor Modal -->
<div class="modal fade custom-modal" id="Add_tenant_options" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Add Tenant or request Guarantor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="info">
                    <p><b>We can see you have requested a guarantor for the following tenants already:</b></p>
                    <ul>
                        <li>
                            Zaki shah - <b>Guarantor requested</b></li>
                    </ul>
                    <p>Please check your email - we will notify you if the tenant supplies guarantor details so they can
                        be checked and confirmed by you.</p>
                </div>
                <div class="action-btn ">
                    <a class="btn add-tenant" data-toggle="modal" data-target="#add_tenant">
                        <i class="fa fa-user-plus" aria-hidden="true"></i> Add additional tenant
                    </a>
                    <a class="btn add-guarantor" data-toggle="modal" data-target="#add_guarantor">
                        <i class="fa fa-user-plus" aria-hidden="true"></i> Add or Request Guarantor
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- add tenant Modal -->
<div class="modal fade add-modal" id="add_tenant" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <a href="javascript:void(0)" class="btn back" data-dismiss="modal"><i class="fa fa-angle-left"
                                                                                      aria-hidden="true"></i></a>
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
<div class="modal fade add-modal" id="add_guarantor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <a href="javascript:void(0)" class="btn back" data-dismiss="modal"> <i class="fa fa-angle-left"
                                                                                       aria-hidden="true"></i></a>
                <h4>Add or Request Guarantor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="guarantor-options">
                    <p>Need your tenant(s) to provide a guarantor? You can manually add or request the tenant(s) to
                        provide a guarantor by
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
                        <div class="form-check check-all">
                            <input type="checkbox" class="form-check-input" id="check_all">
                            <label class="form-check-label" for="check_all">Everyone</label>
                        </div>
                        <ul>

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
                            <div class="form-check check-all">
                                <input type="checkbox" class="form-check-input" id="check_all">
                                <label class="form-check-label" for="check_all">Everyone</label>
                            </div>
                            <ul>

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
<script>
    $("input[type='radio']").change(function () {

        if ($(this).val() === "no") {
            $(".options").prop("disabled", true).val('0');

        } else {
            $(".options").prop("disabled", false);
        }

        if ($(this).val() === "yes") {
            $(".options").css("border-color", "#b7b8b9")

        } else return false

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
        $(" .modal-header a.btn.back").show();
    });
    $(document).ready(function () {
        $(".modal").on("hidden.bs.modal", function () {
            $(this).hide();
            $(" .guarantor-options").show();
            $(" .req_guarantor").hide();
            $(" .add_guarantor").hide();
            $(" .modal-footer.back").hide();
        });
    });
    $('#Add_tenant_options .action-btn a').click(function () {
        $(" #Add_tenant_options").hide();
    });
    $('.modal-header a.btn.back').click(function () {
        $(" #Add_tenant_options").show();

    });
    $('.guarantor-options a').click(function () {
        $(" .modal-header a.btn.back").hide();
    });
    $("#check_all").click(function () {
        $('div#add_guarantor input:checkbox').not(this).prop('checked', this.checked);
    });

    $(document).ready(function () {
        $('.referencing-switch input[type="checkbox"]').click(function () {
            if ($(this).prop("checked") === true) {
                $(".reference-type").removeClass("disable");
            } else if ($(this).prop("checked") === false) {
                $(".reference-type").addClass("disable");
                $('.reference-type input').prop('checked', false);
            }
        });
    });


</script>
<?php
include('footer.php');
?>
