<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Joel Nordahl</title>
    <!-- Custom CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Pontano+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
    <div id="particles-js"></div>
    <div class="welcome-text">
        <p class="text"></p>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

<script src="particles.js"></script>
<script type="text/javascript">
    // Can also be included with a regular script tag
    var options = {
        strings: ["COMING SOON"],
        cursorChar: '_',
        typeSpeed: 60
    }

    var typed = new Typed(".text", options);
</script>
</html>