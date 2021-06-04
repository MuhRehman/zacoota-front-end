<?php
include('header.php');
?>

    <!--
              Services nav bar
      ===========================================-->
    <section class="services-nav">
        <div class="container">
            <div class="col-md-12 p-0">
                <nav class="navbar navbar-expand-lg pl-0 pr-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <p><i class="fa fa-bars"></i> Services Dashboard</p>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="epc-tab" data-toggle="tab" href="#epc" role="tab" aria-controls="EPC" aria-selected="true">Energy Performance
                                    Certificate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cp12-tab" data-toggle="tab" href="#cp_12" role="tab" aria-controls="cp12" aria-selected="false">Gas Safety Certificate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="electrical-safety-tab" data-toggle="tab" href="#electrical-safety" role="tab" aria-controls="electrical-safety" aria-selected="false">Electrical Safety</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="photography-tab" data-toggle="tab" href="#photography" role="tab" aria-controls="photography" aria-selected="false">Photography</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="inventory-tab" data-toggle="tab" href="#inventory" role="tab" aria-controls="inventory" aria-selected="false">Inventory</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tenant-referencing-tab" data-toggle="tab" href="#tenant-referencing" role="tab" aria-controls="tenant-referencing" aria-selected="false">Referencing</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </section>

    <!--    main content wraper-->

    <div class="content-wrap services_content">
        <div class="container">
            <div class="tab-content" id="services-tabs">

<!--                  Energy Performance Certificate (EPC)      -->
                <div class="tab-pane fade show active" id="epc" role="tabpanel" aria-labelledby="epc-tab">
                    <div class="services-heading">
                        <h2>Energy Performance Certificate (EPC)</h2>
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
                                                <button id="add_new" class="add-form-btn">Add new property
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
                                    <div class="new_property_form">
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
                                                <button class="remove_new_property btn">
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
                                                            <input type="checkbox" class="form-check-input" id="asap" value="ASAP" name="ASAP">
                                                            <label for="asap" class="form-check-label">As soon as possible</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p class="date-or">or</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input id="datepicker_from" placeholder="Select date">
                                                    </div>
                                                </div>
                                            </div>


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
                                        <div class="check_card_head">
                                            <div class="row">
                                                <div class="col-7 col-sm-7">
                                                    <h6>3 Bed Semi-detached house in London</h6>
                                                    <p>Property Reference:</p>
                                                    <p>673219</p>
                                                </div>
                                                <div class="col-5 col-sm-5">
                                                    <img src="assets/images/savings-card.jpg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="check_card_body">
                                            <div class="check_card_guest">
                                                <h6>Order Summary</h6>
                                                <div class="row">
                                                    <div class=" col-9 col-sm-9">
                                                        <p>Ultimate Advertising.</p>
                                                        <p>
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                what's included?
                                                            </button>
                                                        </p>

                                                    </div>

                                                    <div class="col-3 col-sm-3">
                                                        <p>£49</p>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="check_card_total">
                                                <div class="row">
                                                    <div class="col-8 col-sm-9">
                                                        <h6>Total</h6>
                                                    </div>
                                                    <div class="col-4 col-sm-3">
                                                        <h6>£49.00</h6>
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
                                                            <img src="assets/images/payment-way.png" class="img-fluid">

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

