<?php include ROOT . '/views/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <div class="signup-from"><!--sign up form-->
                    <h2>Create post</h2>
                    <form action="#" method="post">
                        <input type="text" name="title" placeholder="Title"/><br/><br/>
                        <textarea name="content" placeholder="Content"/></textarea><br/><br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Create post" />
                    </form>
                </div>

                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/footer.php'; ?>