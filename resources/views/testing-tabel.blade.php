<table border="1">
    <thead style="background-color: rgb(0, 238, 255)">
        <tr>
            <td>Nama</td>
            <td>Jenis</td>
            <td>Kondisi</td>
            <td>Kuantitas</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->condition }}</td>
                <td>{{ $item->quantity }}</td>
            </tr>
        @endforeach
    </tbody>
</table>