<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Modifier le cadeau</title>
</head>

<body>
    <h1>Modifier : {{ $gift->name }}</h1>

    @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('gifts.update', $gift) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nom :</label><br>
        <input type="text" name="name" value="{{ old('name', $gift->name) }}"><br><br>

        <label>Prix :</label><br>
        <input type="number" step="0.01" name="price" value="{{ old('price', $gift->price) }}"><br><br>

        <label>URL :</label><br>
        <input type="text" name="url" value="{{ old('url', $gift->url) }}"><br><br>

        <label>Détails :</label><br>
        <textarea name="details">{{ old('details', $gift->details) }}</textarea><br><br>

        <button type="submit">Mettre à jour</button>
    </form>
</body>

</html>