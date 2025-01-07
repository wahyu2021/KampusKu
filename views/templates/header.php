<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KampusKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php include_once __DIR__ . "/fonts.php" ?>
</head>
<body class="d-flex">
    <?php include_once __DIR__ . "/sidebar.php" ?>

    <div class="flex-grow-1" id="mainContent">
        <div class="bg-second-sidebar w-full p-1 d-flex justify-content-between">
            <button class="btn text-white fs-5" id="toggleSidebar"> <i class="bi bi-list"></i> </button>
            <div class="d-flex gap-2">
                <img src="../../assets/images/profile.png" alt="" width="40" height="40" class="rounded-circle">
                <div class="dropdown">
                    <i class="dropdown-toggle p-2 btn text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-person"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-gear"></i> Setting</a></li>
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-box-arrow-right"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

            

