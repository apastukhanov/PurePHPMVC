<?php
    $cars = $this->data;
?>

<style>
    table, th, td {
        border: 1px solid;
    }
</style>

<table>
    <tr>
        <?php foreach ($cars[0] as $key => $value): ?>
            <th><?php echo $key; ?></th>
        <?php endforeach; ?>
    </tr>
    <?php foreach($cars as $car): ?>
        <tr>
            <?php foreach ($car as $key => $value): ?>
                <td><?php echo $value; ?></td>
            <?php endforeach; ?>
        </tr>

    <?php endforeach; ?>
    
</table>