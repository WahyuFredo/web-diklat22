
<style type="text/css">
    .tanda {background-color: #cfcfcf;}
</style>
<table class="table table-striped" border="1">
    <thead>
        <tr class="tanda">
            <th>id</th>
            <th>luas</th>
            <th>nama</th>
            <th>harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $perumahan)
        <tr>
            @foreach($data as $perumahan)
            <td>{{$no++}}</td>
            <td>{{ $perumahan->luas_perumahan }}</td>
            <td>{{ $perumahan->nama_perumahan }}</td>
            <td>{{ $perumahan->harga_perumahan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>