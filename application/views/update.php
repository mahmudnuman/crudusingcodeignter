<?php include 'header.php';?>
  <?php echo form_open("home/update/{$record->id}",['class'=>'form-horizontal']); ?>
    <fieldset>
    <div class="container">

      <form>
        <div class="form-group">
          <label >Update Customer info</label>
          <?php echo form_input(['name'=>'customername','class'=>'form-control','placeholder'=>'Enter Customer Name','value'=>set_value('customername',$record->customername)]); ?>
          <?php echo form_error('customername', '<div class="text-danger">', '</div>');?>
        </div>
      <div class="form-group">
        <label >Phone</label>
        <?php echo form_input(['name'=>'phone','class'=>'form-control','placeholder'=>'Enter Customer Phone Number','value'=>set_value('phone',$record->phone)]); ?>
        <?php echo form_error('phone', '<div class="text-danger">', '</div>');?>
      </div>
      <div class="form-group">
        <label>Address</label>
        <?php echo form_input(['name'=>'address','class'=>'form-control','placeholder'=>'Enter Customer Address','value'=>set_value('address',$record->address)]); ?>
        <?php echo form_error('address', '<div class="text-danger">', '</div>');?>
      </div>
      <div class="form-group">
        <label>City</label>
        <?php echo form_input(['name'=>'city','class'=>'form-control','placeholder'=>'Enter Customer Address','value'=>set_value('city',$record->city)]); ?>
        <?php echo form_error('city', '<div class="text-danger">', '</div>');?>
      </div>
      <div class="form-group">
        <label>Country</label>
        <?php echo form_input(['name'=>'country','class'=>'form-control','placeholder'=>'Enter Customer Address','value'=>set_value('country',$record->country)]); ?>
        <?php echo form_error('country', '<div class="text-danger">', '</div>');?>
      </div>
      <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-success']) ?>
      <?php echo form_submit(['value'=>'Reset','class'=>'btn btn-default']) ?>
    </fieldset>
    </form>
    <?php echo form_close(); ?>
  </div>



<?php include 'footer.php';?>