<!--                   Gas Safety (CP12)     -->
                <div class="tab-pane fade" id="cp_12" role="tabpanel" aria-labelledby="cp-12-tab">
                    <div class="services-heading">
                        <h2>Gas Safety Certificate (CP12)</h2>
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
                                                <button id="formbut" class="add-form-btn">Enter address manually
                                                </button>
                                            </div>

                                            <div class="addressgetbox" id="adressgetbox">
                                                <p>A S K Letting Ltd<br>
                                                    148 Cranbrook Road<br>
                                                    Ilford<br>
                                                    IG1 4LZ</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="new_form">
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ad-one">Flat or house number</label>
                                                    <input type="text" class="form-control" id="ad-one"
                                                           placeholder="e.g. Flat 1 or 5 Abbey Road">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ad-line">Address Line 1</label>
                                                    <input type="text" class="form-control" id="ad-line"
                                                           placeholder="e.g. 5 Abbey Road or Westminister">
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
                                                    <input type="text" class="form-control" id="town"
                                                           placeholder="e.g. London or Manchester">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="psot_code">Post Code</label>
                                                    <input type="text" class="form-control" id="psot_code" placeholder="e.g. W11 1JA">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="remove_form btn">
                                                    <i class="fa fa-remove"></i>Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--           contact -->
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <p>Please provide the details of contact on site. This is the person who will give the engineer access to enter the property</p>
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
                                            <label for="eng-messege">Message to Engineer: (optional)</label>
                                            <textarea style="padding-top: 15px;" class="form-control" id="eng-messege" value="" name="message"
                                                      placeholder="e.g. &quot;only on weekends&quot; or &quot;before 12pm on Mondays &amp; Thursdays&quot;"
                                                      cols="10" rows="10"></textarea>
                                        </div>

                                        <!--                date -->
                                        <div class="col-md-12 mt-4 mb-4">
                                            <h4>Select Desired Dates:<a tabindex="0" role="button" class="" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="top" title="" data-content="<span>Although we endeavour to accommodate your requested dates, this however, is not always possible.</span><hr><span>Our engineer will make contact with the specified 'person of contact' to confirm, change or adjust the exact date and time for the inspection.</span><hr><span>If a date and time cannot be agreed upon, you will be refunded in full.</span>  ">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </a></h4>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div id="yourBox" class="styled-checkbox" onclick="Dateselect11();">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input" id="asap2" value="ASAP2" name="ASAP2">
                                                            <label for="asap2" class="form-check-label">As soon as possible</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p class="date-or">or</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input id="cp_datepicker" placeholder="Select date">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                    <!--            Boiler Check-->

                                    <div class="boiler-check-wrap">
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <h4>Boiler Check Included<i class="fa fa-check-circle-o" aria-hidden="true"></i></h4>
                                            </div>
                                            <div class="col-md-6">
                                                <p>The boiler check is included in the base price and covers any hot water appliances connected at no extra cost (e.g. showers, radiators)</p>
                                            </div>

                                            <div class="col-md-6">
                                                <h4>Boiler Maintenance Service</h4>
                                                <span>Add Boiler Service + £60 (Optional)</span>
                                                <ul class="radio-button-list" style="margin-bottom:0;">
                                                    <li>
                                                        <input type="radio" id="AddBoilerService" name="boiler" tabindex="0" class="radio-button"
                                                               value="1" data-val="1" onclick="Buttonsum();">
                                                        <label for="AddBoilerService" class="radio-button__label">Yes</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="electrical_no" name="boiler" tabindex="0" class="radio-button"
                                                               value="0" data-val="0" onclick="Buttonsum2();" checked="">
                                                        <label for="electrical_no" class="radio-button__label">No</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Keep your boiler in excellent condition – as recommended by boiler manufacturers. A regular service of once a year is the best approach to ensuring a well functioning boiler. Please visit or refer to 36(2) of the HSE Approved Code of Practice, for more information regarding landlord duties and obligations relating to flues, maintaining pipes and appliances.</p>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="additional_appliance">
                                                    <h4>Add Additional Appliances:</h4>
                                                    <span>(+ £15 Per Appliance)</span>
                                                    <div class="number">
                                                        <span class="minus"><i class="fa fa-minus" aria-hidden="true" disabled="disabled"></i></span>
                                                        <input type="text" value="1"/>
                                                        <span class="plus"><i class="fa fa-plus" aria-hidden="true" disabled="disabled"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <p>It is a legal requirement and the responsibility of the landlord to have all appliances connected to a gas supply (e.g. boiler, hob, cooker or gas fire) checked by a qualified gas safe engineer.</p>
                                            </div>

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
                                        <div class="check_card_head">
                                            <div class="row">
                                                <div class="col-7 col-sm-7">
                                                    <h6>3 Bed Semi-detached house in London</h6>
                                                    <p>Property Reference:</p>
                                                    <p>673219</p>
                                                </div>
                                                <div class="col-5 col-sm-5">
                                                    <img src="assets/images/savings-card.jpg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="check_card_body">
                                            <div class="check_card_guest">
                                                <h6>Order Summary</h6>
                                                <div class="row">
                                                    <div class=" col-9 col-sm-9">
                                                        <p>Ultimate Advertising.</p>
                                                        <p>
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                what's included?
                                                            </button>
                                                        </p>

                                                    </div>

                                                    <div class="col-3 col-sm-3">
                                                        <p>£49</p>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="check_card_total">
                                                <div class="row">
                                                    <div class="col-8 col-sm-9">
                                                        <h6>Total</h6>
                                                    </div>
                                                    <div class="col-4 col-sm-3">
                                                        <h6>£49.00</h6>
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
                                                            <img src="assets/images/payment-way.png" class="img-fluid">

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

