<h1>Users Data</h1>
<div class="container">
    <div>
        <table>
          <tr><th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th></tr>
            @foreach($users as $user)
            <tr>
               <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->address}}</td>

            </tr>
            @endforeach
        </table>
    </div>
</div>