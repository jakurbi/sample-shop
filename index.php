<?php include("header.php");?>

<div class="container">
    <form action="success.php" method="POST" onsubmit="javascript: return process();">
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
            <input type="text" class="form-control" id="street" name="street" placeholder="First Avenue 8" tabindex="3" required>
        </div>
        <div class="form-group">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="New York" tabindex="4" required>
        </div>
        <div class="form-group">
            <label for="zipcode" class="form-label">ZIP Code</label>
            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="11111" tabindex="5" required>
        </div>

		<div class="row mt-5">
		    <div class="col-sm">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="shoes.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Shoes</h5>
				    <label>Price: </label>
				    <input type="number" min=0 id="price1" name="price1" value=0> CZK<br>
				    <label>Amount: </label>
				    <input type="number" min=0 class="product" id="product1" name="product1" value=0>
				  </div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="tshirt.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">T-Shirt</h5>
				    <label>Price: </label>
				    <input type="number" min=0 id="price2" name="price2" value=0> CZK<br>
				    <label>Amount: </label>
				    <input type="number" min=0 class="product" id="product2" name="product2" value=0>
				  </div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="jeans.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Trousers</h5>
				    <label>Price: </label>
				    <input type="number" min=0 id="price3" name="price3" value=0> CZK<br>
				    <label>Amount: </label>
				    <input type="number" min=0 class="product" id="product3" name="product3" value=0>
				  </div>
				</div>
			</div>
		<div class="my-2">
			Total price: <span id="total_price">0</span> CZK
			<input type="hidden" id="hidden" name="content" value="">
		</div>
        <div class="my-2 mb-5">
            <button type="submit" class="btn btn-primary">Buy</button>
        </div>
    </form>

    
</div>

<?php include("footer.php"); ?>