<!--                electrical-safety     -->
                <div class="tab-pane fade" id="electrical-safety" role="tabpanel" aria-labelledby="electrical-safety-tab">
                    <div class="services-heading">
                        <h2>Electrical Safety</h2>
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
                                                <button id="add_new" class="add-form-btn">Add new property
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
                                    <div class="new_property_form">
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
                                                <button class="remove_new_property btn">
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
                                            <h4>Select Desired Dates:<a tabindex="0" role="button" class="" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="top" title="" data-content="<span>Although we endeavour to accommodate your requested dates, this however, is not always possible.</span><hr><span>Our engineer will make contact with the specified 'person of contact' to confirm, change or adjust the exact date and time for the inspection.</span><hr><span>If a date and time cannot be agreed upon, you will be refunded in full.</span>  ">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </a></h4>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div id="yourBox" class="styled-checkbox" onclick="Dateselect11();">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input" id="asap3" value="ASAP3" name="ASAP3">
                                                            <label for="asap3" class="form-check-label">As soon as possible</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p class="date-or">or</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input id="es_datepicker" placeholder="Select date">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-6">
                                            <h4>Add PAT testing</h4>
                                            <ul class="radio-button-list">
                                                <li>
                                                    <input type="radio" id="appliances_yes" name="appliances1" tabindex="0" class="radio-button" value="1">
                                                    <label for="appliances_yes" class="radio-button__label">Yes</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="appliances_no" name="appliances1" data-val="0" tabindex="0" class="radio-button" value="0"">
                                                    <label for="appliances_no" class="radio-button__label">No</label>
                                                </li>
                                            </ul>
                                            <div id="pat-testing-more" class="hide">
                                                <div class="right-info ">
                                                    <h4>how many appliances?</h4>
                                                    <span class="field-validation-error text-danger" id="mustSelectOneOptionError"</span>
                                                </div>
                                                <ul class="radio-button-list">
                                                    <li>
                                                        <input value="No PAT Testing" type="radio" id="PAT_2" data-val="0" name="appliances" tabindex="0" class="radio-button">
                                                        <label for="PAT_2" class="radio-button__label"> Up To 10
                                                            Appliances (Included)</label>
                                                    </li>

                                                    <li>
                                                        <input value="Up To 15 Appliances" type="radio" id="PAT_3" data-val="10" name="appliances" tabindex="0" class="radio-button">
                                                        <label for="PAT_3" class="radio-button__label">Up To 15
                                                            Appliances (+ £10)</label>
                                                    </li>
                                                    <li>
                                                        <input value="Up To 20 Appliances" type="radio" id="PAT_4" data-val="20" name="appliances" tabindex="0" class="radio-button">
                                                        <label for="PAT_4" class="radio-button__label"> Up To 20
                                                            Appliances (+ £20)</label>
                                                    </li>
                                                    <li>
                                                        <input value="Up To 25 Appliances" type="radio" id="PAT_5" data-val="30" name="appliances" tabindex="0" class="radio-button">
                                                        <label for="PAT_5" class="radio-button__label">Up To 25
                                                            Appliances (+ £30)</label>
                                                    </li>
                                                    <li>
                                                        <input value="Up To 30 Appliances" type="radio" id="PAT_6" data-val="40" name="appliances" tabindex="0" class="radio-button">
                                                        <label for="PAT_6" class="radio-button__label"> Up To 30
                                                            Appliances (+ £40)</label>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="add-pat-testing">
                                               <h6>How many electrical appliances does this property have? </h6>
                                               <p>Our PAT pricing is based on the number of electrical appliances.
                                                   Providing an incorrect number of appliances will mean the engineer
                                                   will not be able to create the report, and a callout charge will be
                                                   applied.</p>
                                               <p>Note: Hard wired appliances do count here, but only a visual check
                                                   and earth check will be performed if the appliance has no plug
                                                   socket or it isn't easily accessible.</p>
                                           </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Add Electrical Installation Condition Report (EICR)</h4>
                                            <ul class="radio-button-list">
                                                <li>
                                                    <input type="radio" id="AddEICR" name="addeicr" tabindex="0" class="radio-button" value="1" data-val="1">
                                                    <label for="AddEICR" class="radio-button__label">Yes</label>
                                                    <p id="pmoney" class="hide">+ £129</p>
                                                </li>

                                                <li>
                                                    <input type="radio" id="electrical-no" name="addeicr" data-val="0" tabindex="0" class="radio-button" value="0"">
                                                    <label for="electrical-no" class="radio-button__label">No</label>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="add-pat-testing">
                                                <p>If you select to have an EICR, this will include up to 8 circuits. Most
                                                    residential properties have less than 8 circuits - but we must state
                                                    more circuits than this will be charged later at £15 each. If you are
                                                    unsure about this, please ask the electrician when they call to confirm
                                                    the inspection date.</p>
                                            </div>
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
                                        <div class="check_card_head">
                                            <div class="row">
                                                <div class="col-7 col-sm-7">
                                                    <h6>3 Bed Semi-detached house in London</h6>
                                                    <p>Property Reference:</p>
                                                    <p>673219</p>
                                                </div>
                                                <div class="col-5 col-sm-5">
                                                    <img src="assets/images/savings-card.jpg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="check_card_body">
                                            <div class="check_card_guest">
                                                <h6>Order Summary</h6>
                                                <div class="row">
                                                    <div class=" col-9 col-sm-9">
                                                        <p>Ultimate Advertising.</p>
                                                        <p>
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                what's included?
                                                            </button>
                                                        </p>

                                                    </div>

                                                    <div class="col-3 col-sm-3">
                                                        <p>£49</p>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="check_card_total">
                                                <div class="row">
                                                    <div class="col-8 col-sm-9">
                                                        <h6>Total</h6>
                                                    </div>
                                                    <div class="col-4 col-sm-3">
                                                        <h6>£49.00</h6>
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
                                                            <img src="assets/images/payment-way.png" class="img-fluid">

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

