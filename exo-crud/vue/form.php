<?php ob_start(); ?>
    <?php
        function getAction(){
            if(isset($_GET['method']) && $_GET['method'] === 'post'){
                return "index.php?action=create";
            } 
            else if (isset($_GET['method']) && $_GET['method'] === 'update'){
                return "index.php?action=update&id=". $_GET['id'];
            }
        }  
    ?>
    <div class="content update">
        <?php if(isset($_GET['action']) && $_GET['action'] === 'create'): ?>
            <h2>Create Student</h2>
        <?php elseif (isset($_GET['action']) && $_GET['action'] === 'update'): ?>
            <h2>Update Student</h2>
        <?php endif; ?>

        <?php if( isset($_GET['statut']) && $_GET['statut'] === 'fail') : ?>
            <h3>error : Fail update </h3>
        <?php endif;?>

	    <form action="<?= getAction() ?>" method="post">
            <?php if (isset($_GET['method']) && $_GET['method'] === 'update'): ?>
                <label class="form-label" for="firstName">First Name : <span style="opacity: .5;text-transform:uppercase;"><?= $data[0]['first_name'] ?> </span></label>
                <?php else: ?>
                <label class="form-label" for="firstName">First Name :</label>
            <?php endif; ?>
            <input class="form-control" type="text" name="firstName" placeholder="first name" required>

            <?php if (isset($_GET['method']) && $_GET['method'] === 'update'): ?>
                <label class="form-label" for="Last Name">Last name : <span style="opacity: .5;text-transform:uppercase;"> <?= $data[0]['last_name'] ?> </span></label>
            <?php else: ?>
                <label class="form-label" for="Last Name">Last name :</label>
            <?php endif; ?>
            <input class="form-control" type="text" name="lastName" placeholder="last name" required>

            <?php if (isset($_GET['method']) && $_GET['method'] === 'update'): ?>
                <label class="form-label" for="email">Email : <span style="opacity: .5;text-transform:uppercase;"> <?= $data[0]['email'] ?> </span> </label>
            <?php else: ?>
                <label class="form-label" for="email">Email : </label>
            <?php endif; ?>
            <input class="form-control" type="mail" name="email" placeholder="example@example.com" required>

            <?php if (isset($_GET['method']) && $_GET['method'] === 'update'): ?>
                <label class="form-label" for="phone">phone : <span style="opacity: .5;text-transform:uppercase;"> <?= $data[0]['phone'] ?> </span> </label>
            <?php else: ?>
                <label class="form-label" for="phone">phone : </label>
            <?php endif; ?>
            <input class="form-control" type="number" name="phone" placeholder="XXXXXX" required>

            <?php if (isset($_GET['method']) && $_GET['method'] === 'update'): ?>
                <label class="form-label" for="age">Age : <span style="opacity: .5;text-transform:uppercase;"> <?= $singleData[0]['age'] ?> </span> </label>
            <?php else: ?>
                <label class="form-label" for="age">Age : </label>
            <?php endif; ?>
            <input class="form-control" type="number" name="age" placeholder="78" required>

            <input class="my-2 mx-auto btn btn-success" type="submit">
        </form>
        <div>
            <a href="index.php?action=list">Retour aux contacts</a>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
