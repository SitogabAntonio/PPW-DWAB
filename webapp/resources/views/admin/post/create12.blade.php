<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>DWAB | Create</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Tambah Post
            </div>
            <div class="card-body">
                <form action="{{ url('admin/post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="title"><label for="exampleInputEmail1" class="form-label">Title</label></div>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="div">Kategori</div>

                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="custom-container">
                            <input type="file" id="file" name="uploadedFile">
                            <label for="file" class="custom-element">Upload File</label>
                        </div>
                    </form>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror"
                            name="description"></textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="1" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Publish
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Draft
                        </label>
                    </div>

                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