<!--                Photography    -->
                <div class="tab-pane fade" id="photography" role="tabpanel" aria-labelledby="photography-tab">
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
                                        <div class="check_card_head">
                                            <div class="row">
                                                <div class="col-7 col-sm-7">
                                                    <h6>3 Bed Semi-detached house in London</h6>
                                                    <p>Property Reference:</p>
                                                    <p>673219</p>
                                                </div>
                                                <div class="col-5 col-sm-5">
                                                    <img src="assets/images/savings-card.jpg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="check_card_body">
                                            <div class="check_card_guest">
                                                <h6>Order Summary</h6>
                                                <div class="row">
                                                    <div class=" col-9 col-sm-9">
                                                        <p>Ultimate Advertising.</p>
                                                        <p>
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                what's included?
                                                            </button>
                                                        </p>

                                                    </div>

                                                    <div class="col-3 col-sm-3">
                                                        <p>£49</p>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="check_card_total">
                                                <div class="row">
                                                    <div class="col-8 col-sm-9">
                                                        <h6>Total</h6>
                                                    </div>
                                                    <div class="col-4 col-sm-3">
                                                        <h6>£49.00</h6>
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
                                                            <img src="assets/images/payment-way.png" class="img-fluid">

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

<!--                Inventory    -->
                <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
                    <div class="services-heading">
                        <h2>Inventory - Check-In / Check-Out Service</h2>
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
                                                <button id="inventory_add_new" class="add-form-btn">Add new property
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
                                    <div class="inventory_property_form">
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
                                                <button class="inventory_photo_property btn">
                                                    <i class="fa fa-remove"></i>Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--           contact -->
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <p>Enter the contact details of the person providing access to the property.</p>
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

                                        <!--                date -->
                                        <div class="col-md-12 mt-4 mb-4">
                                            <h4>Select Desired Dates: <a tabindex="0" role="button" class="" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="top" title="" data-content="<span>Although we endeavour to accommodate your requested dates, this however, is not always possible.</span><hr><span>Our engineer will make contact with the specified 'person of contact' to confirm, change or adjust the exact date and time for the inspection.</span><hr><span>If a date and time cannot be agreed upon, you will be refunded in full.</span>  ">
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </a></h4>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div id="yourBox" class="styled-checkbox">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input" id="asap5" value="ASAP5" name="ASAP5">
                                                            <label for="asap5" class="form-check-label">As soon as possible</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 text-center">
                                                    <p class="date-or">or</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input id="inventory_datepicker" placeholder="Select date">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="boiler-check-wrap">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4>No Of Bedrooms:</h4>
                                                    <div class="form-group">
                                                        <div class="select-wrap">
                                                            <select placeholder="Select" id="selectbedroom" class="form-control form-field" name="bedroom">
                                                                <option value="" disabled="" selected="">Select</option>
                                                                <option value="1" data-val="1">01</option>
                                                                <option value="2" data-val="2">02</option>
                                                                <option value="3" data-val="3">03</option>
                                                                <option value="4" data-val="4">04</option>
                                                                <option value="5" data-val="5">05</option>
                                                                <option value="6" data-val="6">06</option>
                                                                <option value="7" data-val="7">07</option>
                                                                <option value="8" data-val="8">08</option>
                                                                <option value="9" data-val="9">09</option>
                                                                <option value="10" data-val="10">10</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <p><b class="mb-2">How many bedrooms does this property have?</b><br>
                                                        Our pricing is based on the number of bedrooms. This must accurately reflect the useage of the rooms for the report to be valid. Providing an incorrect number of bedrooms will mean the clerk will not be able to create the report.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <h4>
                                                Select Furnished Option:
                                            </h4>
                                            <ul class="radio-button-list" style="margin-bottom:0;">
                                                <li>
                                                    <input type="radio" id="inventory_furnished_yes" name="furnished" tabindex="0" class="radio-button" value="Furnished" data-val="1">
                                                    <label for="inventory_furnished_yes" class="iradio-button__label">Yes</label>
                                                    <div class="clearfix " id="app4" style="display: none;">
                                                        <span> (+ £15)</span>

                                                    </div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="inventory_furnished_no" name="furnished" tabindex="0" class="radio-button" value="Unfurnished" data-val="0">
                                                    <label for="inventory_furnished_no" class="radio-button__label">No</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <h4>Select Service Option</h4>
                                            <ul class="radio-button-list">
                                                <li>
                                                    <input type="radio" id="inventory_appliances_yes" name="appliances1" tabindex="0" class="radio-button" value="1">
                                                    <label for="inventory_appliances_yes" class="radio-button__label">Yes</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="inventory_appliances_no" name="appliances1" data-val="0" tabindex="0" class="radio-button" value="0">
                                                    <label for="inventory_appliances_no" class="radio-button__label">No</label>
                                                </li>
                                            </ul>
                                            <div id="inventory-pat-testing-more" class="hide" style="display: none;">
                                                <ul class="radio-button-list">
                                                    <li>
                                                        <input type="radio" id="service_1" value="0" data-val="0" name="service" tabindex="0" class="radio-button">
                                                        <label for="service_1" class="radio-button__label">Inventory
                                                            Only (No Check-In or Check-Out)</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="service_2" value="1" data-val="1" name="service" tabindex="0" class="radio-button">
                                                        <label for="service_2" class="radio-button__label"> Add
                                                            Check-In Service (+ £40)</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="service_3" value="2" data-val="2" name="service" tabindex="0" class="radio-button">
                                                        <label for="service_3" class="radio-button__label">Switch to
                                                            Check-Out Report (-£10)</label>
                                                    </li>
                                                </ul>
                                            </div>
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
                                        <div class="check_card_head">
                                            <div class="row">
                                                <div class="col-7 col-sm-7">
                                                    <h6>3 Bed Semi-detached house in London</h6>
                                                    <p>Property Reference:</p>
                                                    <p>673219</p>
                                                </div>
                                                <div class="col-5 col-sm-5">
                                                    <img src="assets/images/savings-card.jpg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="check_card_body">
                                            <div class="check_card_guest">
                                                <h6>Order Summary</h6>
                                                <div class="row">
                                                    <div class=" col-9 col-sm-9">
                                                        <p>Ultimate Advertising.</p>
                                                        <p>
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                what's included?
                                                            </button>
                                                        </p>

                                                    </div>

                                                    <div class="col-3 col-sm-3">
                                                        <p>£49</p>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="check_card_total">
                                                <div class="row">
                                                    <div class="col-8 col-sm-9">
                                                        <h6>Total</h6>
                                                    </div>
                                                    <div class="col-4 col-sm-3">
                                                        <h6>£49.00</h6>
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
                                                            <img src="assets/images/payment-way.png" class="img-fluid">

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

