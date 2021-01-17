@extends('template.base')

@section('content')

<table>
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Harga</th>
		<th>Berat</th>
	</thead>
	<tbody>
		@foreach($list as $item)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td> {{$produk->nama}} </td>
                <td>{{$produk->harga}}</td>
                <td> {{$produk->berat}} </td>
            </tr>
            @endforeach
    </tbody>
</table>
{{$list->links()}}
@endsection