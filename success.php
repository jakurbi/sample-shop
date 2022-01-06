<?php include("header.php");?>

<?php 
	session_start();
	if(isset($_POST['email']) && $_POST['email'] != ''){
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['name'] = $_POST['name'];
			  
			$_SESSION['email'] = $_POST['email'];

			$_SESSION['price'] = $_POST['price'];
		}
	}
?>

<div class="container">
	<div>
		Your name: <?php echo $_SESSION['name'] ?>
	</div>
	<div>
		Your email: <?php echo $_SESSION['email']; ?>
	</div>
	<div>
		Price: <?php echo $_SESSION['price']." CZK"; ?>
	</div>
	<form method="POST">
	    <select name="currency" id="currency">
	    	<option value="AUD">AUD</option>
	    	<option value="BRL">BRL</option>
			<option value="BGN">BGN</option>
			<option value="CNY">CNY</option>
			<option value="DKK">DKK</option>
			<option value="EUR">EUR</option>
			<option value="PHP">PHP</option>
			<option value="HKD">HKD</option>
			<option value="HRK">HRK</option>
			<option value="INR">INR</option>
			<option value="IDR">IDR</option>
			<option value="ISK">ISK</option>
			<option value="ILS">ILS</option>
			<option value="JPY">JPY</option>
			<option value="ZAR">ZAR</option>
			<option value="CAD">CAD</option>
			<option value="KRW">KRW</option>
			<option value="HUF">HUF</option>
			<option value="MYR">MYR</option>
			<option value="MXN">MXN</option>
			<option value="XDR">XDR</option>
			<option value="NOK">NOK</option>
			<option value="NZD">NZD</option>
			<option value="PLN">PLN</option>
			<option value="RON">RON</option>
			<option value="RUB">RUB</option>
			<option value="SGD">SGD</option>
			<option value="SEK">SEK</option>
			<option value="CHF">CHF</option>
			<option value="THB">THB</option>
			<option value="TRY">TRY</option>
			<option value="USD">USD</option>
			<option value="GBP">GBP</option>
	    </select>

	    <button type="submit" name="submit" class="convert">Convert</button>
	</form>

    <?php
	$text   = file_get_contents('https://www.cnb.cz/cs/financni-trhy/devizovy-trh/kurzy-devizoveho-trhu/kurzy-devizoveho-trhu/denni_kurz.txt');
	$lines = explode("\n", $text);

    foreach ($lines as $str)
    {
        $str_parts = explode('|', $str ); // Split string by | into an array
        $first = array_slice($str_parts, 3, 1, true);
        $second = array_slice($str_parts, 4, 1, true);
        $rates[current($first)] = current($second);
    }
    \array_splice($rates, 0, 2);

	 if(isset($_POST['currency'])) {
	    if(!empty($_POST['currency'])) {
	        $selected = $_POST['currency'];
	        echo 'New price: '.number_format($_SESSION['price']/floatval(str_replace(',','.', $rates[$selected])), 3).' '.$selected;
	    	}	 else {
	        echo 'Please select.';
	    }  
	}
	    
    ?>
</div>

<?php include("footer.php");?>