<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 300px;
        }
        .details {
            margin-bottom: 20px;
        }
        .details h3 {
            margin: 5px 0;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table, .table th, .table td {
            border: 1px solid black;
        }
        .table th, .table td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ $imagePath }}" alt="Logo">
        <h1>Confirmation de la commande</h1>
    </div>
    
    <div class="details">
        <h3>ID du client: {{ $commande->user->id }}</h3>
        <h3>Nom du client: {{ $commande->user->nom }}</h3>
        <h3>Email: {{ $commande->user->email }}</h3>
        <h3>Date: {{ \Carbon\Carbon::now()->format('d/m/Y H:i:s') }}</h3>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th>Pack</th>
                <th>Nombre d'annonces</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $commande->pack->nom }}</td>
                <td>{{ $commande->pack->nombre_annonces }}</td>
                <td>{{ $commande->pack->prix }} DH</td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        <h3>Total: {{ $commande->pack->prix }} DH TTC</h3>
        <h3>Mode de paiement: {{$commande->mode_paiement}} </h3>
        <h3>Adresse de facturation: {{$commande->adresse_facturation}} </h3>
    </div>
</body>
</html>
