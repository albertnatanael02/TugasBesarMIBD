<?php

include "../config/koneksi.php";

$query = "SELECT * FROM Guru";

$result = mysqli_query($conn, $query);

?>

<table class="table">

<tr>
    <th>ID</th>
    <th>Nama Guru</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?= $row['idGuru']; ?></td>
    <td><?= $row['namaGuru']; ?></td>
</tr>

<?php } ?>

</table>