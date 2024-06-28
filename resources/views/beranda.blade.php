@extends('layout-page.layout')

@section('content')
    <div class="flex-1 p-10 lg:ml-[10px] transition-all duration-1000 text-lg font-bold text-white">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
            <!-- Section 1 -->
            <div class="bg-black p-3 rounded-md w-full lg:col-span-3 md:col-span-2">
                <div class="flex justify-center">
                    <ul class="navigasi flex space-x-4 border-b border-gray-700" style="margin-top: 10px; margin-bottom: 0;">
                        <li class="navigasi-item NavFilter">
                            <a id="forYouLink"
                                class="navigasi-link pilihKategoriPostingan active border-b-2 border-blue-500 pb-2 cursor-pointer"
                                href="javascript:void(0);" onclick="showContent('forYou')">
                                <p>For You</p>
                            </a>
                        </li>
                        <li class="navigasi-item">
                            <a id="followingLink" class="navigasi-link pilihKategoriPostingan cursor-pointer pb-2"
                                href="javascript:void(0);" onclick="showContent('following')">
                                <p>Following</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="forYouContent" class="border border-gray-700 mt-4 rounded-lg hidden">
                    <div class="card bg-black shadow-md rounded-lg p-4 text-white">
                        <h2 class="text-lg mb-4 font-semibold">For You</h2>

                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/images/images.jpeg') }}" alt="Profile Photo"
                                class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <p class="text-xl font-bold">Nama Pengguna</p>
                                <p class="text-gray-500">@username</p>
                            </div>
                        </div>

                        <div>
                            <span>Konten isi</span>
                            <img src="{{ asset('assets/images/images.jpeg') }}" alt="Content Image"
                                class="w-full h-auto rounded-lg">
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <div class="flex space-x-4">
                                <i class="far fa-heart text-xl cursor-pointer"></i>
                                <i class="far fa-comment text-xl cursor-pointer"></i>
                                <i class="far fa-paper-plane text-xl cursor-pointer"></i>
                            </div>
                            <i class="far fa-bookmark text-xl cursor-pointer"></i>
                        </div>

                        <div class="mt-4">
                            <p class="font-semibold">24 suka</p>
                            <p class="text-gray-500 cursor-pointer">Lihat semua 15 komentar</p>
                            <div class="mt-2">
                                <input type="text"
                                    class="w-full bg-transparent border-b border-gray-700 focus:outline-none text-white"
                                    placeholder="Tambahkan komentar...">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="followingContent" class="border border-gray-700 mt-4 rounded-lg hidden">
                    <div class="card bg-black shadow-md rounded-lg p-4 text-white">
                        <h2 class="text-lg mb-4 font-semibold">Following</h2>

                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/images/images.jpeg') }}" alt="Profile Photo"
                                class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <p class="text-xl font-bold">Nama Pengguna</p>
                                <p class="text-gray-500">@username</p>
                            </div>
                        </div>

                        <div>
                            <span>Konten isi</span>
                            <img src="{{ asset('assets/images/images.jpeg') }}" alt="Content Image"
                                class="w-full h-auto rounded-lg">
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <div class="flex space-x-4">
                                <i class="far fa-heart text-xl cursor-pointer"></i>
                                <i class="far fa-comment text-xl cursor-pointer"></i>
                                <i class="far fa-paper-plane text-xl cursor-pointer"></i>
                            </div>
                            <i class="far fa-bookmark text-xl cursor-pointer"></i>
                        </div>

                        <div class="mt-4">
                            <p class="font-semibold">24 suka</p>
                            <p class="text-gray-500 cursor-pointer">Lihat semua 15 komentar</p>
                            <div class="mt-2">
                                <input type="text"
                                    class="w-full bg-transparent border-b border-gray-700 focus:outline-none text-white"
                                    placeholder="Tambahkan komentar...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section 2 -->
            <div id="whoToFollowContent"
                class="bg-gray-800 p-3 rounded-md w-full lg:col-span-2 md:col-span-2 hidden lg:block">
                <div class="flex justify-center items-start h-full">
                    <div class="card bg-black shadow-md rounded-lg p-4 text-white">
                        <h2 class="text-lg mb-4 font-semibold">Siapa Yang Harus Diikuti</h2>

                        <!-- Contoh Card Pengguna yang Harus Diikuti -->
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/images/images.jpeg') }}" alt="Profile Photo"
                                class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <p class="text-xl font-bold">Nama Pengguna</p>
                                <p class="text-gray-500">@username</p>
                            </div>
                            <button
                                class="ml-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none">
                                Ikuti
                            </button>
                        </div>

                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/images/images.jpeg') }}" alt="Profile Photo"
                                class="w-16 h-16 rounded-full mr-4">
                            <div>
                                <p class="text-xl font-bold">Nama Pengguna</p>
                                <p class="text-gray-500">@username</p>
                            </div>
                            <button
                                class="ml-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none">
                                Ikuti
                            </button>
                        </div>

                        <!-- Tambahkan card lainnya sesuai kebutuhan -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function showContent(type) {
                const forYouContent = document.getElementById("forYouContent");
                const followingContent = document.getElementById("followingContent");

                if (type === 'forYou') {
                    forYouContent.classList.remove("hidden");
                    followingContent.classList.add("hidden");
                } else if (type === 'following') {
                    forYouContent.classList.add("hidden");
                    followingContent.classList.remove("hidden");
                }
            }

            // Set default view
            showContent('forYou');
        });
    </script>
@endsection
