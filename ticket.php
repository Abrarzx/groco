<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>
		ticket
	</title>

	<style>

		/* Styling the Body element i.e. Color,
		Font, Alignment */
		body {
			background-color:#27ae60;
			font-family: Verdana;
			text-align: center;
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}

		/* Styling form-control Class */
		.form-control {
			text-align: left;
			margin-bottom: 25px;
		}

		/* Styling form-control Label */
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		/* Styling form-control input,
		select, textarea */
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
		}

		/* Styling form-control Radio
		button and Checkbox */
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		/* Styling Button */
		button {
			background-color: #05c46b;
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 100%;
			margin-top: 50px;
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<h1>Ticket system</h1>

	<!-- Create Form -->
	<form id="form" action="ticketupload.php" enctype="multipart/form-data" method="POST">

		<!-- Details -->
		<div class="form-control">
			<label for="name" id="label-name">
				Name
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="name"
				name="tname"
				placeholder="Enter your name" />
		</div>

		<div class="form-control">
			<label for="email" id="label-email">
				Email
			</label>

			<!-- Input Type Email-->
			<input type="email"
				id="email"
				name="temail"
				placeholder="Enter your email" />
		</div>

		<div class="form-control">
			<label for="age" id="label-age">
				subject
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="age"
				name="tsubject"
				placeholder="subject" />
		</div>

		<div class="form-control">
			<label for="role" id="label-role">
				Select Catagory
			</label>
			
			<!-- Dropdown options -->
			<select name="tcatagory" id="role">
				<option value="IT">Order</option>
				<option value="SALES">Payment</option>
				<option value="ETC">Software Bug</option>
				<option value="ETC">ETC</option>
			</select>
		</div>

		<div class="form-control">
			<label for="attachment" id="label-age">
			Upload Attachment
			</label>

			<!-- Input Type Text -->
			<input type="file" name="uploadedFile">
		</div>

		<div class="form-control">
			<label for="comment">
				Any comments or suggestions
			</label>

			<!-- multi-line text input control -->
			<textarea name="tcomment" id="comment"
				placeholder="Enter your comment here">
			</textarea>
		</div>

		<!-- Multi-line Text Input Control -->
		<button type="submit" value="submit" name="tsubmit">
			RAISE TICKET
		</button>
	</form>
</body>

</html>
