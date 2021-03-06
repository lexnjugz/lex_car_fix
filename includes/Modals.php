<!-- Appointment Form -->
        <div class="modal fade" id="appointmentForm">
            <div class="modal-dialog container">
                <div class="modal-content">
                    <div class="modal-header"><a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i><span>Appointment</span></a>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 hidden-xs hidden-sm">
                                    <div class="animate"><img src="images/appointment-bg1.png" class="img-responsive" alt=""></div>
                                </div>
                                <div class="col-md-7">
                                    <h2>Schedule Auto Service</h2>
                                    <p>To schedule an appointment with your friendly neighborhood experts at Car Repair Services, give us a call at 1-800-123-4567 or fill out the form below with your information and requested services. One of our team members will get back to you as soon as possible to confirm your appointment. </p>
                                    <div class="divider"></div>
                                    <form id="appointment-form" class="contact-form form-horizontal col-md-8" name="contactform" method="post">
                                        <div id="successAppointment" class="successform">
                                            <p>Your message was sent successfully!</p>
                                        </div>
                                        <div id="errorAppointment" class="errorform">
                                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                                        </div>
                                        <h5>Contact information</h5>
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control input-custom" value="" placeholder="First name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lastname" class="form-control input-custom" value="" placeholder="Last name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control input-custom" value="" placeholder="Phone number">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control input-custom" value="" placeholder="Your E-mail">
                                        </div>
                                        <div class="divider"></div>
                                        <h5>Appointment details</h5>									
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input name="date1" type='text' class="form-control input-custom" />
                                                <span class="input-group-addon">
                                                    <span class="icon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker2'>
                                                <input name="date2" type='text' class="form-control input-custom" />
                                                <span class="input-group-addon">
                                                    <span class="icon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker3'>
                                                <input name="date3" type='text' class="form-control input-custom" />
                                                <span class="input-group-addon">
                                                    <span class="icon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>									
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker4'>
                                                <input name="time1" type='text' class="form-control input-custom" />
                                                <span class="input-group-addon">
                                                    <span class="icon-clock"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="autoinfo" type="text" class="form-control input-custom" value="" placeholder="Vehicle Year, Make and Model">
                                        </div>
                                        <p>I'm making an appointment for</p>
                                        <div class="form-group">
                                            <div class="select-wrapper">
                                                <select name="select1" class="input-custom">
                                                    <option value="Brake Inspections">Brake Inspections</option>
                                                    <option value="Air Filtration Services">Air Filtration Services</option>
                                                    <option value="Cooling System Services">Cooling System Services</option>
                                                    <option value="Transmission Services">Transmission Services</option>
                                                    <option value="Fuel System Cleaning">Fuel System Cleaning</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control textarea-custom" placeholder="Comments and Questions"></textarea>
                                        </div>
                                        <p><i>Maximum of 250 characters</i></p>
                                        <button type="submit" id="submit" class="btn btn-lg"><span>SUBMIT</span></button>
                                        <div class="divider"></div>
                                        <p><i>Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.</i></p>
                                        <div class="divider"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Appointment Form -->
        
        <!-- *****************************************  -->

        <!--Get Recalls-->
        <div class="modal modal-info fade" id="getRecallsModal">
            <div class="modal-dialog container">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-xs-9">
                                <h3>Recalls, Investigations & Complaints</h3>
                            </div>
                            <div class="col-xs-3">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                        <ul class="marker-list-sm">
                            <li>Lorem ipsum dolor sit amet, consectetur</li>
                            <li>Repellendus alias unde tempore assumenda fugiat</li>
                            <li>Blanditiis impedit repellat, quos minus dolorem autem</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Get Recalls -->
        
        <!-- *****************************************  -->
        
        <!--Get Form Info-->
        <div class="modal modal-info fade" id="tab1Modal">
            <div class="modal-dialog container">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-xs-9">
                                <h3>The Tires Price</h3>
                            </div>
                            <div class="col-xs-3">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                        <ul class="marker-list-sm">
                            <li><b>Price:</b> $49.95</li>
                            <li><b>Your discount:</b> -20%</li>
                            <li><b>Total Price:</b> $39.95</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Get Form Info -->
        <!--Get Form Info-->
        <div class="modal modal-info fade" id="tab2Modal">
            <div class="modal-dialog container">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-xs-9">
                                <h3>Oil Change Price</h3>
                            </div>
                            <div class="col-xs-3">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                        <ul class="marker-list-sm">
                            <li><b>Price:</b> $49.95</li>
                            <li><b>Your discount:</b> -20%</li>
                            <li><b>Total Price:</b> $39.95</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Get Form Info -->
        <!--Get Form Info-->
        <div class="modal modal-info fade" id="tab3Modal">
            <div class="modal-dialog container">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-xs-9">
                                <h3>Batteries Price</h3>
                            </div>
                            <div class="col-xs-3">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                        <ul class="marker-list-sm">
                            <li><b>Price:</b> $49.95</li>
                            <li><b>Your discount:</b> -20%</li>
                            <li><b>Total Price:</b> $39.95</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Get Form Info -->
        <!--Get Form Info-->
        <div class="modal modal-info fade" id="tab4Modal">
            <div class="modal-dialog container">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-xs-9">
                                <h3>Brakes Price</h3>
                            </div>
                            <div class="col-xs-3">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                        <ul class="marker-list-sm">
                            <li><b>Price:</b> $49.95</li>
                            <li><b>Your discount:</b> -20%</li>
                            <li><b>Total Price:</b> $39.95</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Get Form Info -->
        <!--Get Form Info-->
        <div class="modal modal-info fade" id="tab5Modal">
            <div class="modal-dialog container">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-xs-9">
                                <h3>Aligment Price</h3>
                            </div>
                            <div class="col-xs-3">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
                        <ul class="marker-list-sm">
                            <li><b>Price:</b> $49.95</li>
                            <li><b>Your discount:</b> -20%</li>
                            <li><b>Total Price:</b> $39.95</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Get Form Info -->