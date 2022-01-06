<?php include("header.php");?>

<body>

	<!-- Currency Converter -->
	<h1 class="heading text-center display-2">
		Sample shop</h1>

	<div class="container">
        <form action="success.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="street" class="form-label">Street</label>
                <input type="text" class="form-control" id="street" name="street" placeholder="First Avenue" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="New York" tabindex="4" required>
            </div>
            <div class="form-group">
                <label for="zip_code" class="form-label">Zip code</label>
                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="11111" tabindex="5" required>
            </div>
            <div>
                <button type="submit" class="btn">Send!</button>
            </div>
        </form>

        
    </div>

<?php include("footer.php"); ?>
