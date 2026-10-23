<h1>Kasutajate nimekiri</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nimi</th>
            <th>E-post</th>
            <th>Tegevused</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
               <td>
    <a href="{{ route('users.show', $user) }}">Vaata</a>
    <a href="{{ route('users.edit', $user) }}">Muuda></a>
    <form action="{{ route('users.destroy', $user) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Kustuta</button>
</form>
</td>
            </tr>
        @endforeach
    </tbody>
</table>