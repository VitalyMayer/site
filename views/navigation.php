
<nav>
    <div class="topnav">
        <a class="active" href="#">Main</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
        <?php if (!User::isGuest()): ?>
            <a href="user/edit">Profile</a>
        <?php endif; ?>
    </div>
</nav>