<?php 
$index = 0;
$index=$_GET['post_id'];
    include 'db.php';

    if (isset($_GET['post_id'])) {
  

    $sql = "SELECT id, text, author FROM comments WHERE post_id = {$_GET['post_id']} ORDER BY id DESC";
    $statement = $connection ->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $results = $statement->fetchAll();

    }

?>

    <?php 
        if(empty($results)) {
    ?>


    <br><div class="publish-button"><p class="p.comment">Nema komentara na ovom postu, budi prvi koji ce komentarisati.</p></div>
    <?php 
        }
    ?>

    <?php 
        if (!empty($results)) {
    ?>
    <div style="display:inline-blocks; text-align: center;" class="add-comment">
        <button style="width:30%" type="button" id="showHide" class="btn btn-default" value="hide" onclick="hideComments(this.value)";>Hide comments</button>
    </div>

    <div class="comment-section">
            <ul class="ul-comments">
                <?php 
                    foreach($results as $result) {
                ?>

                <li>
                    <hr class="new1">
                    <p> <?php echo $result['author'] ?>: </p> <br>
                    <p> <?php echo $result['text'] ?></p>
                </li>

                <?php 
                    }
                ?>
            </ul>
    </div>     
            
<?php 
    }
?>