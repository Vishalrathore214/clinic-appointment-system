<!DOCTYPE html>
<html lang="en">

<head>
	<title>book appointment</title>
	<link rel="stylesheet" href="index.css">
</head>

<body>
	<div class="container">
	<h1>Book Appointment</h1>
        <p><b>Enter your details and click on submit to book an appointment</b></p><br>

		<form action="insert.php" method="post">
			
			
<p>
				<label for="Name"></label>
				<input type="text" name="name" id="Name" placeholder="Enter your full name..."  >
            </p>
			
			
<p>
				<label for="phones"></label>
				<input type="phone" name="phone" id="phone" placeholder="Enter your contact...">
			</p>


			<p>
				<label for="emailAddress"></label>
				<input type="text" name="email" id="emailAddress" placeholder="Enter your email..." >
			</p>			
			
			
<p>
				<label for="Address"></label>
				<textarea name="address" id="address" cols="30" rows="4" placeholder="Enter your address..."></textarea><br><br>
			</p>
			<hr color="black" size="5"><br>


<fieldset>
                <legend><b>Gender</b></legend>
                <b>Male</b> <input type="radio" name="gender" id="male" value="male">
                <b>Female</b> <input type="radio" name="gender" id="female" value="female">
                <b>Other</b> <input type="radio" name="gender" id="other" value="other">
            </fieldset><br>
			
<p>
				<label for="age"></label>
				<input type="text" name="age" id="age" placeholder="Enter your age...">
			</p>
			
<p>
				<label for="disease"></label>
				<textarea name="disease" id="disease" cols="30" rows="3" placeholder="enter disease..."></textarea><br><br>
			</p>

			<hr color="black" size="5"><br>

<p>
				<label for="date"></label>
				<input type="date" name="date" id="date">
			</p>

			<p>
                <select name="slot" id="slot">
                    <option value="">----select slot-----</option>
                    <option value="10AM">10AM</option>
                    <option value="11AM">11AM</option>
                    <option value="12PM">12PM</option>
                    <option value="1PM">1PM</option>
                    <option value="2PM">2PM</option>
                    <option value="3PM">3PM</option>
                    <option value="4PM">4PM</option>
                    <option value="5PM">5PM</option>
                    <option value="PM">6PM</option>
                    <option value="7PM">7PM</option>
                </select>
            </p>
			<center>
			<input type="submit" value="Submit" id="submit" >
			</center>
		</form>
</div>
</body>

</html>