<!--                Tenant Referencing    -->
                <div class="tab-pane fade" id="tenant-referencing" role="tabpanel" aria-labelledby="tenant-referencing-tab">
                    <div class="services-heading">
                        <h2>Tenant Referencing</h2>
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
                                                <h3>Property Details :</h3>
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
                                                <button id="tenant_add_new" class="add-form-btn">Add new property
                                                </button>
                                            </div>

                                            <div class="addressgetbox" id="tenant_adressgetbox">
                                                <p>A S K Letting Ltd<br>
                                                    148 Cranbrook Road<br>
                                                    Ilford<br>
                                                    IG1 4LZ</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tenant_property_form">
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
                                                <button class="tenant_new_property btn">
                                                    <i class="fa fa-remove"></i>Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>

<!--                                    guarantor details -->
                                    <div class="guarantor-details-wrap">
                                        <div class="guarantor-details">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Tenant / Guarantor Details:</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="firstname" value="" class="form-control" type="text" placeholder="First Name" id="fn">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="surname" value="" class="form-control" type="text" placeholder="Surname" id="sn">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="phonee" value="" class="form-control" type="text" placeholder="Phone Number" id="ph">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="emaill" value="" class="form-control" type="text" placeholder="Email" id="em">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="radio-button-list">
                                                        <li>
                                                            <input type="radio" id="cpg" name="check" tabindex="0" class="radio-button" value="1">
                                                            <label for="cpg" class="radio-button__label" style="width: 150px;margin-right: 10px;">Guarantor</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="cpt" name="check" tabindex="0" class="radio-button" value="2">
                                                            <label for="cpt" class="radio-button__label" style="width: 150px;margin-right: 10px;">Tenant</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-danger remove" type="button"><i class="fa fa-remove"></i> Remove
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guarantor-details-new">

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12 mt-4">
                                            <button  class="btn" id="add_guarantor">Add addional Tenant or Guarantor</button>
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
                                        <div class="check_card_head">
                                            <div class="row">
                                                <div class="col-7 col-sm-7">
                                                    <h6>3 Bed Semi-detached house in London</h6>
                                                    <p>Property Reference:</p>
                                                    <p>673219</p>
                                                </div>
                                                <div class="col-5 col-sm-5">
                                                    <img src="assets/images/savings-card.jpg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="check_card_body">
                                            <div class="check_card_guest">
                                                <h6>Order Summary</h6>
                                                <div class="row">
                                                    <div class=" col-9 col-sm-9">
                                                        <p>Ultimate Advertising.</p>
                                                        <p>
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-container="body"
                                                                    data-toggle="popover" data-placement="top"
                                                                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                                what's included?
                                                            </button>
                                                        </p>

                                                    </div>

                                                    <div class="col-3 col-sm-3">
                                                        <p>£49</p>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="check_card_total">
                                                <div class="row">
                                                    <div class="col-8 col-sm-9">
                                                        <h6>Total</h6>
                                                    </div>
                                                    <div class="col-4 col-sm-3">
                                                        <h6>£49.00</h6>
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
                                                            <img src="assets/images/payment-way.png" class="img-fluid">

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
    </div>

<?php
include('footer.php');
?>