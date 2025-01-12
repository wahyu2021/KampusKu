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
<body class="min-h-screen">
  <!-- Navbar -->
  <div class="navbar fixed top-0 left-0 right-0 bg-indigo-800 z-10">
    <!-- Tombol drawer untuk mobile -->
    <div class="absolute left-2 top-0 h-full flex items-center lg:hidden">
      <label for="my-drawer-2" class="btn btn-square btn-ghost text-white">
        <i class="text-xl bi bi-list"></i>
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
          <i class="bi bi-box-arrow-right"></i> Logout
        </button>
      </div>
    </div>
  </div>

  <div id="mainContent" class="flex flex-1 min-h-screen mt-16">
    <!-- Sidebar -->
    <div class="drawer md:fixed md:left-0 md:top-16 md:drawer-open z-10">
      <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
      <!-- Sidebar Konten -->
      <div class="drawer-side">
        <label for="my-drawer-2" class="drawer-overlay" aria-label="Close sidebar"></label>
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

          <!-- Logout (Mobile Only) -->
          <div class="flex flex-col md:hidden p-4 mt-auto border-t border-indigo-500">
            <button class="btn btn-ghost text-white flex items-center gap-2" aria-label="Logout">
              <i class="bi bi-box-arrow-right"></i> Logout
            </button>
          </div>
        </nav>
      </div>
    </div>

    <!-- Main Content -->
    <div class="md:px-4 my-2 mx-4 md:ml-64">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium sequi fugiat molestias autem repudiandae debitis fuga eum assumenda commodi eaque reprehenderit a nihil...</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consectetur quasi quidem ducimus sed sit rerum omnis fuga, sunt explicabo aliquid impedit voluptatibus dicta...</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolore blanditiis quidem sapiente alias eum fuga et, saepe officiis natus facilis architecto, aliquid atque aspernatur pariatur ipsam vero nemo! Labore rem animi hic nostrum, iste deleniti similique porro, cupiditate eos veritatis beatae, delectus libero reprehenderit sit necessitatibus omnis voluptate earum mollitia laudantium consectetur accusantium error cumque autem quasi? Facilis quisquam sunt ut placeat illo repellendus aliquid magni reiciendis totam! Perferendis accusamus animi suscipit adipisci voluptates, natus fuga quos, repellendus nostrum eaque, quae aspernatur ratione exercitationem porro earum officiis tenetur. Minima, placeat ut tenetur maiores ab aut perspiciatis. Aspernatur aut enim omnis nulla consequuntur, dolorem veritatis odit rem, quas fuga, quia tempore. Odio harum accusantium dolore consectetur adipisci? Adipisci veniam vitae ullam necessitatibus repellendus id aperiam nostrum tempora eaque commodi autem suscipit fugiat pariatur hic alias, harum quam ipsum, laudantium iste quia deserunt! Modi pariatur velit distinctio veritatis, tempora itaque delectus quam odio harum a aliquid quibusdam adipisci possimus expedita voluptatum blanditiis cumque quod! Reiciendis eum tempore id illo, repudiandae optio tempora sed mollitia dolore aperiam ratione sequi explicabo doloribus atque quod molestiae nisi odit distinctio iure vitae deleniti qui labore esse odio? Labore suscipit vel quis voluptatum dolore sequi, earum voluptatem molestias voluptatibus? A, porro aspernatur! Eligendi, dolore. Voluptatum, hic eum inventore iure dolore tenetur eveniet vero natus aperiam architecto, animi commodi accusantium temporibus perspiciatis quaerat harum maxime quod placeat unde cupiditate neque ratione cum, sapiente magnam! Inventore iste veniam beatae sequi harum! Fuga repudiandae, dolore assumenda nobis eius maiores eveniet ipsa nemo itaque, eos tempora, dignissimos hic? Earum velit eius, ipsam doloremque maxime qui voluptatem perferendis iure quis quibusdam, dolorem quisquam animi pariatur, expedita voluptas aspernatur ad minima iusto quas. Dolore unde minus alias quia aliquid libero, culpa, illo cupiditate, veritatis sint beatae quas? Tempora quo ab in! Soluta voluptatem ipsa eos saepe est, reprehenderit quasi voluptatibus nisi ut vitae doloremque fuga ratione dicta eaque, accusantium numquam earum dolorum. Voluptas eaque veritatis quam? Autem consequatur ullam dolore rerum officia sit, laborum facere sequi esse, libero quia doloremque illo maiores excepturi nulla sapiente asperiores aut. Omnis illo ipsam deserunt, alias corrupti cupiditate earum est nostrum, perferendis suscipit repellendus debitis, perspiciatis ipsum laudantium aperiam eveniet veritatis assumenda eius officiis autem commodi nesciunt. Molestiae libero dolor perferendis repudiandae rerum voluptatem est maiores adipisci veniam. Animi, necessitatibus at fugiat ea libero laboriosam incidunt molestias quod odio blanditiis accusantium quos unde autem dolore, veniam accusamus! Deleniti aut blanditiis animi unde ea voluptate id aperiam nostrum ut reiciendis voluptatibus commodi facilis molestias sint repudiandae alias modi eaque, similique distinctio, quis porro. Molestiae accusantium similique eius ullam, laborum quod fugit incidunt earum! Incidunt debitis voluptatibus, earum facilis aspernatur numquam atque ab accusantium obcaecati eum odio aliquid ducimus illum, commodi id, dolorum facere? Unde, rerum itaque! Omnis aperiam libero neque animi consequatur praesentium nihil, odio in! Assumenda aperiam repudiandae natus mollitia dicta molestias delectus quam vero beatae libero accusamus, adipisci, nemo soluta dolorem ea ad corrupti illo. Veritatis voluptas optio culpa, quos eos amet alias sint! Cumque nam iste consequuntur sint vitae doloremque adipisci accusamus delectus. Culpa perferendis quos dolorem ipsam aliquid error! Veniam, esse soluta? Voluptates hic eaque tempora illum, dolorem harum fuga a accusamus provident repellat quibusdam tenetur ullam obcaecati dolor temporibus, at sunt dolores sapiente pariatur. Quibusdam non, amet rerum modi beatae sapiente, optio explicabo unde eveniet, aliquam at. Illum delectus, id in accusantium quas ea perspiciatis dicta sequi aliquam. Eos, dolores odio, rerum et voluptates quidem enim officia iste totam cumque, at autem sapiente voluptatem. Quod et dolor culpa numquam quaerat, ad blanditiis voluptas officia placeat commodi consequatur, laudantium libero repellat modi officiis. Eius, ipsam! Aut repellendus eum, voluptas laboriosam ut ipsa quo, modi ratione, dicta dolore a dignissimos. Dolorum sequi molestiae dolores vitae officiis culpa dolor facere beatae qui. Praesentium earum, voluptatem molestias soluta hic rem modi. Repellat magnam dolor debitis, voluptatibus rerum nobis dignissimos minima, earum temporibus accusantium ipsa! Libero similique distinctio, beatae expedita voluptates reprehenderit vitae blanditiis voluptas nisi temporibus, placeat inventore porro consectetur dignissimos non doloremque asperiores minus eveniet nostrum quas odio reiciendis, nam optio excepturi. Laborum et, nesciunt, tempore facilis delectus debitis, molestias quisquam voluptatibus earum suscipit distinctio eum! Totam quaerat obcaecati similique aperiam vel tempora incidunt, reprehenderit explicabo quo aliquid sed natus, odit est sapiente ullam minus esse minima illo aut suscipit eligendi excepturi voluptates necessitatibus neque. Cumque eius possimus et quas, fugit deserunt earum sapiente. Earum ab accusamus hic at, dolor aperiam tenetur molestiae! Ex repellendus voluptatibus, rem odio magnam corrupti animi natus nesciunt totam nulla consequatur accusamus? Ab doloribus officiis voluptate quod fuga eligendi, cumque nam debitis voluptas! Culpa fugit eos ipsum sunt reiciendis, harum labore minima sapiente incidunt earum provident aliquam assumenda, facere ex voluptatum doloremque recusandae tempora alias reprehenderit, dicta saepe deleniti accusantium. Eveniet, sint nulla distinctio itaque numquam ab ea odio omnis neque? In hic dolores est reprehenderit ipsum eaque ratione et veniam voluptas odio! Molestias reiciendis consequatur quas.</p>
    </div>
  </div>
</body>
</html>
