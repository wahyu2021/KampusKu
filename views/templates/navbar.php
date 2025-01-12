<!-- Navbar -->
  <div class="navbar sticky top-0 left-0 right-0 bg-indigo-800 z-10">
    <!-- Tombol drawer untuk mobile -->
    <div class="absolute left-2 top-0 h-full flex items-center lg:hidden">
      <label for="my-drawer-2" class="btn btn-square btn-ghost text-white">
      <i class="fa-solid fa-bars"></i>
      </label>
    </div>

    <!-- Logo atau Judul -->
    <div class="absolute md:ml-14 left-1/2 transform -translate-x-1/2 lg:static lg:transform-none cursor-pointer">
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
          <i class="fas fa-right-to-bracket"></i> Logout
        </button>
      </div>
    </div>
  </div>