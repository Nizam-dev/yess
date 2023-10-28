@extends('templateadmin.master')
@section('title','Edit Ambasador')

@section('content')
<div class="container-fluid">
    <form action="{{url('admin/ambasador/'.$data->id)}}" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control form-control-line" name="nama" required value="{{$data->nama}}">
        </div>

        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" class="form-control form-control-line" name="foto"  accept="image/*">
        </div>

        <div class="form-group">
            <label for="">Note</label>
            <input type="text" class="form-control form-control-line" name="note" required value="{{$data->note}}">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control form-control-line" name="email" required value="{{$data->email}}">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" class="form-control" required>{{$data->alamat}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Provinsi</label>
            <select name="provinsi" class="form-control">
                @foreach($prov as $p)
                    <option value="{{$p['name']}}" {{$data->provinsi == $p['name'] ? 'selected' : '' }}>{{$p['name']}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Content</label>
            <textarea id="content" name="content">{{$data->content}}</textarea>
        </div>

        <button class="btn btn-primary float-end" type="submit">Simpan</button>

    </form>


</div>
@endsection
@push('js')
<script>
    function upload_handler(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
            var file = this.files[0];

            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), {
                    title: file.name
                });
            };
        };
        input.click();
    };

    tinymce.init({
        selector: '#content',
        plugins: 'image',
        toolbar: 'undo redo | image code',
        image_title: true,
        automatic_uploads: true,
        images_upload_url: "{{url('api/imagesupload')}}",
        relative_urls : false,
        remove_script_host : false,
        convert_urls : true,
        file_picker_types: 'image',
        file_picker_callback: upload_handler,
        init_instance_callback: function (editor) {
            var freeTiny = document.querySelector('.tox .tox-notification--in');
            freeTiny.style.display = 'none';
        }
    })
</script>
@endpush