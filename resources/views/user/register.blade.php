<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-indigo-700 font-Poppins dark:bg-gray-800">


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{Route('register')}}" method="POST">
    @csrf
    {{-- @include('user.components.nav') --}}
        <div class="container mx-auto ">
            <div class="min-h-screen bg-indigo-700 text-gray-900 flex justify-center dark:bg-gray-800 dark:text-white">
                <div class="max-w-screen-xl m-0 sm:m-10 shadow sm:rounded-lg flex justify-center flex-1">
                    <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12 bg-white rounded-lg dark:bg-gray-700">
                        <div>
                            <a href="{{Route('accueil')}}"><img src="{{asset('images/logo1.png')}}" class="w-2/3 mx-auto" alt="Logo"/> </a>
                        </div>
                        <div class="mt-8 flex flex-col items-center">
                            <h1 class="text-2xl lg:text-3xl font-semibold">
                                Créez votre compte
                            </h1>
                            <div class="w-full flex-1 mt-4">
                                <div class="mx-auto max-w-xs dark:text-black">
                                    <div class="mt-5 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-2" width="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-user"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 19v-1.25c0-2.071-1.919-3.75-4.286-3.75h-3.428C7.919 14 6 15.679 6 17.75V19m9-11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <input value="{{old('nom')}}"
                                            name="nom" class="w-full px-10 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                            type="text" placeholder="Nom complet" />
                                    </div>
                                    <div class="mt-5 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute ml-2" width="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-at-symbol"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 20.064A9 9 0 1121 12v1.5a2.5 2.5 0 01-5 0V8m0 4a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                                        <input value="{{old('email')}}"
                                            name="email" class="w-full px-10 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white @if ($errors->has('email')) border-red-500" @endif
                                            type="email" placeholder="Email" />
                                    </div>
                                    <div class="mt-5 flex items-center relative">
                                        <svg class="absolute ml-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 11.0001V7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7V11.0001M5 22.0001H19C20.1046 22.0001 21 21.1046 21 20.0001V13.0001C21 11.8955 20.1046 11.0001 19 11.0001H5C3.89543 11.0001 3 11.8955 3 13.0001V20.0001C3 21.1046 3.89543 22.0001 5 22.0001Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <input name="password"  id="password" class="w-full px-10 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white  @if ($errors->has('password')) border-red-500" @endif type="password" placeholder="Mot de passe" />
                                        <svg id="togglePasswordVisibility" xmlns="http://www.w3.org/2000/svg" class="absolute right-0 mr-3 cursor-pointer" width="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-eye"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M3 12c5.4-8 12.6-8 18 0-5.4 8-12.6 8-18 0z"/><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    </div>
                                    <div class="mt-5 flex items-center relative">
                                        <svg class="absolute ml-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 11.0001V7C7 4.23858 9.23858 2 12 2C14.7614 2 17 4.23858 17 7V11.0001M5 22.0001H19C20.1046 22.0001 21 21.1046 21 20.0001V13.0001C21 11.8955 20.1046 11.0001 19 11.0001H5C3.89543 11.0001 3 11.8955 3 13.0001V20.0001C3 21.1046 3.89543 22.0001 5 22.0001Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <input name="password_confirmation" id="password2" class="w-full px-10 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white  @if ($errors->has('password_confirmation')) border-red-500" @endif type="password" placeholder="Confirmer votre mot de passe" />
                                        <svg id="togglePasswordVisibility2" xmlns="http://www.w3.org/2000/svg" class="absolute right-0 mr-3 cursor-pointer" width="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-eye"><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M3 12c5.4-8 12.6-8 18 0-5.4 8-12.6 8-18 0z"/><path xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    </div>
                                    <button type="submit" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">Inscription</button>
                                    <p class="mt-6 text-xs text-gray-600 text-center dark:text-white">Vous disposez déjà d'un compte ? <a href="{{route('login')}}" class="font-semibold">Se connecter</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 bg- text-center hidden lg:flex">
                        <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                            style="background-image: url('{{asset("/images/download4.png")}}');">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <label class="inline-flex items-center cursor-pointer absolute top-4 right-4">
        <input type="checkbox" value="" class="sr-only peer">
        <div id="toggle-dark-mode"
            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
        </div>
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
    document.getElementById('togglePasswordVisibility2').addEventListener('click', function () {
        const passwordInput = document.getElementById('password2');
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
