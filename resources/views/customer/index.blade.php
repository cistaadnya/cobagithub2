<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12">
                <!--Notifikasi menggunakan flash session data-->
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-error">
                    {{session('error')}}
                </div>
                @endif

                <div class="text-center" style="margin-bottom: 30px">
                    <h2>
                   UTS Pemrograman Web 2
                    </h2>
                </div>

                <div class="card border-0 shadow rounded">
                    <div class="card body p-3">
                        <a href="{{ route('customer.create') }}" class="btn btn-md btn-success mb-3 float-right"
                            style="width: fit-content;">New Data Customer</a>
                        <table class="table table-bordered mt-1">
                            <thead class="text-center">
                                <tr class="bg-light">
                                    <th scope="col">ID Customer</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No. Telp</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id_customer }}</td>
                                    <td>{{ $customer->nama }}</td>
                                    <td>{{ $customer->alamat }}</td>
                                    <td>{{ $customer->telp }}</td>
                                    <td>{{ $customer->jenis_kelamin}}</td>
                                    <td>{{ $customer->tgl_lahir }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->username }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('customer.destroy', $customer->id_customer) }}"
                                            method="POST">
                                            <a href="{{ route('customer.edit', $customer->id_customer) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-muted" colspan="4">Data tidak tersedia. Silakan coba kembali! </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
