<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KampusKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="d-flex">
    <?php include_once __DIR__ . "/sidebar.php" ?>

    <div class="flex-grow-1" id="mainContent">
       <div class="d-flex flex-column">
            <div class="p-2 border-bottom bg-light">
                <button class="btn border d-md-none" id="toggleSidebar">
                        ☰
                </button>

                <div class="d-md-flex justify-content-end align-items-center gap-2 d-none">
                    <img src="../../assets/images/profile.png" alt="" width="40" height="40" class="rounded-circle">
                    <div class="dropdown">
                        <button class="btn border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            

