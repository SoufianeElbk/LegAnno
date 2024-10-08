<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-indigo-700 font-Poppins dark:bg-gray-900 dark:text-white">
    <div class="container mx-auto">
        <div class="flex h-screen bg-indigo-700 dark:bg-gray-900">
            <div class="w-full max-w-md m-auto bg-indigo-100 dark:bg-gray-800 rounded p-5">
                <header>
                    <img class="w-2/3 mx-auto mb-5" src="{{asset('/images/logo1.png')}}" alt="Logo" />
                </header>
                <form action="{{Route('login')}}" method="POST">
                    @csrf
                    <div>
                        <label class="block mb-2 text-indigo-500 dark:text-gray-300" for="username">Email</label>
                        <div class="mb-6 flex items-center relative">
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-2 dark:text-black" width="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-at-symbol"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 20.064A9 9 0 1121 12v1.5a2.5 2.5 0 01-5 0V8m0 4a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            <input name="email" class="w-full text-indigo-700 dark:text-black px-10 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" type="email" placeholder="Email" />
                        </div>
                    </div>
                    <div>
                        <label class="block mb-2 text-indigo-500 dark:text-gray-300" for="password">Mot de passe</label>
                        <div class="mb-6 flex items-center relative">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-2 dark:text-black" width="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-key"><circle xmlns="http://www.w3.org/2000/svg" cx="15.5" cy="8.5" r="1.5" fill="currentColor"/><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 16l5.18-5.652C10.033 9.875 10 9.523 10 9a5 5 0 115 5c-.523 0-.868-.01-1.342-.158L12 15.5h-2v2H8v2H5V16z"/></svg> --}}
                            <svg class="absolute ml-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 11.0001V7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7V11.0001M5 22.0001H19C20.1046 22.0001 21 21.1046 21 20.0001V13.0001C21 11.8955 20.1046 11.0001 19 11.0001H5C3.89543 11.0001 3 11.8955 3 13.0001V20.0001C3 21.1046 3.89543 22.0001 5 22.0001Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <input name="password" id="password" class="w-full px-10 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white dark:text-black" type="password" placeholder="Mot de passe" />
                            <svg id="togglePasswordVisibility" xmlns="http://www.w3.org/2000/svg" class="absolute right-0 mr-3 dark:text-black cursor-pointer" width="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-eye"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M3 12c5.4-8 12.6-8 18 0-5.4 8-12.6 8-18 0z"/><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                    </div>
                    <div>
                        <input class="cursor-pointer w-full bg-indigo-700 hover:bg-pink-600 dark:bg-gray-700 dark:hover:bg-pink-600 text-white font-bold py-2 px-4 mb-4 rounded" type="submit" value="Connexion">
                    </div>
                </form>
                @if ($errors->any())
                    <div class="mb-4">
                        @foreach ($errors->all() as $error)
                            <p class="text-red-600 dark:text-red-400 font-medium w-fit mx-auto">{{$error}}</p>
                        @endforeach
                    </div>
                @endif
                <footer>
                    <a class="text-indigo-700 hover:text-pink-700 dark:text-gray-300 dark:hover:text-pink-700 text-sm float-left" href="{{Route('password.request')}}">Mot de passe oublié ?</a>
                    <a class="text-indigo-700 hover:text-pink-700 dark:text-gray-300 dark:hover:text-pink-700 text-sm float-right" href="{{Route('register')}}">Creér un Compte</a>
                </footer>
            </div>
        </div>
    </div>
    <label class="inline-flex items-center cursor-pointer absolute top-4 right-4">
        <input type="checkbox" value="" class="sr-only peer">
        <div id="toggle-dark-mode" class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
    </label>
</body>

<script>
    document.getElementById('toggle-dark-mode').addEventListener('click', function(){
        document.documentElement.classList.toggle('dark');
        document.querySelector('[alt=Logo]').getAttribute('src') == "/images/logo1.png" ? document.querySelector('[alt=Logo]').setAttribute('src',"{{asset('/images/logo2.png')}}") : document.querySelector('[alt=Logo]').setAttribute('src',"{{asset('/images/logo1.png')}}")
    });
</script>
<script>
    document.getElementById('togglePasswordVisibility').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const isPasswordVisible = passwordInput.type === 'text';

        if (isPasswordVisible) {
            passwordInput.type = 'password';
            this.innerHTML = `<path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M3 12c5.4-8 12.6-8 18 0-5.4 8-12.6 8-18 0z"/><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>`;
        } else {
            passwordInput.type = 'text';
            this.innerHTML = `<path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10a13.358 13.358 0 003 2.685M21 10a13.358 13.358 0 01-3 2.685m-8 1.624L9.5 16.5m.5-2.19a10.59 10.59 0 004 0m-4 0a11.275 11.275 0 01-4-1.625m8 1.624l.5 2.191m-.5-2.19a11.275 11.275 0 004-1.625m0 0l1.5 1.815M6 12.685L4.5 14.5"/>`;
        }
    });
</script>
</html>
