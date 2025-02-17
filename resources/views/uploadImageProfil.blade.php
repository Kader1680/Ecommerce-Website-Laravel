
@extends("layouts.master")
@section("content")


<div style="margin-top: 15rem" class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Upload Profile Picture</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="/profil/edit-image/{{$idAuth}}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Select Image</label>
                    <input type="file" name="pics" class="form-control @error('image') is-invalid @enderror" id="imageInput" accept="image/*" onchange="previewImage(event)">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <img id="preview" src="#" class="img-thumbnail d-none" style="max-width: 200px;">
                </div>

                <button type="submit" class="btn btn-success">Upload</button>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        let input = event.target;
        let preview = document.getElementById('preview');
        
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection