<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Détail du cadeau</title>
</head>

<body>
    <h1>{{ $gift->name }}</h1>

    <p><strong>Prix :</strong> {{ $gift->price }} €</p>

    @if($gift->url)
    <p><strong>Lien :</strong> <a href="{{ $gift->url }}" target="_blank">{{ $gift->url }}</a></p>
    @endif

    @if($gift->details)
    <p><strong>Détails :</strong> {{ $gift->details }}</p>
    @endif

    <a href="{{ route('gifts.index') }}">Retour à la liste</a>
</body>

</html>