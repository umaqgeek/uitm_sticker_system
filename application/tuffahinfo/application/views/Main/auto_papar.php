<script>
$(document).ready(function() {
	paparkan();
	function paparkan() {
		$.post("back_papar.php", {}).done(function(data) {
			$("#papar").html(data);
		});
		setTimeout(paparkan(), 1000);
	}
});
</script>

<div id="papar"></div>