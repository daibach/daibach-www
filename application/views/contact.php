<?php
if (validation_errors()) {
  echo "<div class='alert alert-danger'><p><strong>Sorry, there is a problem:</strong></p><ul>";
  echo validation_errors();
  echo "</ul></div>";
}
if(isset($sending_failed) && $sending_failed) {
  echo "<div class='alert alert-danger'><p><strong>Sorry, something went wrong while sending the message.</strong></p><p>Please try again</p></div>";
}
?>
<form method="post" action="/contact/send" class="contact-form">
  <fieldset>
    <legend class="sr-only">Contact me</legend>
    <div class="form-group<?php if(form_error('txtName')):?> has-error<?php endif;?>">
      <label class="control-label" for="contactname">Name <span class="required">*</span></label>
      <input id="contactname" name="txtName" class="form-control" type="text" value="<?php echo set_value('txtName'); ?>" size="30" aria-required='true' />
    </div>
    <div class="form-group<?php if(form_error('txtEmail')):?> has-error<?php endif;?>">
      <label class="control-label" for="contactemail">Email address <span class="required">*</span></label>
      <input id="contactemail" name="txtEmail" class="form-control" type="email" value="<?php echo set_value('txtEmail'); ?>" size="30" aria-required='true' />
    </div>
    <div class="form-group<?php if(form_error('txtMessage')):?> has-error<?php endif;?>">
      <label class="control-label" for="contactmsg">Message <span class="required">*</span></label>
      <textarea id="contactmsg" name="txtMessage" class="form-control" rows="8" cols="45" aria-required="true"><?php echo set_value('txtMessage'); ?></textarea>
    </div>

    <p class="contact-form-submit">
      <input type="hidden" value="" name="txtValid" id="contactvalid" />
      <?php $data = array('name'=>'btnSubmit','id'=>'btnSubmit', 'class'=>'btn btn-primary btn-lg');
      echo form_submit($data, 'Send Message');?></p>

  </fieldset>
</form>
