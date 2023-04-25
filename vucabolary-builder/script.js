;(function($) {
	$(document).ready(function() {
		$('#login').on('click', function() {
			$('#form1 h3').html("Login");
			$('#action').val("login");
		});
		$('#register').on('click', function() {
			$('#form1 h3').html("Register Account");
			$('#action').val("register");
		});
		$('.menu-item').on('click', function() {
			$('.helement').hide();
			var target = "#" + $(this).data('target');
			$(target).show();
			console.log(target);
		})
		$('#alphabets').on('change', function() {
			var chr = $(this).val().toLowerCase();
			$('#wordsTable tbody tr').hide();
			if('all' == chr) {
				$('#wordsTable tbody tr').show();
				return true;
			}
			$('#wordsTable tbody tr td').filter(function() {
				return $(this).text().indexOf(chr) == 0;
			}).parent().show();
		})
	})
})(jQuery)