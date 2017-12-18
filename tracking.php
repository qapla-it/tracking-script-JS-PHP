<html>
<head></head>
<body>
<!-- Place this code after <body> tag -->
<script type="text/javascript">
    var apiKey = '{your-public-API-Key}';
    var reference = '<?=$_GET['refernce']?>'; //shipment order reference
    //var noCSS = true;  // ovveride CSS
    //var bw = true; // black & white ?
</script>
<script type="text/javascript" src="https://api.qapla.it/js/1.1/qapla-tracking.js" async></script>

<!-- Place this element where you want to display the Qapla' Tracking -->
<div id="qapla-tracking"></div>

</body>
</html>
