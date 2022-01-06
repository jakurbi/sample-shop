<?php include("header.php");?>

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
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" tabindex="3" required> CZK
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Buy</button>
        </div>
    </form>

    
</div>

<?php include("footer.php"); ?>
