<?php include ROOT . '/views/layouts/header.php'; ?>


<div class="container">
    <div class="row">

        <div class="col-sm-4 col-sm-offset-4 padding-right">

            <?php if ($result): ?>
                <p>Data changed</p>
            <?php else: ?>
                <?php if (isset($errors) && is_array($error)): ?>
                    <?php foreach ($errors as $error): ?>
                        <?php echo $error; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                
                <div class="signup-from">
                    <h2>Edit data</h2>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <p>Name:</p>
                        <input type="text" name="name" placeholder="Name" value="<?php echo $user->getName(); ?>"/>

                        <p>Password:</p>
                        <input type="password" name="password" palceholder="Password" value="<?php $user->getPassword(); ?>"/>
                        <br/><br/>

                        <label for="picture"><b>Picture for avatar</b></label>
                        <img src="/upload/images/<?php echo $user->getImage();?>" alt="" width="60px">
                        <br><br>
                        
                        <input type="file" name="image">
                        <br><br>

                        <input type="submit" name="submit" class="btn button" value="Save" />
                    </form>
                </div>

            <?php endif; ?>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>