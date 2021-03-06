
  <section id="content">
    <section class="main padder">
      <div class="clearfix">
        <h3><i class="fa fa-edit"></i><?php echo $form_name ?></h3>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <section class="panel">
            <div class="panel-body">
              <form action="<?php echo site_url();?>rider/add_rider" class="form-horizontal" method="post" data-validate="parsley" enctype="multipart/form-data"> 
				<?php echo validation_errors(); ?>
				<?php if(isset($error_picture)) 
					echo $error_picture; ?>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Photo</label>
                  <div class="col-lg-9 media">
                    <div class="bg-light pull-left text-center media-large thumb-large"><i class="fa fa-user inline fa fa-light fa fa-3x m-t-large m-b-large"></i></div>
                    <div class="media-body">
                      <input type="file" name="rider-profile-picture" class="btn btn-sm btn-info m-b-small" data-required="true"><br>
                    </div>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Name</label>
                  <div class="col-lg-8">
                    <input type="text" name="rider-name" value="<?php echo set_value('rider-name'); ?>" placeholder="Rider Name" data-required="true" class="form-control">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Bike Number</label>
                  <div class="col-lg-8">
                    <input type="text" name="rider-bike-number" value="<?php echo set_value('rider-bike-number'); ?>" placeholder="Bike Number" data-required="true" class="form-control">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Contact Number</label>
                  <div class="col-lg-8">
                    <input type="text" name="rider-contact-number" value="<?php echo set_value('rider-contact-number'); ?>" placeholder="Contact Number" data-required="true" class="form-control">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-8">
                    <input type="text" name="rider-email" value="<?php echo set_value('rider-email'); ?>" placeholder="test@example.com" data-required="true" class="form-control" data-type="email">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Password</label>
                  <div class="col-lg-8">
                    <input type="text" name="rider-password" value="<?php echo set_value('rider-password'); ?>" placeholder="Password" data-required="true" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">                      
                    <a href="<?php echo site_url();?>rider" class="btn btn-danger">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Add">
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    </section>
  </section>
 