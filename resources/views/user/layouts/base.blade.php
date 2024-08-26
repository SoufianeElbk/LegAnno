<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | LegAnno</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-indigo-700 font-[Poppins]">
    @yield('content')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.querySelector('[data-collapse-toggle]');
            const navbar = document.getElementById('navbar-default');

            toggleButton.addEventListener('click', function () {
                navbar.classList.toggle('hidden');
            });
        });
    </script>
    {{-- <script>
        document.getElementById('ajouterRepresentant').addEventListener('click', function() {
            // Find the form template
            var formTemplate = document.getElementById('form-representant');
            // Clone the form template
            var newForm = formTemplate.cloneNode(true);
            newForm.removeAttribute('id')
            newForm.classList.add("border-t-4", "pt-8");
            // Create the delete button
            var deleteButton = document.createElement('button');
            deleteButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-times  h-6 w-6 absolute top-4 right-4 mb-4"><g xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-width="2"><path d="M6 18L18 6M18 18L6 6"/></g></svg>`;
            deleteButton.addEventListener('click', function() {
                this.parentElement.remove();
            });

            // Append the delete button to the new form
            newForm.appendChild(deleteButton);

            // Insert the new form before the button
            document.getElementById('representant').insertBefore(newForm, this);
        });

        document.getElementById('ajouterCommissaire').addEventListener('click', function() {
            // Find the form template
            var formTemplate = document.getElementById('form-commissaire');
            // Clone the form template
            var newForm = formTemplate.cloneNode(true);
            newForm.removeAttribute('id')
            newForm.classList.add("border-t-4", "pt-8");
            // Create the delete button
            var deleteButton = document.createElement('button');
            deleteButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-times  h-6 w-6 absolute top-4 right-4 mb-4"><g xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-width="2"><path d="M6 18L18 6M18 18L6 6"/></g></svg>`;
            deleteButton.addEventListener('click', function() {
                this.parentElement.remove();
            });

            // Append the delete button to the new form
            newForm.appendChild(deleteButton);

            // Insert the new form before the button
            document.getElementById('commissaire').insertBefore(newForm, this);
        });

        document.getElementById('ajouterAssocie').addEventListener('click', function() {
            // Find the form template
            var formTemplate = document.getElementById('form-associe');
            // Clone the form template
            var newForm = formTemplate.cloneNode(true);
            newForm.removeAttribute('id')
            newForm.classList.add("border-t-4", "pt-8");
            // Create the delete button
            var deleteButton = document.createElement('button');
            deleteButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="humbleicons hi-times  h-6 w-6 absolute top-4 right-4 mb-4"><g xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-width="2"><path d="M6 18L18 6M18 18L6 6"/></g></svg>`;
            deleteButton.addEventListener('click', function() {
                this.parentElement.remove();
            });

            // Append the delete button to the new form
            newForm.appendChild(deleteButton);

            // Insert the new form before the button
            document.getElementById('associe').insertBefore(newForm, this);
        });
    </script> --}}
    @auth
    <script>
        document.getElementById('dropdownNavbarLink').addEventListener('click', function() {
            var dropdown = document.getElementById('dropdownNavbar');
            dropdown.classList.toggle('hidden');
            // document.getElementById('drop').innerHTML == `<path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>` ? document.getElementById('drop').innerHTML = `<path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/>` : document.getElementById('drop').innerHTML = `<path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>`;
        });
    </script>
    @endauth
</body>

</html>


