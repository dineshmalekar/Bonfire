<div class="page-header">
	<h1><?php echo lang('us_reset_password'); ?></h1>
</div>

<?php if (auth_errors() || validation_errors()) : ?>
<div class="row-fluid">
	<div class="span8 offset2">
		<div class="alert alert-error fade in">
		  <a data-dismiss="alert" class="close">&times;</a>
			<?php echo auth_errors() . validation_errors(); ?>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="row-fluid">
	<div class="span8 offset2">
		<div class="alert alert-info fade in">
		  <a data-dismiss="alert" class="close">&times;</a>
			<?php echo auth_errors() . validation_errors(); ?>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span8 offset2">
		<div class="alert alert-error fade in">
		  <a data-dismiss="alert" class="close">&times;</a>
			<h4 class="alert-heading"><?php echo lang('us_reset_note'); ?></h4>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span8 offset2">

<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>

	<div class="control-group">
		<label class="control-label required" for="email"><?php echo lang('bf_email'); ?></label>
		<div class="controls">
			<input class="span6" type="text" name="email" value="<?php echo set_value('email') ?>" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="submit">&nbsp;</label>
		<div class="controls">
			<input class="btn btn-primary" type="submit" name="submit" value="Send Password"  />
		</div>
	</div>

<?php echo form_close(); ?>

	</div>
</div>
