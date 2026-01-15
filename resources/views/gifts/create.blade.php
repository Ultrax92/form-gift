<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ajouter un cadeau</title>
</head>

<body>
    <h1>Ajouter un nouveau cadeau</h1>

    @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('gifts.store') }}" method="POST">
        @csrf

        <label>Nom (3-50 car.) :</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Prix :</label><br>
        <input type="number" step="0.01" name="price" value="{{ old('price') }}"><br><br>

        <label>URL :</label><br>
        <input type="text" name="url" value="{{ old('url') }}"><br><br>

        <label>Détails :</label><br>
        <textarea name="details">{{ old('details') }}</textarea><br><br>

        <button type="submit">Enregistrer</button>
    </form>
</body>

</html>