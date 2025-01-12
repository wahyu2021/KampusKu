<div id="mainContent" class="flex flex-1 min-h-screen">
      <!-- Sidebar -->
      <div
        class="drawer md:fixed md:left-0 md:top-16 md:drawer-open z-10 flex-1"
      >
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <!-- Sidebar Konten -->
        <div class="drawer-side">
          <label
            for="my-drawer-2"
            class="drawer-overlay"
            aria-label="Close sidebar"
          ></label>
          <nav class="flex flex-col bg-indigo-600 text-white w-64 min-h-full">
            <!-- Profil -->
            <div
              class="flex md:hidden flex-col items-center gap-4 p-4 border-b border-indigo-500"
            >
              <div class="w-12 h-12 rounded-full overflow-hidden">
                <img
                  src="../../assets/images/profile.png"
                  alt="Profil"
                  class="w-full h-full object-cover"
                />
              </div>
              <span class="text-lg font-semibold">Admin</span>
            </div>

            <!-- Menu -->
            <ul class="menu p-4 text-lg space-y-2">
              <li>
                <a
                  href="#"
                  class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-indigo-500 hover:text-white transition"
                >
                  <i class="fas fa-house text-xl w-6 text-center"></i>
                  <span class="font-medium">Dashboard</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-indigo-500 hover:text-white transition"
                >
                  <i class="fas fa-users text-xl w-6 text-center"></i>
                  <span class="font-medium">Dosen</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-indigo-500 hover:text-white transition"
                >
                  <i class="fas fa-users text-xl w-6 text-center"></i>
                  <span class="font-medium">Mahasiswa</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-indigo-500 hover:text-white transition"
                >
                  <i class="fas fa-calendar-days text-xl w-6 text-center"></i>
                  <span class="font-medium">Jadwal</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-indigo-500 hover:text-white transition"
                >
                  <i class="fas fa-book text-xl w-6 text-center"></i>
                  <span class="font-medium">Mata Kuliah</span>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-indigo-500 hover:text-white transition"
                >
                  <i class="fas fa-users-rectangle text-xl w-6 text-center"></i>
                  <span class="font-medium">Kelas</span>
                </a>
              </li>
            </ul>

            <!-- Logout (Mobile Only) -->
            <div
              class="flex flex-col md:hidden p-4 mt-auto border-t border-indigo-500"
            >
              <button
                class="btn btn-ghost text-white flex items-center gap-2"
                aria-label="Logout"
              >
                <i class="fas fa-right-to-bracket"></i> Logout
              </button>
            </div>
          </nav>
        </div>
      </div>