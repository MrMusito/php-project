<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css?<?=time()?>">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container1">
            <h1 class="container1-title">To Do List</h1>
        </div>
    </section>
    <div class="div">
        <button class="button"><a href="index.php" class="link">To Do List</a></button>
        <button class="button"><a href="form.php" class="link">New Item</a></button>
    </div>

    <div class="container2">
        <form action="form.php" method="post" class="form">
        <div class="form-input">
            <label for="new item">New Item:</label>
            <input type="text" name="new item" class="input">
        </div>
        <div>
            <label for="date">Enter Remind Date:</label>
            <input type="date" name="reminder" class="input">
        </div>
        <div>
            <label for="priority">Priority:</label>
            <input type="number" name="priority" class="input">
        </div>
        <div>
            <input type="submit" value="Add Item!" class="input-btn">
        </div>
    </div>
    <?php
        var_dump($_POST)
    ?>

</form>
</div>

    
</body>
</html>
