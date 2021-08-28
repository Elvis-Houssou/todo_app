<?php

include 'config.php';

$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

?>

<li>
    <span class="text"><?php echo $row['title']; ?></span>
    <i id="removeBtn" class="icon fas fa-trash-alt" data-id="<?php echo $row['id']; ?>"></i>
</li>

<?php
    }
    echo '<div class="notif">Vous avez ' . mysqli_num_rows($result) . ' taches en suspends.</div>';
} else {
    echo "<li><span class='text'>Aucune Tache Trouver.</span></li>";
}

?>
