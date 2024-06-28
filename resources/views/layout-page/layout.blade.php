<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Mini Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body class="bg-black font-[Poppins] text-base">
    <span class="absolute text-white text-2xl top-5 left-4 cursor-pointer" onclick="Openbar()">
        <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>
    <div class="lg:flex">
        <!-- Sidebar -->
        @include('layout-page.sidebar')
        <!-- Konten -->
        @yield('content')

    </div>

    <script>
        function dropDown() {
            document.querySelector('#submenu').classList.toggle('hidden');
            document.querySelector('#arrow').classList.toggle('rotate-0');
        }

        function Openbar() {
            document.querySelector('.sidebar').classList.toggle('left-[-300px]');
        }
    </script>

    <script>
        function showContent(section) {
            const forYouContent = document.getElementById('forYouContent');
            const followingContent = document.getElementById('followingContent');
            const forYouLink = document.getElementById('forYouLink');
            const followingLink = document.getElementById('followingLink');

            if (section === 'forYou') {
                forYouContent.classList.remove('hidden');
                followingContent.classList.add('hidden');
                forYouLink.classList.add('border-b-2', 'border-blue-500');
                followingLink.classList.remove('border-b-2', 'border-blue-500');
            } else {
                forYouContent.classList.add('hidden');
                followingContent.classList.remove('hidden');
                forYouLink.classList.remove('border-b-2', 'border-blue-500');
                followingLink.classList.add('border-b-2', 'border-blue-500');
            }
        }
    </script>
</body>

</html>
