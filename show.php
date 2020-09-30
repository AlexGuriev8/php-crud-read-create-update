<?php
include __DIR__ . "/partials/templates/header.php";
include __DIR__ . '/partials/show/server.php';
?>

<body>
    <div class="container p-3">
        <h1>Dettagli della stanza</h1>
        <ul class="list-group">
            <li class="list-group-item">ID: <?php echo $row['id']; ?></li>
            <li class="list-group-item">Numero Stanza: <?php echo $row['room_number']; ?> </li>
            <li class="list-group-item">Piano: <?php echo $row['floor']; ?></li>
            <li class="list-group-item">Numero letti: <?php echo $row['beds']; ?></li>
        </ul>
    </div>

    <?php include __DIR__ . "/partials/templates/footer.php";?>