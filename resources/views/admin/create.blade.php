<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Desa Limapoccoe</title>
    {{-- link bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- link google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- link trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div class="container create-new-post col-7 mt-5 px-5 py-5 mb-5">
        <h5 class="text-center mb-5" style="color: #365E32">Tambahkan Berita Baru</h5>
        <form action="/admin" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" autofocus required
                    value="{{ old('title') }}">
            </div>
            <div class="mb-5">
                <label for="author" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="author" name="author" autofocus required
                    value="{{ old('author') }}">
            </div>
            <div class="mb-5">
                <label for="image" class="form-label">Gambar</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input type="file" class="form-control" id="image" name="image" autofocus required
                    value="{{ old('image') }}" onchange="previewImage()">
            </div>
            <div class="mb-5">
                <label for="img_description" class="form-label">Deskripsi Gambar</label>
                <input type="text" class="form-control" id="img_description" name="img_description" autofocus required
                    value="{{ old('img_description') }}">
            </div>
            <div class="mb-5">
                <label for="body" class="form-label">Isi</label>
                <input id="body" type="hidden" name="body" autofocus required value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn" style="background-color: #365E32; color: #E7D37F">Submit</button>
        </form>
    </div>

    {{-- script bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- script font awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

    {{-- script sweetalert --}}
    @include('sweetalert::alert')

    <script>
        function previewImage() {
            const image = document.querySelector('#image')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>
