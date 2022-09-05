<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Site</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <header class="header">
            <h1>Site</h1>
            <p>Test website</p>
            <?php if (User::isGuest()): ?>
                <a href="/user/login/">Login</a>
            <?php else: ?>
                <?php echo $_SESSION['name']; ?>
                <a href="/user/logout/">Logout</a>
            <?php endif; ?>    
        </header>