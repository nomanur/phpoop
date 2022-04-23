<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php
        foreach ($tasks as $task) { ?>
            <?php
            if ($task->completed == 1) { ?>
                <strike>
                    <li><?php echo $task->description; ?></li>
                </strike>
            <?php } else { ?>
                <li><?php echo $task->description; ?></li>
            <?php } ?>
        <?php } ?>

    </ul>

</body>

</html>