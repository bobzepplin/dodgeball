ccmValidateBlockForm = function() {
	
	if ($('#field_2_image_fID-fm-value').val() == '' || $('#field_2_image_fID-fm-value').val() == 0) {
		ccm_addError('Missing required image: Votre image');
	}

	if ($('#field_4_textbox_text').val() == '') {
		ccm_addError('Missing required text: Titre section');
	}

	if ($('input[name=field_5_link_cID]').val() == '' || $('input[name=field_5_link_cID]').val() == 0) {
		ccm_addError('Missing required link: Lien vers la page');
	}

	if ($('#field_7_textbox_text').val() == '') {
		ccm_addError('Missing required text: Content');
	}


	return false;
}
