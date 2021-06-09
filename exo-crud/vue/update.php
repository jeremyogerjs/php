<?php include 'header.php' ?>
<div class="content update">
	<h2>Update Student </h2>

    <form action="../controllers/update.php?id=<?= $_GET['id'] ?>" method="post">
        <label class="form-label" for="firstName">First Name: <span style="opacity: .5;text-transform:uppercase;"> <?= $singleData[0]['first_name'] ?> </span></label>
        <input class="form-control" type="text" name="firstName" placeholder="first Name" required>

        <label class="form-label" for="Last Name">Last name : <span style="opacity: .5;text-transform:uppercase;"> <?= $singleData[0]['last_name'] ?> </span></label>
        <input class="form-control" type="text" name="lastName" placeholder="Last name" required>

		<label class="form-label" for="email">Email : <span style="opacity: .5;text-transform:uppercase;"> <?= $singleData[0]['email'] ?> </span> </label>
        <input class="form-control" type="mail" name="email" placeholder="example@example.com" required>

		<label class="form-label" for="phone">phone : <span style="opacity: .5;text-transform:uppercase;"> <?= $singleData[0]['phone'] ?> </span> </label>
        <input class="form-control" type="number" maxlength="6" placeholder="XXXXXX" name="phone" required>

        <label class="form-label" for="age">Age : <span style="opacity: .5;text-transform:uppercase;"> <?= $singleData[0]['age'] ?> </span> </label>
        <input class="form-control" type="number" maxlength="2" placeholder="45" name="age" required>

        <input class="my-2 mx-auto btn btn-success" type="submit">
    </form>
    <div>
        <a href="./read.php">Retour aux contacts</a>
    </div>
</div>
<?php include 'footer.php' ?>


