
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<
    </head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h2 class="text-center text-primary">Data Product Diskon</h3>
	</center>

	<table class="table table-bordered table-striped">
		<thead>

            <tr>
                <th>ID</th>
                <th>Nama Supplier</th>
                <th>Product</th>
                <th>Kategori</th>
                <th>Merk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Terakhir diubah tanggal</th>
             
            </tr>
		</thead>
		<tbody>
            @foreach ($dataDiskon as $dataDiskon)
            <tr>
                <td>{{ $dataDiskon->id}}</td>
                <td>{{ $dataDiskon->suppliers->nama}}</td>
                <td>{{ $dataDiskon->product}}</td>
                <td>{{ $dataDiskon->kategori}}</td>
                <td>{{ $dataDiskon->merk}}</td>
                <td>{{ $dataDiskon->stok}}</td>
                <td>{{ $dataDiskon->harga}}</td>
                <td>{{ $dataDiskon->updated_at}}</td>
                
            </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>