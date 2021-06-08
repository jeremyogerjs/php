<?php include './header.php' ?>
<div class="content update">
	<h2>Update Student </h2>

    <form action="../controllers/update.php?id=<?= $_GET['id'] ?>" method="post">
    
        <label class="form-label" for="firstName">First Name :</label>
        <input class="form-control" type="text" name="firstName" placeholder="first Name" required>

        <label class="form-label" for="Last Name">Last name :</label>
        <input class="form-control" type="text" name="lastName" placeholder="Last name" required>

		<label class="form-label" for="email">Email : </label>
        <input class="form-control" type="mail" name="email" placeholder="example@example.com" required>

		<label class="form-label" for="phone">phone : </label>
        <input class="form-control" type="number" maxlength="6" placeholder="XXXXXX" name="phone" required>

        <label class="form-label" for="age">Age : </label>
        <input class="form-control" type="number" maxlength="2" placeholder="45" name="age" required>

        <input class="my-2 mx-auto btn btn-success" type="submit">
    
    </form>
    <div>
        
    </div>

    <div>
        <a href="./list_contact.php">Retour aux contacts</a>
    </div>

</div>
<?php include './footer.php' ?>


