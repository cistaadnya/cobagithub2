<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Data Customer</title>
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
                <div class="card border-0 shadow rounded">
                    <div class="card_header p-3 fs-5 bg-light">Form Data Customer</div>
                    <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="POST">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                    value="{{ old('nama') }}" required>

                                <!-- error message untuk nama -->
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{ old('alamat') }}" required>

                                <!-- error message untuk alamat -->
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="telp">Telp</label>
                                <input type="text" class="form-control @error('telp') is-invalid @enderror" name="telp"
                                    value="{{ old('telp') }}" required>

                                <!-- error message untuk telp -->
                                @error('telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" required>

                                <!-- error message untuk jenis_kelamin -->
                                @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group  mt-2">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
                                    name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>

                                <!-- error message untuk tgl_lahir -->
                                @error('tgl_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group  mt-2">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required>

                                <!-- error message untuk email -->
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="username">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}" required>

                                <!-- error message untuk username -->
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3 float-end">
                                <button type="submit" class="btn btn-md btn-primary">Save</button>
                                <a href="{{ route('customer.index') }}" class="btn btn-md btn-secondary">Back</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
