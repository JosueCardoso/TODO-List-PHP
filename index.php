<?php require 'db_conn.php'; ?>

<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-section">
        <div class="add-section">
            <form action="app/add.php" method="POST" autocomplete="off">
                <?php if(isset($_GET['mess']) && $_GET['mess']== 'error') {?>
                    <input type="text" name="title" class="input-error" placeholder="Campo obrigatório"/>
                <?php } else{?>
                    <input type="text" name="title" placeholder="Qual tarefa precisa ser feita?"/>
                <?php } ?> 
                <button type="submit">Adicionar Tarefa</button>
            </form>
        </div>

        <?php $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC"); ?>

        <div class="show-todo-section">
            <?php if($todos->rowCount() === 0){ ?>
              <div class="empty">                
                <img src="img/homer-sad.png" alt="homer sad">
                <h1>Nenhum item</h1>
              </div>
            <?php } ?>
                
            <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) {?> 
                <div class="todo-item">
                    <span id="<?php echo $todo['id'] ?>" class="remove-to-do">X</span>
                    <?php if($todo['checked']){ ?>
                        <input type="checkbox" class="check-box" data-todo-id="<?php echo $todo['id']?>" checked />
                        <h2 class="checked"><?php echo $todo['title'] ?></h2>
                    <?php }else { ?>     
                        <input type="checkbox" class="check-box" data-todo-id="<?php echo $todo['id']?>"/>
                        <h2><?php echo $todo['title'] ?></h2>                    
                    <?php } ?>               
                    <br>
                    <small>criado em: <?php echo date("d/m/Y H:i:s",strtotime($todo['date_time'])) ?></small>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>