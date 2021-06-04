<?php
include('header.php');
?>
<form  id="myform" method="post" action="/">
    <!--   you renting-->

    <section class="you-renting section-padding">
        <div class="container">
            <div class="you-renting-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-listing-heading">
                            <h2><i class="fa fa-check-square" aria-hidden="true"></i>What are you renting? *</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--  room only / whole property -->
                    <div class="col-md-12">

                        <!--                      room only / whole property  tabs-->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="whole-property" data-toggle="tab" href="#whole_property"
                                   role="tab" aria-controls="home" aria-selected="true">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="whole_prperty" name="wholeprperty">
                                        <label class="form-check-label" for="whole_prperty">
                                            An entire property
                                        </label>
                                    </div>


                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="room-only" data-toggle="tab" href="#room_only" role="tab"
                                   aria-controls="profile" aria-selected="false">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="only_room">
                                        <label class="form-check-label" for="only_room">
                                            Room(s) in a shared property
                                        </label>
                                    </div>


                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <!--                            end whole property-->

                            <div class="tab-pane fade show " id="whole_property" role="tabpanel"
                                 aria-labelledby="whole-property">


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="flat">Property Type</label>
                                            <div class="select-wrap" >
                                                <select class="form-control" id="flat" name="flat">
                                                    <option value="default" selected="selected">Please Select</option>
                                                    <optgroup label="Single Occupancy">
                                                        <option value="6">Studio Flat</option>
                                                        <option value="13">Bedsit</option>
                                                    </optgroup>
                                                    <optgroup label="Entire House">
                                                        <option value="0">Detached House</option>
                                                        <option value="1">Semi-Detached House</option>
                                                        <option value="2">Terraced House</option>
                                                        <option value="3">Bungalow</option>
                                                        <option value="12">End Terrace</option>
                                                    </optgroup>
                                                    <optgroup label="Entire Flat">
                                                        <option value="4" >Flat</option>
                                                        <option value="5">Penthouse</option>
                                                        <option value="7">Maisonette</option>
                                                    </optgroup>
                                                    <optgroup label="Other Property Types">
                                                        <option value="10">Mobile Home</option>
                                                        <option value="11">House Boat</option>
                                                    </optgroup>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" >
                                            <label for="furnishing-options">Furnishing Options</label>
                                            <div class="select-wrap">
                                                <select class="form-control" id="furnishing-options" name="furnishing_options" required >

                                                    <option value="default"> Please Select</option>
                                                    <option value="1">Furnished</option>
                                                    <option value="2">Unfurnished</option>
                                                    <option value="3">Furnishing at tenant choice</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="EPCRating">
                                                EPC Rating (<a class="EPCExternalLink" target="_blank" href="#">Purchase
                                                    EPC for
                                                    £<span class="7407f33-11 7407f33-span">69</span></a>)
                                            </label>
                                            <div class="select-wrap">
                                                <select class="form-control" id="EPCRating" name="EPCRating">
                                                    <option value="default">Please Select</option>
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                    <option value="4">D</option>
                                                    <option value="5">E</option>
                                                    <option value="6">F</option>
                                                    <option value="7">G</option>
                                                    <option value="8">Currently Being Obtained</option>
                                                    <option value="9">EPC Not Required</option>
                                                </select>
                                            </div>
                                            <p class="EPCRating-error v-error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="room-bathroom-number">
                                            <div class="form-group">
                                                <label for="NumberOfBedrooms">Number of Bedrooms </label>
                                                <div class="number">
                                                        <span class="minus"><i class="fa fa-minus"
                                                                               aria-hidden="true"></i></span>
                                                    <input type="text" id="NumberOfBedrooms" name="NumberOfBedrooms" value="0" min="0">
                                                    <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NumberOfBathrooms">Number of Bathrooms</label>
                                                <div class="number">
                                                        <span class="minus"><i class="fa fa-minus"
                                                                               aria-hidden="true"></i></span>
                                                    <input type="text" id="NumberOfbathrooms" name="NumberOfbathrooms" value="0"/>
                                                    <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <!--                            end whole property-->

                            <!--                            room only tab-->
                            <div class="tab-pane fade" id="room_only" role="tabpanel" aria-labelledby="room-only">


                                <div class="row">
                                    <div class="col-md-6">
                                        <!--                                room in a shared house-->
                                        <div class="form-group">
                                            <label for="WholePropertyType">Property Type</label>
                                            <div class="select-wrap">
                                                <select class="form-control" id="WholePropertyType" name="WholePropertyType">
                                                    <optgroup label="Room in a Shared Property">
                                                        <option value="default" selected="selected">Please Select</option>
                                                        <option value="8">Room in a Shared House</option>
                                                        <option  value="9">Room in a Shared Flat
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="room-furnishing-options">Furnishing Options</label>
                                            <div class="select-wrap">
                                                <select class="form-control" id="room-furnishing-options" name="roomfurnishingoptions">

                                                    <option value="default"> Please Select</option>
                                                    <option value="1">Furnished</option>
                                                    <option value="2">Unfurnished</option>
                                                    <option value="3">Furnishing at tenant choice</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="room-bathroom-number">
                                            <div class="form-group">
                                                <label for="NumberOf_Bedrooms">Number of Bedrooms</label>
                                                <div class="number">
                                                        <span class="minus"><i class="fa fa-minus"
                                                                               aria-hidden="true"></i></span>
                                                    <input type="text" id="NumberOf_Bedrooms" name="NumberOfBedroomsshared" value="0"/>
                                                    <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NumberOf_Bathrooms">Number of Bathrooms</label>
                                                <div class="number">
                                                        <span class="minus"><i class="fa fa-minus"
                                                                               aria-hidden="true"></i></span>
                                                    <input type="text" id="NumberOf_bathrooms" name="NumberOfBathroomsshared" value="0"/>
                                                    <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
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

    </section>

    <!--    end property details-->

    <!--      add property detalis    -->
    <section class="add-property-details">
        <div class="container">
            <div class="add-property-details-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-listing-heading">
                            <h2> <i class="fa fa-check-square" aria-hidden="true"></i> Property location *</h2>
                        </div>
                    </div>
                </div>
                <!--           property details -->
                <div class="row mt-4">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="post-code-row">
                                    <div class="form-group">
                                        <label for="post_code">Post code <i class="fa fa-info-circle"></i></label>
                                        <input type="text" class="form-control" id="post_code" name="postcode">
                                        <p class="required-error v-error"></p>
                                    </div>
                                    <p class="btn " id="post_code_finder">Search
                                        Address
                                    </p>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="seclect-address-manually">
                                    <p id="select_address_manually">Enter address manually</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-property-details-inputs">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Select_address">Select an address</label>
                                    <div class="select-wrap">
                                        <select class="form-control" id="Select_address">
                                            <option value="0" selected="selected"> Please Select</option>
                                            <option value="1">Furnished</option>
                                            <option value="2">Unfurnished</option>
                                            <option value="3">Furnishing at tenant choice</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address1">Flat or House Number (kept private)<i
                                                class="fa fa-info-circle"></i>
                                    </label>
                                    <input class="form-control" id="address1" name="address"  placeholder="eg. Flat 301 or 10 Downing St" type="text">


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address2">
                                        Address Line 2 (optional) <i class="fa fa-info-circle"></i> </label>
                                    <input class="form-control" title="" data-val="true" id="address2" name="Address2" placeholder="eg. Flat 301 or 10 Downing St" type="text" value="">

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address3">
                                        Address Line 3 (optional)<i class="fa fa-info-circle"></i> </label>
                                    <input class="form-control" title="" data-val="true"
                                           id="address3"
                                           name="Address3" placeholder="eg. Flat 301 or 10 Downing St" type="text"
                                           value="">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Town">
                                        Town<i class="fa fa-info-circle"></i> </label>
                                    <input class="form-control" data-val="true"
                                           id="Town"
                                           name="Town"
                                           placeholder="eg. London" type="text" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  property description -->
    <section class="property-description section-padding">
        <div class="container">
            <div class="property-description-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-listing-heading">
                            <h2><i class="fa fa-check-square" aria-hidden="true"></i> Property Description *</h2>
                        </div>
                    </div>
                    <div class="form-inline  property-description-btn">
                        <div class=" custom-radio custom-control-inline">
                            <div class="form-check write-desc">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="write-description" value="option1" >
                                <label class="form-check-label" for="write-description">
                                    Write Description
                                </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="smart-description" value="option2">
                                <label class="form-check-label" for="smart-description">
                                    Generate Smart Description
                                </label>
                            </div>

                        </div>

                    </div>

                </div>

                <!--                    write desciption -->
                <div class="description-write">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="summernote"><p></p></div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>

                <!--                    smart desciption -->
                <div class="description-samrt">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Once you have confirmed all the details for your property, we will use this information to generate a description to match your property. You will be able to review and edit this description at the next stage, when you preview the advert.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--        end  property description -->

    <!--                Tenancy Details      -->

    <section class="tenancy-details ">
        <div class="container">
            <div class="tenancy-details-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-listing-heading">
                            <h2><i class="fa fa-check-square" aria-hidden="true"></i> Tenancy Details *</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="RentPerMonth" class="monthly-rent-lable">Monthly Rent For Entire Property </label>
                            <div class="form-inline">
                                <div class="input-group-addon">£</div>
                                <input class="text-box single-line form-control" data-val="true"
                                       data-val-number="The field Monthly Rent (£) must be a number."
                                       data-val-range="Please enter a number between 100 and 100000"
                                       data-val-range-max="100000" data-val-range-min="100" id="RentPerMonth"
                                       name="RentPerMonth" type="text" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="max-min-tenancy">
                            <div class="form-group">
                                <label for="MinimumTenancy">Minimum Tenancy (Months)</label>
                                <div class="select-wrap">
                                    <select class="form-control" id="MinimumTenancy" name="MinimumTenancy">
                                        <option value="default">Please select...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="RentPerWeek" class="rentper-week-lable">Weekly Rent For Entire Property </label>
                            <div class="form-inline">
                                <div class="input-group-addon">£</div>
                                <input id="RentPerWeek" name="RentPerWeek" class="form-control" type="text"
                                       value="230"
                                       aria-invalid="false">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Maximumofccupancy">Maximum Number of Tenants</label>
                            <div class="select-wrap">
                                <select class="form-control" id="Maximumofccupancy" name="Maximumofccupancy">
                                    <option value="0">Please select...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="DepositSelector">Deposit Amount</label>
                            <div class="select-wrap">
                                <select class="form-control" id="DepositSelector" name="DepositSelector">
                                    <option value="0" selected="selected">Please select...</option>
                                    <option value="none" >No deposit</option>
                                    <option value="2weeks">2 weeks' rent (£461.53)</option>
                                    <option value="3weeks" >3 weeks' rent (£692.30)</option>
                                    <option value="1month">1 month's rent (£1000.00)</option>
                                    <option value="5weeks">5 weeks' rent (£1153.84)</option>
                                    <option value="custom">Custom</option>
                                </select>
                            </div>
                            <div class="form-inline mt-2" id="custom-deposit" style="display:none;">
                                <div class="input-group-addon">£</div>
                                <input id="DepositSelector-custom" name="RentPerWeek" class="form-control" type="text" value="0" aria-invalid="false" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label class="form-label">Date</label>
                            <input id="datepicker" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--             end   Tenancy Details      -->


    <!--        Features  -->

    <section class="features section-padding">
        <div class="container">
            <div class="features-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-listing-heading">
                            <h2>
                                <i class="fa fa-check-square" aria-hidden="true"></i> Features
                            </h2>
                        </div>


                    </div>
                    <div class="col-md-12 mt-4 mb-4">
                        <p>Select the features that are available</p>
                        <div class="styled-checkbox">
                            <div required="required">
                                <div class="form-inline">
                                    <input type="checkbox" id="bills" value="Bills" name="Bills">
                                    <label for="bills">Bills Included</label>
                                </div>
                                <div class="form-inline">
                                    <input type="checkbox" id="gacc" value="Garden" name="Garden">
                                    <label for="gacc">Garden Access</label>
                                </div>
                                <div class="form-inline">
                                    <input type="checkbox" id="park" value="Parking" name="Parking">
                                    <label for="park">Parking</label>
                                </div>
                                <div class="form-inline">
                                    <input type="checkbox" id="fire" value="Fireplace" name="Fireplace">
                                    <label for="fire">Fireplace</label>
                                </div>
                                <div class="form-inline">
                                    <input type="checkbox" id="bband" value="Broadband" name="Broadband">
                                    <label for="bband">Broadband</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--     end   Features  -->

    <!--        Preferred Tenant  -->
    <section class=" preferred-tenant">
        <div class="container">
            <div class="preferred-tenant-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-listing-heading">
                            <h2>
                                <i class="fa fa-check-square" aria-hidden="true"></i> Preferred Tenant
                            </h2>
                        </div>

                    </div>
                    <div class="col-md-12 mt-4 mb-4">
                        <p>Select the features that are available</p>
                        <div class="styled-checkbox">
                            <div required="required">
                                <div class="form-inline">
                                    <input type="checkbox" id="stuall" value="Students" name="Students">
                                    <label for="stuall">Students Allowed</label>
                                </div>
                                <div class="form-inline">
                                    <input type="checkbox" id="famall" value="Families" name="Families">
                                    <label for="famall">Families Allowed</label>
                                </div>
                                <div class="form-inline">
                                    <input type="checkbox" id="dssav" value="DSS" name="DSS"> <label for="dssav">DSS
                                        Available</label>
                                </div>
                                <div class="form-inline">
                                    <input type="checkbox" id="petall" value="Pets" name="Pets">
                                    <label for="petall">Pets Allowed</label>
                                </div>
                                <div class="form-inline">
                                    <input type="checkbox" id="smkall" value="Smokers" name="Smokers">
                                    <label for="smkall">Smokers Allowed</label>
                                </div>
                                <div class="form-inline">
                                    <input type="checkbox" id="stuonl" value="Students_o" name="Students_o">
                                    <label for="stuonl">Students Only</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--      end  Preferred Tenant  -->


    <!--        file upload  -->
    <section class="file-upload section-padding">
        <div class="container">
            <div class="file-upload-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-listing-heading">
                            <h2><i class="fa fa-check-square" aria-hidden="true"></i> Upload Pictures</h2>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <p>Add pictures of your property</p>
                        <form enctype="multipart/form-data">
                            <div class="file-loading">
                                <input id="kv-explorer" type="file" multiple>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--        file upload  -->

    <!--    Terms    -->
    <section class="terms">
        <div class="container">
            <div class="terms-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-listing-heading">
                            <h2><i class="fa fa-check-square" aria-hidden="true"></i> Terms *</h2>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <input data-val="true"  id="AgreeToTerms"
                               name="AgreeToTerms" type="checkbox" value="true">
                        <label for="AgreeToTerms">Tick Here To Agree To The Zacoota Terms:</label>
                        <p>I confirm that I have read and agree to all the <a href="#">terms and conditions</a> and <a href="#"> privacy policy.</a> </p>

                    </div>
                    <div class="col-md-12">
                        <div class="agreement__button">
                            <button id="propertySubmitButton" type="submit" class="btn btn-primary" value="Submit &amp; Preview">Submit &amp; Preview</button>
                            <button id="SaveButton" class="btn btn-default">Save</button>

                            <button id="ResetForm" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--   end Terms   -->

</form>

<?php
include('footer.php');
?>
