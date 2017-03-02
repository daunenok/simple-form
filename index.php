<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simple Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<form>
	<h1>Payment form</h1>
	<p>Required fields are followed by *.</p>
	<h2>Contact information</h2>

	<fieldset>
		<legend>Title</legend> 
		<label><input type="radio">Mister</label><br>
		<label><input type="radio">Miss</label>
	</fieldset>

	<div class="input-wrap">
		<label for="name">Name:&nbsp;&nbsp; *</label>
		<input type="text" id="name">
	</div>
	

	<div class="input-wrap">
		<label for="email">E-mail:&nbsp;&nbsp; *</label>
		<input type="email" id="email">
	</div>

	<h2>Payment information</h2>

	<div class="input-wrap">
		<label for="cardtype">Card type:&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<select>
			<option>Visa</option>
			<option>Mastercard</option>
			<option>American Express</option>
		</select>
	</div>

	<div class="input-wrap">
		<label for="cardnumber">Card number:&nbsp;&nbsp; *</label>
		<input type="text" id="cardnumber">
	</div>

	<div class="input-wrap">
		<label for="expdate">
			Expiration date:&nbsp;&nbsp; *
		</label>
		<input type="month" id="expdate">
	</div>
	<div class="formatted"><em>formatted as mm/yy</em></div>

	<div class="submit">
		<input type="submit" value="Validate the payment">
	</div>
</form>

</body>
</html>