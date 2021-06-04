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
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent">
                    <i class="fa fa-bars"></i> Services Dashboard
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="epc-tab" data-toggle="tab" href="#epc" role="tab">Energy
                                Performance
                                Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="cp12-tab" data-toggle="tab" href="#cp_12" role="tab">Gas
                                Safety Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="electrical-safety-tab" data-toggle="tab" href="#electrical-safety"
                               role="tab">Electrical Safety</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="photography-tab" data-toggle="tab" href="#photography" role="tab">Photography
                                And Floor Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="inventory-tab" data-toggle="tab" href="#inventory" role="tab">Inventory
                                And Check In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tenant-referencing-tab" data-toggle="tab" href="#tenant-referencing"
                               role="tab">Referencing</a>
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
        <div class="services-heading text-center">
            <h2>Gas Safety Certificate (CP12)</h2>
        </div>

        <div class="service-head d-view">
            <div class="row">
                <div class="col-md-4">
                    <h3>Address & Contact Details</h3>
                </div>
                <div class="col-md-6">
                    <h3>Options</h3>
                </div>
                <div class="col-md-2">
                    <h3>Price</h3>
                </div>
            </div>
        </div>
        <div class="service-head m-view">
            <div class="row">
                <div class="col-12">
                    <h3>Address & Contact Details</h3>
                </div>
            </div>
        </div>
        <div class="service-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-description">
                        <div class="address-details">

                            <div class="form-group">
                                <div class="select-wrap" style="">
                                    <select class="form-control" id="propertiesdropdown">
                                        <option value="0" selected="selected"> Select a property</option>
                                        <option class="propertiesdropdown-adress" value="1">A S K Letting Ltd, 148
                                            Cranbrook Road,
                                            Ilford, ig1 4lz
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <button id="formbut" class="add-form-btn">Enter address manually
                            </button>

                            <div class="new_form">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="ad-one">Flat or house number</label>
                                            <input type="text" class="form-control" id="ad-one"
                                                   placeholder="e.g. Flat 1 or 5 Abbey Road">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="town">Town</label>
                                            <input type="text" class="form-control" id="town"
                                                   placeholder="e.g. London or Manchester">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="psot_code">Post Code</label>
                                            <input type="text" class="form-control" id="psot_code"
                                                   placeholder="e.g. W11 1JA">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="remove_form btn">
                                            <i class="fa fa-remove"></i>Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-details">
                            <h6>Person onsite details <span>*</span></h6>
                            <p>Please provide contact details of the person that will be onsite. This is the person that
                                will give the engineer access to enter the property.</p>
                            <p><b>Name:</b> <span class="output-FirstName">Sam</span> <span
                                        class="output-Surname">Malik</span> - <b>Phone:</b> <span
                                        class="output-PhoneNumber">+447715899192</span></p>
                            <button class="edit-form-btn">Edit contact details
                            </button>
                            <div class="contact-details-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Contact_name"
                                                   placeholder="First Name" value="Sam">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact_surname"
                                                   placeholder="Contact Surname" value="Malik">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Contact_number"
                                                   placeholder="Phone Number" value="+447715899192">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="contact_email"
                                                   placeholder="Email" value="sammalik@gmail.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="service-head m-view">
                        <div class="row">
                            <div class="col-9">
                                <h3>Options</h3>
                            </div>
                            <div class="col-3">
                                <h3>Price</h3>
                            </div>
                        </div>
                    </div>
                    <div class="service-options services-booking">
                        <div class="row">
                            <div class="col-9 pr-0">
                                <!--    Boiler Maintenance   -->
                                <div class="round-box">
                                    <div class="boiler-check-wrap">
                                        <h4>Gas Safety Certificate
                                        </h4>
                                        <div class="form-check">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </div>

                                        <span>Boiler Check Included -
                                The boiler check is included in the base price and covers any hot water appliances connected at no extra cost (e.g. showers, radiators)</span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="price-div" style="display: block;">
                                        <span class="price">£45</span>
                                </div>
                            </div>
                            <div class="col-9 pr-0">
                                <!--    Additional Appliances   -->
                                <div class="round-box">
                                    <div class="additional_appliance text-center">
                                        <h4>Add Additional Appliances <span>(+ £15 per appliance)</span>:</h4>
                                        <div class="number-counter">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-number minus"
                                                      disabled="disabled" data-type="minus"
                                                      data-field="quant[1]">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quant[1]" class="form-control input-number"
                                                       value="0"
                                                       min="0" max="10">
                                                <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number" data-type="plus"
                                                          data-field="quant[1]">
                                                     <i class="fa fa-plus" aria-hidden="true"></i>
                                                  </button>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="info">
                                            <p><span>Please note:</span> If you have more then one appliance connected
                                                to a gas</p>
                                            <p>It is a legal requirement and the responsibility of the landlord to have
                                                all
                                                appliances connected to a gas supply (e.g. boiler, hob, cooker or gas
                                                fire) checked
                                                by a qualified gas safe engineer</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="price-div">
                                    <input type="text" value="£15" data-value="15" id="appliance_price"
                                           class="price">
                                </div>
                            </div>
                            <div class="col-9 pr-0">
                                <!--    Boiler Maintenance   -->
                                <div class="round-box">
                                    <div class="boiler-check-wrap optionals">
                                        <h4>Boiler Maintenance Service</h4>
                                        <div class="form-check">
                                            <input type="checkbox" id="AddBoilerService" name="boiler" tabindex="0"
                                                   class="radio-button" value="1" data-val="1">
                                            <label for="AddBoilerService" class="radio-button__label"></label>
                                        </div>

                                        <span>Add Boiler Service + £60 (Optional)</span>
                                        <div class="info-2">
                                            <p>Keep your boiler in excellent condition – as recommended by boiler
                                                manufacturers. A
                                                regular service of once a year is the best approach to ensuring a well
                                                functioning
                                                boiler. Please visit or refer to 36(2) of the HSE Approved Code of
                                                Practice, for
                                                more information regarding landlord duties and obligations relating to
                                                flues,
                                                maintaining pipes and appliances.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="price-div">

                                    <input type="text" value="£60" class="price">
                                </div>
                            </div>
                            <div class="col-9 pr-0">
                                <!--    Desired Dates   -->
                                <div class="round-box">
                                    <h4>Select Desired Dates:<a tabindex="0" role="button" class=""
                                                                data-container="body"
                                                                data-toggle="popover" data-trigger="focus"
                                                                data-placement="top" title=""
                                                                data-content="<span>Although we endeavour to accommodate your requested dates, this however, is not always possible.</span><hr><span>Our engineer will make contact with the specified 'person of contact' to confirm, change or adjust the exact date and time for the inspection.</span><hr><span>If a date and time cannot be agreed upon, you will be refunded in full.</span>  "
                                                                data-original-title="">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </a></h4>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div id="yourBox" class="styled-checkbox" onclick="Dateselect11();">
                                                <div class="form-group">
                                                    <input type="checkbox" class="form-check-input" id="asap3"
                                                           value="ASAP2"
                                                           name="ASAP2">
                                                    <label for="asap3" class="form-check-label">As soon as
                                                        possible</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 text-center">
                                            <p class="date-or">or</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input id="es_datepicker" placeholder="Select date"
                                                       class="hasDatepicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">

                            </div>
                            <div class="col-9 pr-0">
                                <!--    Message Engineer   -->
                                <div class="round-box">
                                    <div class="message-engineer">
                                        <h6>Message to Engineer: (optional)</h6>
                                        <textarea style="padding-top: 15px;" class="form-control" id="eng-messege"
                                                  name="message"
                                                  placeholder="e.g. &quot;only on weekends&quot; or &quot;before 12pm on Mondays &amp; Thursdays&quot;"
                                                  cols="10" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--service checkout-->
        <div class="service-checkout">
            <div class="inner">
                <div class="total">

                    <p><span>Total</span> £60.00</p>
                    <a href="#" class="btn">Checkout now</a>
                    <img src="assets/images/payment-way.png" class="img-fluid" alt="payment">
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('button.add-form-btn').click(function () {
        $(" .new_form").show();
        $(" .select-wrap").hide();
    });
    $('button.remove_form').click(function () {
        $(" .new_form").hide();
        $(" .select-wrap").show();
    });
</script>
<script>
    $(function () {
        $(".optionals input[type='checkbox']").change(function () {
            if ($(this).is(':checked')) {
                $(".services-booking .price-div").show();
            } else {
                $(".services-booking .price-div").hide();
            }
        });
    });

</script>
<script>

    $('.btn-number').click(function (e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function () {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function () {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
<script>
    $("button.edit-form-btn").click(function () {
        $(this).toggleClass("show");
        $(".contact-details-form ").toggle();
    });
</script>
<?php
include('footer.php');
?>
