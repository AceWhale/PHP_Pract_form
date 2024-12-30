<ul class="navbar-nav">
    <li role="presentation" class="nav-item nav-link active"><a href="index.php?page=1">Home</a></li>
    <?php
    if (isset($_SESSION['registered_user'])) {
        echo '<li role="presentation" class="nav-item nav-link"><a href="index.php?page=2">Upload</a></li>';
    }
    ?>
    <li role="presentation" class="nav-item nav-link"><a href="index.php?page=3">Gallery</a></li>
    <li role="presentation" class="nav-item nav-link"><a href="index.php?page=4">Registration</a></li>
</ul>
