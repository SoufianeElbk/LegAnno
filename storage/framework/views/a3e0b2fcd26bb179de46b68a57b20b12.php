<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?> | LegAnno</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

</head>

<body class="bg-indigo-700 font-[Poppins]">
    <?php echo $__env->yieldContent('content'); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.querySelector('[data-collapse-toggle]');
            const navbar = document.getElementById('navbar-default');

            toggleButton.addEventListener('click', function () {
                navbar.classList.toggle('hidden');
            });
        });
    </script>
    
    <?php if(auth()->guard()->check()): ?>
    <script>
        document.getElementById('dropdownNavbarLink').addEventListener('click', function() {
            var dropdown = document.getElementById('dropdownNavbar');
            dropdown.classList.toggle('hidden');
            // document.getElementById('drop').innerHTML == `<path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>` ? document.getElementById('drop').innerHTML = `<path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/>` : document.getElementById('drop').innerHTML = `<path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>`;
        });
    </script>
    <?php endif; ?>
</body>

</html>


<?php /**PATH D:\ENSET\s3\stage\projet\prj\LegAnno\resources\views/user/layouts/base.blade.php ENDPATH**/ ?>