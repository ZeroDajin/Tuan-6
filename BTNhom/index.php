<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách công việc</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <form action="add_task.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nhập công việc" name="task">
            </div>
            <button type="submit" class="btn btn-primary">Thêm công việc</button>
        </form>
        <br>
        <h2 class="text-center">DANH SÁCH CÔNG VIỆC</h2>
        <ul class="list-group mt-3">
            <?php include 'show_tasks.php'; ?>
        </ul>
    </div>
</body>

</html>