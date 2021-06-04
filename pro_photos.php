<?php
include('header.php');
?>

<!--
          Services nav bar
  ===========================================-->
<div class="services-nav">
    <div class="container">
        <div class="col-md-12 p-0">
            <nav class="navbar navbar-expand-lg pl-0 pr-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i> Services Dashboard
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="epc-tab" data-toggle="tab" href="#epc" role="tab">Energy Performance
                                Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="cp12-tab" data-toggle="tab" href="#cp_12" role="tab">Gas Safety Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="electrical-safety-tab" data-toggle="tab" href="#electrical-safety" role="tab">Electrical Safety</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="photography-tab" data-toggle="tab" href="#photography" role="tab">Photography</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="inventory-tab" data-toggle="tab" href="#inventory" role="tab">Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tenant-referencing-tab" data-toggle="tab" href="#tenant-referencing" role="tab">Referencing</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>

<div class="services-back">
    <div class="container">
        <div class="services-back-btn">
            <a href="services.php"><i class="fa fa-chevron-left" aria-hidden="true"></i> Go back</a>
        </div>
    </div>
</div>
<!--    main content wraper-->

<div class="content-wrap services_content">
    <div class="container">
        <!--                Photography    -->
        <div class="tab-pane fade show active" id="photography" role="tabpanel" aria-labelledby="photography-tab">
            <div class="services-heading">
                <h2>Professional Photography & Floor Plans</h2>
            </div>
            <div class="row">

                <!--                main content-->

                <div class="col-md-8">
                    <!--    services booking -->
                    <section class="services-booking">
                        <div class="services-booking-inner">
                            <div class="row ">

                                <div class="col-md-12">
                                    <div class="services-booking-head">
                                        <h3>Address & Contact Details</h3>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-code-row">
                                        <div class="form-group">
                                            <div class="select-wrap">
                                                <select class="form-control" id="propertiesdropdown">
                                                    <option value="0" selected="selected"> Select a property</option>
                                                    <option class="propertiesdropdown-adress" value="1">A S K Letting Ltd, 148 Cranbrook Road,
                                                        Ilford, ig1 4lz
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <button id="phot_add_new" class="add-form-btn">Add new property
                                        </button>
                                    </div>

                                    <div class="addressgetbox" id="epc_adressgetbox">
                                        <p>A S K Letting Ltd<br>
                                            148 Cranbrook Road<br>
                                            Ilford<br>
                                            IG1 4LZ</p>
                                    </div>
                                </div>

                            </div>
                            <div class="photo_property_form">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ad-one">Flat or house number</label>
                                            <input type="text" class="form-control" id="ad-one" placeholder="e.g. Flat 1 or 5 Abbey Road">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ad-line">Address Line 1</label>
                                            <input type="text" class="form-control" id="ad-line" placeholder="e.g. 5 Abbey Road or Westminister">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ad-line-two">Address Line 2</label>
                                            <input type="text" class="form-control" id="ad-line-two" placeholder="(Optional)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="town">Town</label>
                                            <input type="text" class="form-control" id="town" placeholder="e.g. London or Manchester">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="psot_code">Post Code</label>
                                            <input type="text" class="form-control" id="psot_code" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="remove_photo_property btn">
                                            <i class="fa fa-remove"></i>Remove
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--           contact -->
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <p>Please provide details for the contact we should speak to, to arrange access to the property:</p>
                                </div>

                                <div class="contact-details-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Contact_name"
                                                       placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="contact_surname"
                                                       placeholder="Contact Surname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Contact_number"
                                                       placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="contact_email"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>Please enter a preferred appointment date. Our electrician will contact you to confirm their availability and agree an exact time for the inspection after booking. We can't guarantee an appointment date prior to ordering, but in the unlikely event that a mutually agreeable date can't be found, we will of course refund you in full.</p>
                                </div>

                                <!--                date -->
                                <div class="col-md-12 mt-4 mb-4">
                                    <h4>Select Desired Dates: <a tabindex="0" role="button" class="" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="top" title="" data-content="<span>Although we endeavour to accommodate your requested dates, this however, is not always possible.</span><hr><span>Our engineer will make contact with the specified 'person of contact' to confirm, change or adjust the exact date and time for the inspection.</span><hr><span>If a date and time cannot be agreed upon, you will be refunded in full.</span>  ">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </a></h4>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div id="yourBox" class="styled-checkbox" onclick="Dateselect11();">
                                                <div class="form-group">
                                                    <input type="checkbox" class="form-check-input" id="asap4" value="ASAP4" name="ASAP4">
                                                    <label for="asap4" class="form-check-label">As soon as possible</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 text-center">
                                            <p class="date-or">or</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input id="photo_datepicker" placeholder="Select date">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!--                                        Floor Plan   -->
                                <div class="col-md-6">
                                    <h4>Select Floor Plan:</h4>
                                    <ul class="radio-button-list" style="margin-bottom:0;">
                                        <li>
                                            <input value="Add Floor Plan" data-val="1" type="radio" id="furnished_yes" name="furnished" tabindex="0" class="radio-button" onclick="showapp3();">
                                            <label for="furnished_yes" class="radio-button__label">Yes</label>
                                            <div class="clearfix " id="app3" style="display: none;">
                                                <span> (+ £25)</span>

                                            </div>
                                        </li>
                                        <li>
                                            <input value="No Floor Plan Required" data-val="0" type="radio" id="furnished_no" name="furnished" tabindex="0" class="radio-button" onclick="hideapp3();">
                                            <label for="furnished_no" class="radio-button__label">No</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--    end services booking -->



                </div>
                <!--                siderbar-->
                <div class="col-md-4">
                    <div class="services-sidebar">
                        <div class="check_card_wrap">
                            <!--                    checkout heading-->
                            <div class="verified-badge with-tip">
                                <i class="sl sl-icon-check"></i> Checkout

                            </div>
                            <!--                    check out card-->
                            <div class="check_card">

                                <div class="check_card_body">
                                    <div class="check_card_guest">
                                        <div class=" text-center">
                                            <h6>Order Summary</h6>
                                        </div>

                                        <div class="input-append-group">

                                        </div>

                                        <div class="input-append-group2">

                                        </div>
                                    </div>


                                    <div class="check_card_total">
                                        <div class="row">
                                            <div class="col-8 col-sm-9">
                                                <h6>Total</h6>
                                            </div>
                                            <div class="col-4 col-sm-3">
                                                <h6><input type="text" class="total-price" value="£0"></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check_card_collection">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button><i class="fa fa-lock" aria-hidden="true"></i> Checkout Securely
                                                </button>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="payment-ways-img">
                                                    <img src="assets/images/payment-way.png" class="img-fluid" alt="Zacoota payments ways">

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
