<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css?<?=time()?>">
    <title>To do list</title>
</head>
<body>
    <?php
    try {
        $tdlCo = new PDO(
        'mysql:host=localhost;dbname=to_do_list;charset=utf8',
        'todolist_php',
        'nQVk@MmDtuAkvwMl'
        );
        $tdlCo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC);
        }
        catch (Exception $e) {
            die("Unable to connect to the database.
            ".$e->getMessage());
            }
        
        $result = $tdlCo->query("SELECT description FROM task WHERE done = 0;");
        $result = $result->fetchAll();
        ?>
    <section>
        <div class="container1">
            <h1 class="container1-title">To Do List</h1>
        </div>
    </section>
    <section>
        <div class="div">
            <button class="button"><a href="index.php" class="link">To Do List</a></button>
            <button class="button"><a href="form.php" class="link">New Item</a></button>
        </div>
        
        <div class="container2">
                <?php
                /**
                 * Gives the HTML list from the given array. 
                 *
                 * @param array $array
                 * @param string|null $classUl
                 * @param string|null $classLi
                 * @return string
                 */
                function getHtmlFromArray(array $array, string $classUl = null, string $classLi = null): string
                {
                    if ($classUl) $classUl = " class=\"$classUl\"";
                    if ($classLi) $classLi = " class=\"$classLi\"";
                    $valueToLi = fn ($v) => "<li$classLi>$v</li>";
                    return "<ul$classUl>" . implode("", array_map($valueToLi, $array)) . "</ul>";
                }
                    $tasks = [];
                    foreach($result as $task) {
                            $tasks[] = $task["description"];
                        }
                    echo getHtmlFromArray($tasks, "containerUl", "containerLi")
                ?>
        </div>
       
    </section>


</body>
</html>