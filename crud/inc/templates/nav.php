<div class="d-flex justify-content-between">
    <div>
        <a href="/crud/index.php?task=report">All Students</a>
        <?php if(hasPrivilege()) : ?>
        |
        <a href="/crud/index.php?task=add">Add New Students</a>
        <?php endif; ?>
        <?php if(isAdmin()) : ?>
        | <a href="/crud/index.php?task=seed">Seed</a>
        <?php endif; ?>
    </div>
    <div>
        <?php if(!isset($_SESSION['loggedin']) || false == $_SESSION['loggedin']) : ;?>
        <a href="/crud/auth.php">Login</a>
        <?php else: ?>
            <a href="/crud/auth.php?logout=true">Logout ( <?php echo $_SESSION['role']; ?> )</a>
        <?php endif; ?>
    </div>
</div>