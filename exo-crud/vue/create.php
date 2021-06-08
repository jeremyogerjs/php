<?php include './header.php' ?>
<div class="content update">
	<h2>Create Student</h2>
	<form action="../controllers/create.php" method="post">
    
        <label class="form-label" for="firstName">First Name :</label>
        <input class="form-control" type="text" name="firstName" placeholder="first name" required>

        <label class="form-label" for="Last Name">Last name :</label>
        <input class="form-control" type="text" name="lastName" placeholder="last name" required>

		<label class="form-label" for="email">Email : </label>
        <input class="form-control" type="mail" name="email" placeholder="example@example.com" required>

		<label class="form-label" for="phone">phone : </label>
        <input class="form-control" type="number" name="phone" placeholder="XXXXXX" required>

        <label class="form-label" for="age">Age : </label>
        <input class="form-control" type="number" name="age" placeholder="78" required>

        <input class="my-2 mx-auto btn btn-success" type="submit">
    </form>
    <div>
        <a href="./list_contact.php">Retour aux contacts</a>
    </div>
</div>
<?php include './footer.php' ?>