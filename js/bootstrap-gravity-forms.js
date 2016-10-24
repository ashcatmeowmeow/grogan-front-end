jQuery(document).ready(function () {
	(function(jQuery){
		var gform = jQuery(document).find('.gform_wrapper').attr('class');
		if(typeof gform !== 'undefined' && gform !== 'false'){
			jQuery(document).on('gform_post_render',function(){
				var form = jQuery('.gform_wrapper');
				var required = jQuery('.gfield_contains_required');
				var controlGroup = jQuery('.gfield');
				required.each(function(){
					jQuery(this).find('input, textarea, select').not('input[type="checkbox"], input[type="radio"]').attr('required', 'true');
				});
				jQuery('.gform_fields').each(function(){
					jQuery(this).addClass('');//row
				});
				controlGroup.each(function(){
					jQuery(this).addClass('form-group').find('input, textarea, select').not('input[type="checkbox"], input[type="radio"]').after('<span class="help-block"></span>').addClass('form-control');
				});
				form.find("input[type='submit'], input[value='Next']").addClass('btn btn-primary btn-default').end().find('.gfield_error').removeClass('gfield_error').addClass('has-error');
				jQuery('.gfield_checkbox, .gfield_radio').find('input[type="checkbox"], input[type="radio"]').each(function(){
					var sib = jQuery(this).siblings('label');
					jQuery(this).prependTo(sib);
				}).end().each(function(){
					jQuery(this).after('<span class="help-block"></span>');
					if(jQuery(this).is('.gfield_checkbox')){
						jQuery(this).addClass('checkbox');
					} else {
						jQuery(this).addClass('radio');
					}
				});
				jQuery('.validation_message').each(function(){
					var sib = jQuery(this).prev().find('.help-block');
					jQuery(this).appendTo(sib);
				});
				jQuery('.validation_error').addClass('alert alert-danger');
				jQuery('.gf_progressbar').addClass('progress progress-striped active').children('.gf_progressbar_percentage').addClass('progress-bar progress-bar-success');
				jQuery("input[value='Previous']").addClass('btn btn-default');
			});
		} else {
			console.log('no forms were found');
			return false;
		}
	})(jQuery);
});