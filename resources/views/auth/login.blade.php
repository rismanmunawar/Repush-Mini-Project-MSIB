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

<body class="bg-black font-Poppins text-white">

    <div class="container mx-auto flex justify-center items-center h-screen">
        <div class="max-w-md mx-auto bg-black p-8 rounded-lg shadow-lg flex flex-col items-center space-y-4">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-25 h-25">
            @if (session('success'))
                <div class="w-auto flex bg-primary p-3 rounded">
                    <div class="text-white ">{{ session('success') }}</div>
                </div>
            @endif
            <form action="{{ route('loginPost') }}" method="POST">
                @csrf
                <div class="mt-3 ">
                    <label for="email" class="block text-white text-sm font-bold mb-2">Email</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="form-input @error('username') border-red-500 @enderror w-full px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 bg-gray-900 text-white"
                            placeholder="Masukkan email Anda" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-3 ">
                    <label for="password" class="block text-white text-sm font-bold mb-2">Password</label>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="password"
                            class="form-input @error('password') border-red-500 @enderror w-full px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 bg-gray-900 text-white"
                            placeholder="Masukkan password Anda" value="{{ old('password') }}">
                    </div>
                    @error('password')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-5">
                    <button type="submit"
                        class="text-white bg-primary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-full">Login</button>
                </div>
                <div class="mt-3 flex justify-center">
                    <div class="mt-2 flex justify-center gap-3">
                        <p class="text-[#404040] text-opacity-50">Don't have an account?</p>
                        <a href="{{ route('register') }}" class="font-bold" style="color: #1D397F;">Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
