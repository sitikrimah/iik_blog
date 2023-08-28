<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <style>
        /* Stil input */
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #3498db; /* Garis bawah input */
            font-size: 16px;
            background-color: transparent;
            transition: border-bottom 0.3s ease; /* Efek transisi saat fokus */
        }

        /* Stil input saat fokus */
        input:focus {
            outline: none;
            border-bottom: 2px solid #e74c3c; /* Warna berbeda saat fokus */
        }

        /* Stil tombol */
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            margin: 10px 0;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Hover tombol */
        button:hover {
            background-color: #2980b9;
           }
</style>
</head>
<body>
    <form action="{{$action}}" method="post" enctype="multipart/form-data">
    {{-- <form action="{{ url('team/create') }}" method="post" enctype="multipart/form-data"> --}}
        @csrf
             <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                 <div class="container-fluid p-3 ">
                    <div class="col-md-12 mt-5">
                        <form action="" method="POST">
                            @csrf
                            <div class="col-mb-3">
                                <label for="" class="form-label">NAMA PROJECT</label>
                                <input type="text" name="name" id="name" value="{{$project->name}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">DESKRIPSI</label>
                                <input type="text" name="deskripsi" id="deskripsi" value="{{$project->deskripsi}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">foto</label>
                                <input type="file" name="foto" id="foto" value="{{$project->foto}}" class="form-control" placeholder="Silahkan di isi">
                            </div>

                            <div class="pt-3 ">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>

                        </form>

                    </div>
                 </div>
                </div>
                <div class="col-2"></div>
             </div>
    </form>
</body> --}}
</html>
