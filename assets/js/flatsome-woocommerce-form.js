window.addEventListener('DOMContentLoaded', function() {
	(function($){
		$('.adminz_form_filter_taxonomy .change_to_redirect').on("change",function(){	

	 		if($(this).val()){
 				if($(this).find(":selected").data('taxonomy') == 'filter_price'){
		 			var data_price = JSON.parse($(this).find(":selected").val());
		 			var input_target_min_price = $(this).closest("form").find('input[name="min_price"]');
		 			var input_target_max_price = $(this).closest("form").find('input[name="max_price"]');

		 			if(!input_target_max_price.length>0){
			 			$(this).closest('form').prepend('<input type="hidden" name="max_price" />');				 			
			 		}
			 		var input_max_price = $(this).closest('form').find('input[name="max_price"]');
			 		input_max_price.val(data_price.max_price);

		 			if(!input_target_min_price.length>0){
			 			$(this).closest('form').prepend('<input type="hidden" name="min_price" />');				 			
			 		}
			 		var input_min_price = $(this).closest('form').find('input[name="min_price"]');
			 		input_min_price.val(data_price.min_price);
		 		}else{
		 			var query_type = $(this).data("query_type");
			 		var query_value = $(this).data("query_value");
			 		var input_query_type_target = $(this).closest('form').find('input[name="'+query_type+'"]');
			 		if(query_value && !input_query_type_target.length>0){
			 			$(this).closest('form').prepend('<input type="hidden" name="'+query_type+'" value="'+query_value+'" />');
			 		}

			 		var taxonomy_slug = $(this).find(":selected").data("taxonomy");
			 		var input_target = $(this).closest("form").find('input[name="'+taxonomy_slug+'"]');

			 		if(!input_target.length>0){
			 			$(this).closest('form').prepend('<input type="hidden" name="'+taxonomy_slug+'" />');
			 		}

			 		var input_target2 = $(this).closest("form").find('input[name="'+taxonomy_slug+'"]');
			 		input_target2.val($(this).val());
		 		}
	 		}else{
	 			var query_value = $(this).data('query_value');			 			
	 			$(this).closest("form").find('input[name="'+query_value+'"]').remove();

	 			var query_type = $(this).data('query_type');			 			
	 			$(this).closest("form").find('input[name="'+query_type+'"]').remove();

	 			var taxonomy_slug = $(this).data("taxonomy");	 			
	 			$(this).closest("form").find('input[name="'+taxonomy_slug+'"]').remove();

	 			

	 			
	 		}	
	 		this.form.submit();		 		
	 	});
	})(jQuery);
});