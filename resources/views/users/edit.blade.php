<h1>Muuda andmeid</h1>

<form method="POST" action="{{ route('users.update', $user) }}">
    @csrf
    @method('PUT')

    <label for="name">Nimi</label>
    <input
        type="text"
        id="name"
        name="name"
        value="{{ old('name', $user->name) }}"
        required
    ><label for="email">E-post</label>
<input
    type="email"
    id="email"
    name="email"
    value="{{ old('email', $user->email) }}"
    required
>
    <button type="submit">Salvesta</button>
</form>

<a href="{{ route('users.index') }}">Tagasi nimekirja</a>