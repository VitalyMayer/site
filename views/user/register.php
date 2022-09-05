<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result): ?>
                    <p>You registered</p>
                <?php endif; ?>

                <div class="signup-from"><!--sign up form-->
                    <h2>Registration on the site</h2>
                    <form action="" method="post">
                        <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"/><br/><br/>
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/><br/><br/>
                        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/><br/><br/>
                        <input type="submit" name="submit" class="btn button" value="Registration" />
                    </form>
                </div>

                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>