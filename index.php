<?php
include __DIR__ . "/partials/templates/header.php";
include __DIR__ . '/partials/home/server.php';
?>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero Stanza</th>
                    <th>Floor</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $room) { ?>
                    <tr>
                        <td><?php echo $room['id']; ?></td>
                        <td><?php echo $room['room_number']; ?></td>
                        <td><?php echo $room['floor']; ?></td>
                        <td><a href="show.php?id=<?php echo $room['id']; ?>">View</a></td>
                        <td><a href="">Update</a></td>
                        <td>
                            <form action="partials/delete/server.php" method="post">
                                <input type="submit" name="" value="DELETE" class="btn btn-danger">
                                <input type="hidden" name="id" value=" <?php echo $room['id']; ?> ">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>