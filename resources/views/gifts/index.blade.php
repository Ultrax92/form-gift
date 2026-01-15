<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Liste des cadeaux</title>
</head>

<body>
    <h1>Liste de souhaits</h1>
    <a href="{{ route('gifts.create') }}">Ajouter un cadeau</a>
    <hr>

    <ul>
        @foreach($gifts as $gift)
        <li>
            <strong>{{ $gift->name }}</strong> - {{ $gift->price }} €
            <br>
            <a href="{{ route('gifts.show', $gift) }}">Voir</a> |
            <a href="{{ route('gifts.edit', $gift) }}">Modifier</a>

            <form action="{{ route('gifts.destroy', $gift) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </li>
        <br>
        @endforeach
    </ul>
</body>

</html>