<?php
include('header-listing.php');
?>

<!--main content-->
<div class="instarent-content-wrap">
    <div class="container">
<!--        for hide and show-->
        <div class="instarent-details-wrap">
            <div class="row">
                <div class="col-12">
                    <a href="instarent-info.php" class=" btn back-rent-now"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="review-commit">
                        <p><b>Please note:</b> Tenants are highly advised to view the property
                            in person first before initiating the Instarent process.<br> If you haven't already, you can <a href="chat.php">request a viewing here</a></p>

                    </div>
                </div>
                <!--         main content     -->

                <div class="col-lg-8 order-two">
                    <div class="instarent-content-inners">

                        <div class="info">

                            <p>Before committing to a rental agreement you are required to add the names of all tenants aged 18 and over sharing this property with you. All named tenants will be added on to the tenancy agreement.</p>
                        </div>
                        <!--       tenant details    -->

                        <div class="instarent-tenants">
                            <h3>Tenant details</h3>

                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td>Sam Malik</td>
                                    <td><a href="instarent.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> </td>
                                </tr>
                                <tr>
                                    <td>Zakk</td>
                                    <td><a href="instarent.php">Edit</a> / <a href="instarent.php">Remove</a></td>

                                </tr>
                                </tbody>

                            </table>

                            <div class="row">
                                <div class=" col-md-12 ">
                                    <a class="btn add-tenant" data-toggle="modal" data-target="#add_tenant">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i> Add tenant
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--                side bar-->
                <div class="col-lg-4 pl-0 order-one">
                    <div class="instarent-side-bar">
                        <div class="property">
                            <div class="property-image">
                                <img src="assets/images/listing-item-2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="property-details">
                                <h6>3 bed Flat</h6>
                                <p> 99 Huxley Road, London E10 5QX</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><b>Rooms:</b></li>
                                    <li class="list-inline-item"> 3 bed,</li>
                                    <li class="list-inline-item">1 bath</li>
                                </ul>
                                <div class="property-alert">
                                    <p>Hurry, this property is in high demand, other tenants are also viewing this property.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!--         main content     -->

                <div class="col-lg-8">
                    <div class="instarent-content-inners">
                        <div class="date-alert">
                            <p> Please agree the proposed move in date with the landlord first. Please bare in mind, referencing can take up to 5 days.</p>
                        </div>
                        <!--       move in date     -->
                        <div class="move-in-date">
                            <h3>Proposed Move In Date</h3>
                            <div class="move_in_date" id="move_in_dat"></div>
                        </div>

                    </div>
                </div>
                <!--                side bar-->
                <div class="col-lg-4 pl-0">
                    <div class="instarent-side-bar">

                        <div class="payment-details">
                            <h4>Payment details</h4>
                            <div class="payment-info">
                                <p>The first month's rent and deposit amount is due in full after contract signing</p>
                            </div>

                            <!--                        <p>Total rent/deposit amount (due after contract signing)</p>-->
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td>Full rent amount: <span>(Per month)</span></td>
                                    <td>£600.00</td>
                                </tr>
                                <tr>
                                    <td>Deposit </td>
                                    <td>£807.00</td>
                                </tr>

                                <tr>
                                    <td>Holding deposit:
                                    </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Due now</td>
                                    <td> £161.00</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="deposit-btn">
                                <span>To secure this property you need to place a holding deposit. This deposit will go towards paying your first month's rent</span>
                                <a href="#" class="btn">Reserve This Property</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- add tenant Modal -->
<div class="modal fade" id="add_tenant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Add Tenant</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Before committing to a rental agreement you are required to add the names of all tenants aged
                    18 and over sharing this property with you.
                    All named tenants will be added on to the tenancy agreement.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control f_name" id="first_name" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control la_name" id="last_name" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control phone_number" id="user_number" placeholder="phone number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control tenant_email" id="user_email" placeholder="Email address">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a class="btn remove">
                    Remove tenant
                </a>
                <button type="button" class="btn">Add</button>
            </div>
        </div>
    </div>
</div>
<script>
    //move in date
    $(function () {
        var today = new Date();
        var widget = $("#move_in_dat").datepicker("widget");
        $("#move_in_dat").datepicker({
            minDate: today,
            format: 'dd-mm-yyyy',
        });

        $("#move_in_dat").datepicker({defaultDate: null});


    });

</script>
<script>
    $(document).ready(function () {
        $("#add_tenant").click(function () {

            $(".tenant-details").clone().appendTo(".tenant-details-new");
        });
        $(".remove").click(function () {

            $(this).parent('.tenant-details').remove();
        });
    });
</script>


<?php
include('footer.php');
?>
