<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): 
                            echo $error; 
                        endforeach; ?>
                    </ul>
                <?php endif; ?>
                
                <div class="signup-from">
                    <h2>Login</h2>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/><br/><br/>
                        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/><br/><br/>
                        <input type="submit" name="submit" class="button btn" value="Login" />
                    </form>
                </div>
                
                
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>