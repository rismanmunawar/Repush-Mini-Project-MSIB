<div class="sidebar fixed lg:static top-0 bottom-0 left-[-250px] lg:left-0 duration-1000 p-2 w-[250px] overflow-y-auto text-center bg-gray-900 shadow h-screen z-50"
    id="sidebar">
    <div class="text-gray-100 text-lg">
        @auth
            <div class="p-2.5 mt-1 flex items-center rounded-md">
                <i>
                    <img class="object-cover w-10 h-10 rounded-full" src="{{ asset('assets/images/images.jpeg') }}"
                        alt="gambar postingan">
                </i>
                <div class="ml-4">
                    <div class="text-sm">
                        <span id="usernameProfileAuthor">Name</span>
                    </div>
                    <div class="text-xs">
                        <span id="namaProfileAuthor"> {{ auth()->user()->username }}</span>
                    </div>
                </div>
                <i class="bi bi-x ml-auto cursor-pointer lg:hidden" onclick="toggleSidebar()"></i>
            </div>
        @else
            <div class="p-2.5 mt-1 flex items-center rounded-md">
                <i>
                    <img class="object-cover w-10 h-10 rounded-full" src="{{ asset('assets/images/images.jpeg') }}"
                        alt="gambar postingan">
                </i>
                <div class="ml-4">
                    <div class="text-sm">
                        <span id="usernameProfileAuthor">Silahkan Login</span>
                    </div>
                    <div class="text-xs">
                        <span id="namaProfileAuthor">Ayo Login</span>
                    </div>
                </div>
                <i class="bi bi-x ml-auto cursor-pointer lg:hidden" onclick="toggleSidebar()"></i>
            </div>
        @endauth
        <hr class="my-2 text-gray-600">
        @auth
            <div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700">
                    <i class="fas fa-search text-xs"></i>
                    <input class="text-sm ml-4 w-full bg-transparent focus:outline-none" placeholder="Cari" />
                </div>
                <a href="{{ route('beranda') }}" class="block">
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                        <i class="fas fa-home"></i>
                        <span class="text-sm ml-4 text-gray-200">Beranda</span>
                    </div>
                </a>
                <a href="{{ route('notifications') }}" class="block">
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                        <i class="fas fa-bell"></i>
                        <span class="text-sm ml-4 text-gray-200">Notifikasi</span>
                    </div>
                </a>
                <a href="{{ route('explore') }}" class="block">
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                        <i class="fas fa-compass"></i>
                        <span class="text-sm ml-4 text-gray-200">Explore</span>
                    </div>
                </a>
                <a href="{{ route('post.create') }}" class="block">
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                        <i class="fas fa-plus"></i>
                        <span class="text-sm ml-4 text-gray-200">Posting</span>
                    </div>
                </a>
                <a href="{{ route('bookmarks') }}" class="block">
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                        <i class="fas fa-bookmark"></i>
                        <span class="text-sm ml-4 text-gray-200">Bookmarks</span>
                    </div>
                </a>
                <a href="{{ route('logout') }}" class="block">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="text-sm ml-4 text-gray-200">Logout</span>
                    </div>
                </a>
            </div>
        @else
            <div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700">
                    <i class="fas fa-search text-xs"></i>
                    <input class="text-sm ml-4 w-full bg-transparent focus:outline-none" placeholder="Cari" />
                </div>
                <a href="{{ route('beranda') }}" class="block">
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                        <i class="fas fa-home"></i>
                        <span class="text-sm ml-4 text-gray-200">Beranda</span>
                    </div>
                </a>
                <a href="{{ route('explore') }}" class="block">
                    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                        <i class="fas fa-compass"></i>
                        <span class="text-sm ml-4 text-gray-200">Explore</span>
                    </div>
                </a>

                <a href="{{ route('login') }}" class="block">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="text-sm ml-4 text-gray-200">Login</span>
                    </div>
                </a>
            </div>
        @endauth

    </div>
</div>

<div class="lg:hidden p-4 fixed top-4 left-4 z-50">
    <i class="bi bi-list text-2xl cursor-pointer" onclick="toggleSidebar()"></i>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        if (sidebar.classList.contains('-left-[250px]')) {
            sidebar.classList.remove('-left-[250px]');
            sidebar.classList.add('left-0');
        } else {
            sidebar.classList.remove('left-0');
            sidebar.classList.add('-left-[250px]');
        }
    }
</script>
