<?php
include __DIR__ . "/partials/templates/header.php";
include __DIR__ . "/partials/update/server.php";
?>

<div class="container p-3">
    <form action="partials/update/server-edit.php" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero della stanza</label>
            <input type="text" class="form-control" name="roomNumber" value=" <?php echo $row['room_number']; ?> ">
        </div>
        <div class="form-group">
            <label for="floor">Floor</label>
            <input type="text" class="form-control" name="floor" value="<?php echo $row['floor']; ?>">
        </div>
        <div class="form-group">
            <label for="beds">Numeri letti</label>
            <input type="text" class="form-control"  name="beds" value="<?php echo $row['beds']; ?>">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control bg-warning " id="roomNumber" value="Modifica">
        </div>
</div>
</form>
</div>


<?php include __DIR__ . "/partials/templates/footer.php"; ?>