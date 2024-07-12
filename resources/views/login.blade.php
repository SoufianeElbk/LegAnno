<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-indigo-700 font-Poppins dark:bg-black dark:text-white">
    <div class="container mx-auto">
        <div class="flex h-screen bg-indigo-700 dark:bg-gray-900">
            <div class="w-full max-w-md m-auto bg-indigo-100 dark:bg-gray-800 rounded p-5">
                <header>
                    <img class="w-2/3 mx-auto mb-5" src="{{asset('/images/logo1.png')}}" alt="Logo" />
                </header>
                <form>
                    <div>
                        <label class="block mb-2 text-indigo-500 dark:text-gray-300" for="username">Email</label>
                        <input
                            class="w-full p-2 mb-6 text-indigo-700 dark:text-black border-b-2 border-indigo-500 dark:border-red-600 outline-none focus:bg-gray-300"
                            type="text" name="username">
                    </div>
                    <div>
                        <label class="block mb-2 text-indigo-500 dark:text-gray-300" for="password">Mot de passe</label>
                        <div class="mb-6 flex items-center relative">
                            <input
                                class="w-full p-2 text-indigo-700 dark:text-black border-b-2 border-indigo-500 dark:border-red-600 outline-none focus:bg-gray-300"
                                type="password" name="password">
                            <svg id="hide" xmlns="http://www.w3.org/2000/svg" class="absolute right-0 mr-3" width="24" viewBox="0 0 640 512">
                                <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zm151 118.3C226 97.7 269.5 80 320 80c65.2 0 118.8 29.6 159.9 67.7C518.4 183.5 545 226 558.6 256c-12.6 28-36.6 66.8-70.9 100.9l-53.8-42.2c9.1-17.6 14.2-37.5 14.2-58.7c0-70.7-57.3-128-128-128c-32.2 0-61.7 11.9-84.2 31.5l-46.1-36.1zM394.9 284.2l-81.5-63.9c4.2-8.5 6.6-18.2 6.6-28.3c0-5.5-.7-10.9-2-16c.7 0 1.3 0 2 0c44.2 0 80 35.8 80 80c0 9.9-1.8 19.4-5.1 28.2zm51.3 163.3l-41.9-33C378.8 425.4 350.7 432 320 432c-65.2 0-118.8-29.6-159.9-67.7C121.6 328.5 95 286 81.4 256c8.3-18.4 21.5-41.5 39.4-64.8L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5zm-88-69.3L302 334c-23.5-5.4-43.1-21.2-53.7-42.3l-56.1-44.2c-.2 2.8-.3 5.6-.3 8.5c0 70.7 57.3 128 128 128c13.3 0 26.1-2 38.2-5.8z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <input
                            class="cursor-pointer w-full bg-indigo-700 hover:bg-pink-600 dark:bg-gray-700 dark:hover:bg-pink-600 text-white font-bold py-2 px-4 mb-4 rounded"
                            type="submit" value="Connexion">
                    </div>
                </form>
                @if ($error)
                    <div class="mb-4"> 
                        <p class="text-red-600 dark:text-red-400 font-medium w-fit mx-auto">{{$error}}</p>
                    </div>
                @endif
                <footer>
                    <a class="text-indigo-700 hover:text-pink-700 dark:text-gray-300 dark:hover:text-pink-700 text-sm float-left" href="#">Mot de passe oublié ?</a>
                    <a class="text-indigo-700 hover:text-pink-700 dark:text-gray-300 dark:hover:text-pink-700 text-sm float-right" href="#">Creér un Compte</a>
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
    document.getElementById('hide').addEventListener('click', function(){
        document.querySelector('[name=password]').type == 'password' ? document.querySelector('[name=password]').type='text' : document.querySelector('[name=password]').type='password'
    });

    document.getElementById('toggle-dark-mode').addEventListener('click', function(){
        document.documentElement.classList.toggle('dark');
        document.querySelector('[alt=Logo]').getAttribute('src') == "/images/logo1.png" ? document.querySelector('[alt=Logo]').setAttribute('src',"{{asset('/images/logo2.png')}}") : document.querySelector('[alt=Logo]').setAttribute('src',"{{asset('/images/logo1.png')}}")
    });
</script>

</html>