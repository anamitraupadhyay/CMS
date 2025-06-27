<h1>WordPress Users</h1>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Registered At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->ID }}</td>
                <td>{{ $user->user_login }}</td>
                <td>{{ $user->user_email }}</td>
                <td>{{ $user->user_registered }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
