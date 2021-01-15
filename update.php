<?php
    require_once('lib/print.php');
    require('view/top.php');
?>
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])){
            ?>  <a href="update.php?id=<?php echo $_GET['id'];?>">update</a><?php
        } ?>
        <form action="update_process.php" method="post">
            <p><input type="hidden" name="old_title" value="<?php print_title();?>"></p>
            <p><input type="text" name="title" placeholder="Title" value="<?= print_title();?>"></p>
            <p><textarea name="description"><?= print_description();?></textarea></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>