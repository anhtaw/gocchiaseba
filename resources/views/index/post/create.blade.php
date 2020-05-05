@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form method="post" action="{{ route('post.store') }}">
                        <div class="form-group">
                            @csrf
                            <label class="label">Post Title: </label>
                            <input type=text name=title class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Post Body: </label>
                            <textarea name=body rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label">Post Body1: </label>
                            <textarea name=body1 rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label">Post Body1: </label>
                            <textarea name=body2 rows="10" cols="30" class="form-control" required></textarea>
                        </div>
                            <div class="col-md-8 float-md-left">
                                <div class="form-group">
                                    <strong>Ảnh :</strong>
                                    <input type="file" id="inputFile" cept="image/*" onchange="preview_image(event) "  class="form-control box-image" name="image">
                                </div>
                                <div class="form-group">
                                    <strong>Ảnh2 :</strong>
                                    <input type="file" id="inputFile1" cept="image/*" onchange="preview_image1(event1) "  class="form-control box-image" name="img">
                                </div>

                                {{-- <img id="output_image" alt="" class="img-circle" src="#" style="width: 300px; height: 300px"/>

                                <img id="output_image1" alt="" class="img-circle" src="#" style="width: 300px; height: 300px"/> --}}
                        </div>


                        <div class="form-group">
                            <input type=submit class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--
<script type='text/javascript'>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<script type='text/javascript'>
    function preview_image1(event1) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output_image1');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script> --}}
