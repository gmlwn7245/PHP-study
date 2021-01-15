<?php
    require_once('lib/print.php');
    require('view/top.php');
?>
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])){
            ?>  <a href="update.php?id=<?php echo $_GET['id'];?>">update</a><?php
        } ?>
        <form action="create_process.php" method="post">
            <p><input type="text" name="title" placeholder="Title"></p>
            <p><textarea name="description"></textarea></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>