<form action="actions/add_contact.php" method="post">

	<div class="control-group">
		<label class="control-label" for="name">Full Name</label>
		<div class="controls">
			<input type="text" name="first_name" placeholder="First Name" /> <input type="text" name="last_name" placeholder="Last Name" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="email">e-mail</label>
		<div class="controls">
			<input type="email" name="email" placeholder="example@awesomeness.com" />
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="phone">Phone</label>
		<div class="controls">
			<input type="text" name="phone" placeholder="XXX-XXX-XXXX" />
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-success">Add</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>
