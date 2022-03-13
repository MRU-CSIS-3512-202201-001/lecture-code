<?php require "constants.php"; ?>

<!DOCTYPE html>
<html lang="en">



<?php include "./partials/head.partial.php"; ?>

<body>

    <header>
        <nav>
            <?= NAV_MSG ?>
            <ul>
                <li><a href="index.php">index</a></li>
                <li><a href="some-page.php">some page</a></li>
                <li><a href="some-other-page.php">some other page</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <div>
            Some different content
        </div>
    </div>

</body>

</html>