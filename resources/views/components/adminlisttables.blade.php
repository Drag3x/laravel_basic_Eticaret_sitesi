<tr>
    <td>{{ $id }}</td>
    @if(isset($baslik))
    <td>{{ $baslik }}</td>
    @endif
    @if($kategori_ad)
        <td>{{ $kategori_ad }}</td>
        @endif
    @if($money)
        <td>{{ $money }}</td>
    @endif
    @if(isset($resim))
        <td><img src="{{ $resim }}" width="80" height="70"></td>
    @endif
    @if(isset($tarih))
        <td>{{ $tarih }}</td>
    @endif

    <td>
        <a href="{{ $routessil }}" class="btn btn-danger">Sil</a>
        <a href="{{ $routesupdate }}" class="btn btn-info">Düzenle</a>
    </td>
</tr>