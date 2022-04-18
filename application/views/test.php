<input type="number" name="test">

<script type="text/javascript">
	document.querySelector('input[name="test"]').addEventListener('keydown', function(e){
		console.log(e.keyCode);
		if (e.keyCode == 69) {
			e.preventDefault();
		}
	});
</script>