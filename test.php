<html>
<?php
$table = 13;
$row = 50;
?>

<head>
    <title><?php printf("Tamil Table") ?></title>
</head>

<body>
    <table>
        <tr>
            <th>Multiplier</th>
            <th></th>
            <th></th>
            <th>Multiplicant</th>
            <th>result</th>
        </tr>
        <?php
        for ($i = 1; $i <= $row; $i++) {
        ?>

            <tr>
                <td>
                    <?= $i ?>
                </td>
                <td>X</td>
                <td></td>
                <td>
                    <?= $table ?>
                </td>
                <td>
                    <?= ($table * $i) ?>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
    <pre>
    <?php
    $row4 = 20;
    system('gcc add.c');
    system('./a.out' . $row4);
    system('ls');
    ?>
    </pre>
</body>

</html>