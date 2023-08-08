<div>
    <table class="table">
        <thead>
            <tr>
                <th>nomor</th>
                <th>nama</th>
                <th>email</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><button class="btn btn-success">hapus</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
