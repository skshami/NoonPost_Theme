

jQuery(document).ready( function($){
	
	var mediaUploader;
	
	$('#upload-white-logo-button').on('click',function(e) {
		e.preventDefault();
		if( mediaUploader ){
			mediaUploader.open();
			return;
		}
		
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Select a Logo',
			button: {
				text: 'Select Logo'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#upload-white-logo').val(attachment.url);
			$('#white-logo-preview').css('background-image','url(' + attachment.url + ')');
		});
		
		mediaUploader.open();
		
	});

	$('#remove-white-logo').on('click',function(e){
		e.preventDefault();
		var answer = confirm("Are you sure you want to remove the Logo");
		if( answer == true ){
			$('#upload-white-logo').val('');
			$('.noonpost-header-form').submit();
		}
		return;
	});
	
});

jQuery(document).ready( function($){
	
	var mediaUploader;
	
	$('#upload-dark-logo-button').on('click',function(e) {
		e.preventDefault();
		if( mediaUploader ){
			mediaUploader.open();
			return;
		}
		
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Select a Logo',
			button: {
				text: 'Select Logo'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#upload-dark-logo').val(attachment.url);
			$('#dark-logo-preview').css('background-image','url(' + attachment.url + ')');
		});
		
		mediaUploader.open();
		
	});

	$('#remove-dark-logo').on('click',function(e){
		e.preventDefault();
		var answer = confirm("Are you sure you want to remove the Logo");
		if( answer == true ){
			$('#upload-dark-logo').val('');
			$('.noonpost-header-form').submit();
		}
		return;

		
	});
	
});
