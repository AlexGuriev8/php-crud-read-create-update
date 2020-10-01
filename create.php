<?php
include __DIR__ . '/partials/templates/header.php';
?>

<div class="container p-3">
    <form action="partials/create/server.php" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero della stanza</label>
            <input type="number" id="roomNumber" class="form-control" name="roomNumber" value=" " placeholder="Inserisci il numero della stanza">
        </div>
        <div class="form-group">
            <label for="floor">Floor</label>
            <input type="number" id="floor" placeholder="Inserisci il piano" class="form-control" name="floor" value="">
        </div>
        <div class="form-group">
            <label for="beds">Numeri letti</label>
            <input type="number" placeholder="Inserisci i letti" class="form-control" name="beds" value="">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control bg-warning " id="roomNumber" value="Inserisci">
        </div>
</div>
</form>
</div>

<?php include __DIR__ . '/partials/templates/footer.php' ?>