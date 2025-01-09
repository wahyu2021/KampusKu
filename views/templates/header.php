<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <?php include_once __DIR__ . "/fonts.php" ?>
</head>
<body>
    <!-- navbar -->
    <div class="navbar bg-indigo-800 relative">
      <!-- Tombol drawer untuk mobile -->
      <div class="absolute left-2 top-0 h-full flex items-center lg:hidden">
        <label for="my-drawer-2" class="btn btn-square btn-ghost text-white">
          <i class="text-xl bi bi-list"></i>
        </label>
      </div>

      <!-- Elemen daisyUI -->
      <div class="absolute left-1/2 transform -translate-x-1/2 lg:static lg:transform-none lg:ms-16">
        <a class="normal-case text-white text-xl">daisyUI</a>
      </div>

      <!-- Profile -->
      <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
        <div class="flex items-center gap-2">
          <div class="w-10 rounded-full">
            <img 
              src="../../assets/images/profile.png"
              alt="profil">
          </div>
          <button class="btn btn-ghost text-white">Logout</button>
        </div>
      </div>
    </div>

    
     
    
    <!-- Sidebar -->
    <div class="drawer lg:drawer-open">
      <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
      <!-- Konten Sidebar -->
      <div class="drawer-side">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-indigo-600 text-white min-h-full w-64 p-4">
          <li><a class="hover:bg-indigo-500 hover:text-indigo-200">Sidebar Item 1</a></li>
          <li><a class="hover:bg-indigo-500 hover:text-indigo-200">Sidebar Item 2</a></li>
        </ul>
      </div>
    </div>
</body>
</html>