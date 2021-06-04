<?php
include('header.php');
?>


<div class="Congrat-box">
    <div class="wrap">
        <div class="container ">
            <div class="inner ">
                <div class="content text-center">
                    <h1><span>Thank You</span><br></h1>
                </div>
                <div class="info">
                    <h6>Holding deposit placed! wait for landlord to accept application</h6>
                    <p>We have sent your details to the landlord, and are awaiting a response from them as to how to
                        proceed.</p>
                    <p>If accepted by the landlord, we will contact you to either begin referencing or ask you to review
                        and sign the contract.</p>
                </div>
                <div class="action-btn">
                    <a href="#" class="btn btn-primary btn-send-message">
                        <i class="fa fa-comments"></i> Send Message to Landlord
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<!--main content-->
<div class="holding_deposit_view">
    <div class="container">
        <div class="row">
            <!--         main content     -->

            <div class="col-lg-8">
                <div class="instarent-content-inners">
                    <!--    housemates   -->

                    <div class="housemates">
                        <h3>My Housemates</h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>oneday2144@gmail.com</td>
                            </tr>

                            </tbody>
                        </table>
                        <a class="btn" href="mailto:tenantname@gmail.com"><i class="fa fa-envelope-o"
                                                                             aria-hidden="true"></i> Send Email To All
                            Parties</a>
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

                            <div class="property-btn">
                                <a href="#" class="btn">
                                    Go to property description
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--     guarantors and tenants    -->
<div class="guarantors-tenants">
    <div class="container">
        <div class="inner">
            <h3>Need to add tenants or guarantors?</h3>
            <h6>Add Additional Tenant or request Guarantor</h6>
            <p>As the lead tenant, if you would like to add a guarantor, or an additional tenant, you can do so
                here:</p>
            <div class="action-btn ">
                <a class="btn add-tenant" data-toggle="modal" data-target="#add_tenant">
                    <i class="fa fa-user-plus" aria-hidden="true"></i> Add tenant
                </a>
                <a class="btn add-guarantor" data-toggle="modal" data-target="#add_guarantor">
                    <i class="fa fa-user-plus" aria-hidden="true"></i> Add A Guarantor
                </a>
            </div>
            <p>Note: The landlord will need to accept the new person, and will decide whether they are referenced or
                not.</p>
        </div>
    </div>
</div>


<!-- add tenant Modal -->
<div class="modal fade" id="add_tenant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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
                <a class="btn remove">
                    Remove tenant
                </a>
                <button type="button" class="btn">Add</button>
            </div>
        </div>
    </div>
</div>


<?php
include('footer.php');
?>
