<html>
<head>
	
	<!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-select.min.css" rel="stylesheet"/>
</head>
<body>
<label>Select domain</label>
<select class="domainPicker form-control" data-live-search="true" title="Choose domain">
	<option>www.recent1.com</option>
	<option>www.recent2.com</option>
	<option>www.recent3.com</option>
	<option>www.recent4.com</option>
	<option>www.recent5.com</option>
	<option>www.recent6.com</option>
	<option>www.blacklisted1.com</option>
	<option>www.blacklisted2.com</option>
	<option>www.blacklisted3.com</option>
	<option>www.blacklisted4.com</option>
	<option>www.blacklisted5.com</option>
	<option>www.blacklisted6.com</option>
</select>
</body>
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-select.min.js" type="text/javascript"></script>	
		
<script type="text/javascript">
        $(document).ready(function(){
//script for domain picker
        $('.domainPicker').selectpicker({
	      style: 'btn-select',
	      size: 4
	  	});
    });
</script>
</html>
