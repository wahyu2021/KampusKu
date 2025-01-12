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
  <!-- Navbar -->
  <div class="navbar bg-indigo-800 relative">
    <!-- Tombol drawer untuk mobile -->
    <div class="absolute left-2 top-0 h-full flex items-center lg:hidden">
      <label for="my-drawer-2" class="btn btn-square btn-ghost text-white">
        <i class="text-xl bi bi-list"></i>
      </label>
    </div>

    <!-- Logo atau Judul -->
    
    <div class="absolute left-1/2 transform -translate-x-1/2 lg:static lg:transform-none lg:ms-16 cursor-pointer">
      <a 
        class="text-white text-xl font-semibold" 
        style="transition: transform 0.3s; display: inline-block;" 
        onmouseover="this.style.transform='rotate(6deg) scale(1.15)';" 
        onmouseout="this.style.transform='rotate(0deg) scale(1)';"
        href="#"
      >
        KampusKu
      </a>
    </div>


    <!-- Profil (Desktop) -->
    <div class="hidden md:block absolute right-4 top-1/2 transform -translate-y-1/2">
      <div class="flex items-center gap-2">
        <div class="w-10 rounded-full overflow-hidden">
          <img 
            src="../../assets/images/profile.png"
            alt="Profil"
            class="w-full h-full object-cover">
        </div>
        <button class="btn btn-ghost text-white">
          <i class="bi bi-box-arrow-right"></i> Logout
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar -->
  <div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    
    <!-- Sidebar Konten -->
    <div class="drawer-side">
      <label for="my-drawer-2" class="drawer-overlay" aria-label="close sidebar"></label>
      <nav class="flex flex-col bg-indigo-600 text-white w-64 min-h-full">
        <!-- Profil -->
        <div class="flex md:hidden flex-col items-center gap-4 p-4 border-b border-indigo-500">
          <div class="w-12 h-12 rounded-full overflow-hidden">
            <img 
              src="../../assets/images/profile.png" 
              alt="Profil" 
              class="w-full h-full object-cover">
          </div>
          <span class="text-lg font-semibold">Admin</span>
        </div>
        
        <!-- Menu -->
        <ul class="menu p-4 text-lg">
          <li>
            <a href="#" class="hover:bg-indigo-500 hover:text-indigo-200 flex items-center gap-2">
              <i class="bi bi-house"></i> Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="hover:bg-indigo-500 hover:text-indigo-200 flex items-center gap-2">
              <i class="bi bi-people"></i> Dosen
            </a>
          </li>
          <li>
            <a href="#" class="hover:bg-indigo-500 hover:text-indigo-200 flex items-center gap-2">
              <i class="bi bi-people"></i> Mahasiswa
            </a>
          </li>
          <li>
            <a href="#" class="hover:bg-indigo-500 hover:text-indigo-200 flex items-center gap-2">
              <i class="bi bi-calendar-week"></i> Jadwal
            </a>
          </li>
          <li>
            <a href="#" class="hover:bg-indigo-500 hover:text-indigo-200 flex items-center gap-2">
              <i class="bi bi-book"></i> Mata Kuliah
            </a>
          </li>
        </ul>

        <!-- Logout (khusus layar kecil) -->
        <div class="flex flex-col md:hidden p-4 mt-auto border-t border-indigo-500">
          <button class="btn btn-ghost text-white flex items-center gap-2">
            <i class="bi bi-box-arrow-right"></i> Logout
          </button>
        </div>
      </nav>
    </div>
  </div>


</body>
</html>