<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Nouveau Cadeau</title>
</head>

<body>
    {{-- Utilisation des variables passées via 'with' --}}
    <p style="color: #0000FF; font-weight: bold;">
        Le cadeau {{ $name }} a bien été ajouté ({{ $price }}€)
    </p>
</body>

</html>