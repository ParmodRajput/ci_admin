<div class="content-wrapper">
<?php
      $this->load->helper('form');
      $error = $this->session->flashdata('error');
      if($error)
      {
  ?>
  <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <?php echo $this->session->flashdata('error'); ?>                    
  </div>
  <?php } ?>
  <?php  
      $success = $this->session->flashdata('success');
      if($success)
      {
  ?>
  <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <?php echo $this->session->flashdata('success'); ?>
  </div>
  <?php } ?>
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <i class="fa fa-home" aria-hidden="true"></i> Property Management
         <small>Add / Edit Property</small>
      </h1>
   </section>
   <section class="content">
      <form data-toggle="validator" role="form" id="ResidentialFlatmateAddProperty" action="<?php echo base_url() ?>ResidentialFlatmateAddProperty" method="post">
         <div class="row">
            <!-- left column -->
            <div  class="col-sm-12">
               <h3>Left Tabs</h3>
               <hr/>
               <div class="col-xs-3">
                  <!-- required for floating -->
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs tabs-left sideways">
                     <li class="active"><a href="#Property-Details" data-toggle="tab">Property Details</a></li>
                     <li><a href="#Locality-Details" data-toggle="tab">Locality Details</a></li>
                     <li><a href="#Rental-Details" data-toggle="tab">Rental Details</a></li>
                     <li><a href="#Gallery" data-toggle="tab">Gallery</a></li>
                     <li><a href="#Amenities" data-toggle="tab">Amenities</a></li>
                     <li><a href="#Schedule" data-toggle="tab">Schedule</a></li>
                  </ul>
               </div>
               <div class="col-xs-9">
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div class="tab-pane active" id="Property-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="apartment_type">Apartment Type *</label>
                                 <select class="form-control required" id="apartment_type" name="Property[apartment_type]" data-error="Please enter name field." required>
                                    <option>Select</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="independent house/villa">Independent House/Villa</option>
                                    <option value="gated community villa">Gated Community Villa</option>
                                 </select>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="apartment_name">Apartment Name *</label>
                                 <input type="text" class="form-control" id="apartment_name" name="Property[apartment_name]" value="<?php echo $PropertyInfo->apartment_name ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="address">BHK Type *</label>
                                 <select class="form-control required" id="bhk_type" name="Property[bhk_type]" required>
                                    <option>Select</option>
                                 <?php
                                    $BHK =$PropertyInfo->bhk_type;
                                    if(!empty($BHKType)){
                                      foreach ($BHKType as $value){ ?>
                                      <option value="<?php echo $value; ?>" <?php if($key ==$BHK) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                     <?php }
                                    }
                                 ?>
                                    <!-- <option value="1">1 RK</option>
                                    <option value="2">1 BHK</option>
                                    <option value="3">2 BHK</option>
                                    <option value="4">3 BHK</option> -->
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="floor">Floor *</label>
                                 <select class="form-control required" id="floor" name="Property[floor]" required>
                                    <option>Select</option>
                                 <?php
                                    $floor = $PropertyInfo->floor;
                                    if(!empty($floor)){
                                      foreach ($floor as $value){ ?>
                                      <option value="<?php echo $value; ?>" <?php if($key ==$floor) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                     <?php }
                                    }
                                 ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="total_floor">Total Floor *</label>
                                 <select class="form-control required" id="total_floor" name="Property[total_floor]" required >
                                    <option>Select</option>
                              <?php 
                                 $total_floor = $PropertyInfo->total_floor;
                                 if(!empty($top_floor)){
                                   foreach ($top_floor as $value){ ?>
                                   <option value="<?php echo $value; ?>" <?php if($key ==$total_floor) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                  <?php }
                                 }
                              ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="property_age">Property Age *</label>
                                 <select class="form-control required" id="property_age" name="Property[property_age]" required>
                                    <option>Select</option>
                                 <?php 
                                    $property_age = $PropertyInfo->property_age;
                                    if(!empty($proage)){
                                      foreach ($proage as $value){ ?>
                                      <option value="<?php echo $value; ?>" <?php if($key ==$property_age) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                     <?php }
                                    }
                                 ?>
                                    <!-- <option value="-1">Under Construction</option>
                                    <option value="0">Less than one year</option>
                                    <option value="1-3">1 - 3 Years</option>
                                    <option value="3-5">3-5 Years</option>
                                    <option value="5-10">5-10 Years</option>
                                    <option value="10+">More than 10 Years</option> -->
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="facing">Facing *</label>
                                 <select class="form-control required" id="facing" name="Property[facing]" required>
                                    <option>Select</option>
                                    <?php 
                                    $facing = $PropertyInfo->facing;
                                    if(!empty($facing)){
                                      foreach ($facing as $value){ ?>
                                      <option value="<?php echo $value; ?>" <?php if($key ==$facing) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                     <?php }
                                    }
                                 ?>
                                    <!-- <option value="north">North</option>
                                    <option value="east">East</option>
                                    <option value="west">West</option>
                                    <option value="south">South</option> -->
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="property_size">Property Size *</label>
                                 <input type="text" class="form-control" id="property_size" name="Property[property_size]" value="<?php echo $PropertyInfo->property_size ?>" required>
                                 <div class="prpty_append">Sq ft</div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="room_type">Room Type *</label>
                                 <input type="text" class="form-control" id="room_type" name="Property[room_type]" value="<?php echo $PropertyInfo->room_type ?>" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="room_type">Tenant Type *</label>
                                 <input type="text" class="form-control" id="tenant_type" name="Property[tenant_type]" value="<?php echo $PropertyInfo->tenant_type ?>" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Locality  -->
                     <div class="tab-pane" id="Locality-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="city">City *</label>
                                 <input type="text" value="<?php echo $PropertyInfo->city ?>" class="form-control" id="city" name="Locality[city]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="locality">Locality *</label>
                                 <input type="text" value="<?php echo $PropertyInfo->locality ?>" class="form-control" id="locality" name="Locality[locality]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="street_area">Street Addres *</label>
                                 <input type="text"  value="<?php echo $PropertyInfo->street_area ?>" class="form-control" id="street_area" name="Locality[street_area]" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Rental-Details -->
                     <div class="tab-pane" id="Rental-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_rent">Expected Rent *</label>
                                 <input type="text" class="form-control" id="expected_rent" name="Rental[expected_rent]" value="<?php echo $PropertyInfo->expected_rent ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="expected_deposit">Expected Deposit *</label>
                                 <input type="text" class="form-control" id="expected_deposit" name="Rental[expected_deposit]" value="<?php echo $PropertyInfo->expected_deposit ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="negotiable">Negotiable *</label>
                                 <input type="text" class="form-control" id="negotiable" name="Rental[negotiable]" value="<?php echo $PropertyInfo->negotiable ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="maintenance">Maintenance *</label>
                                 <input type="text" class="form-control" id="maintenance" name="Rental[maintenance]" value="<?php echo $PropertyInfo->maintenance ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_form">Availablle From *</label>
                                 <input type="text" class="form-control" id="available_form" name="Rental[available_form]" value="<?php echo $PropertyInfo->available_form ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="furnishing">Furnishing *</label>
                                 <input type="text" class="form-control" id="furnishing" name="Rental[furnishing]" value="<?php echo $PropertyInfo->furnishing ?>"required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="parking">Parking *</label>
                                 <input type="text" class="form-control" id="parking" name="Rental[parking]" value="<?php echo $PropertyInfo->parking ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="description">Description *</label>
                                 <input type="text" class="form-control" id="description" name="Rental[description]"value="<?php echo $PropertyInfo->description ?>" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Gallery -->
                     <div class="tab-pane" id="Gallery">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="upload_images01">Upload</span>
                                 </div>
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="upload_images"
                                       aria-describedby="upload_images01" name="Gallery[upload_images]">
                                    <label class="custom-file-label" for="upload_images">Choose file</label>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="col-md-6">
                              <div class="form-group">
                                  <label for="dob">Apartment Name *</label>
                                  <input type="text" class="form-control" id="dob" name="dob" >
                              </div>
                              </div> -->
                        </div>
                     </div>
                     <!-- Amenities -->
                     <div class="tab-pane" id="Amenities">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="bathrooms">Bathrooms *</label>
                                 <input type="text" class="form-control" id="bathrooms" name="Amenities[bathroom]" value="<?php echo $PropertyInfo->bathroom ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="water_supply">Water Supply *</label>
                                 <input type="text" class="form-control" id="water_supply" name="Amenities[water_supply]" value="<?php echo $PropertyInfo->water_supply ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gym">Gym *</label>
                                 <input type="text" value="<?php echo $PropertyInfo->gym ?>" class="form-control" id="gym" name="Amenities[gym]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="non_veg_allowed">Non Veg. Allowed *</label>
                                 <input type="text" value="<?php echo $PropertyInfo->non_veg_allowed ?>" class="form-control" id="non_veg_allowed" name="Amenities[non_veg_allowed]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="balcony">Balcony *</label>
                                 <input type="text"  value="<?php echo $PropertyInfo->balcony ?>"class="form-control" id="balcony" name="Amenities[balcony]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gated_security">Gated Security *</label>
                                 <input type="text"value="<?php echo $PropertyInfo->gated_security ?>" class="form-control" id="gated_security" name="Amenities[gated_security]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="who_will_show_the_house">Who Will Show The House *</label>
                                 <input type="text" value="<?php echo $PropertyInfo->who_will_show_the_house ?>" class="form-control" id="who_will_show_the_house" name="Amenities[who_will_show_the_house]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="secondary_number">Secondary Number *</label>
                                 <input type="text" value="<?php echo $PropertyInfo->secondary_number ?>" class="form-control" id="secondary_number" name="Amenities[secondary_number]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="select_the_amenities_available">Select The Amenities Available *</label>
                                 <input type="text"  value="<?php echo $PropertyInfo->select_the_amenities_available ?>"class="form-control" id="select_the_amenities_available" name="Amenities[select_the_amenities_available]" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Schedule -->
                     <div class="tab-pane" id="Schedule">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="availability">Availability *</label>
                                 <input type="text" value="<?php echo $PropertyInfo->availability ?>" class="form-control" id="availability" name="Schedule[availability]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="start_time">Start Time *</label>
                                 <input type="text" class="form-control" id="start_time" name="Schedule[start_time]" value="<?php echo $PropertyInfo->start_time ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="end_time">End Time *</label>
                                 <input type="text" class="form-control" id="end_time" name="Schedule[end_time]" value="<?php echo $PropertyInfo->end_time ?>" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="available_all_day">Available All Day *</label>
                                 <input type="text" class="form-control" id="available_all_day" name="Schedule[available_all_day]" value="<?php echo $PropertyInfo->available_all_day ?>" required>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--  <div class="clearfix"></div> -->
            </div>
         </div>
         <div class="box-footer">
            <input type="submit" class="btn btn-primary" value="Submit" />
            <input type="reset" class="btn btn-default" value="Reset" />
         </div>
      </form>
   </section>
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>