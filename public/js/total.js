$(document).ready(function() {
	$(".totals").click(function() {
		var total = 0;
		var fee = 1850;
		$(".check").each(function() {
			total += Number($(this).val());
		});
		$("#sum").text(total);
		$("#total-amount").text(total*fee);
	});
});