<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   <?php

$i = 1;

$murid = [
    ["Joni Susanto","XII TKR 2","Pemalang" ],
    ["Intan Ayu","XII TB 1","Brebes"],
    ["Salma Karima", "XI RPL 3","Batang"]
];

?>

<table border="1" cellspacing="0" cellpadding="15">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
    </tr>
    <?php foreach($murid as $m) : ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $m[0] ?></td>
        <td><?= $m[1] ?></td>
        <td><?= $m[2] ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
  </body>
</html>