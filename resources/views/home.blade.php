@extends('layouts/main')

@section('title', 'Home')

@section('container-fluid')


    <div id="editor">

    </div>



<script src="../assets/js/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
        } )
        .then( editor => {
            window.editor = editor;
        } )
        .catch( err => {
            console.error( err.stack );
        } );
</script>


@endsection
