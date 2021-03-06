@extends('master')

@section('content')

<script src="ckeditor/ckeditor.js"></script>
<section class="tulis-resep mb-3">
    <div class="container">
        <h1 class="text-center">Tulis Resep Baru</h1>
    <form action="{{ route('recipe.store') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="nama-makanan">Nama Makanan</label>
                <input type="text" class="form-control" name="recipe_name" id="recipe_name" placeholder="EX : Soto Banjar">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="description" id="description" rows="4" placeholder="Deskripsikan makanan yang anda bagikan resepnya"></textarea>
            </div>
            <div class="form-group">
                <label for="alat-masak">Alat Masak</label>
                <textarea class="form-control" name="tools" id="ckeditor1" rows="4" placeholder="Beritahukan alat - alat masak yang anda gunakan"></textarea>
            </div>
            <div class="form-group">
                <label for="bahan">Bahan - Bahan</label>
                <textarea class="form-control" name="ingredients" id="ckeditor2" rows="4" placeholder="Sebutkan bahan-bahan yang anda gunakan dalam memasak"></textarea>
            </div>
            <div class="form-group">
                <label for="cara-masak">Cara Masak</label>
                <textarea class="form-control" name="how_to_make" id="ckeditor3" rows="4" placeholder="Tuliskan secara detail bagaimana cara memasak makanan tersebut"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Masukan Gambar/Foto Makanan</label>
                <input type="file" class="form-control-file mb-2" id="image">
            </div>
            <script>
                CKEDITOR.replace( 'ckeditor1' );
                CKEDITOR.replace( 'ckeditor2' );
                CKEDITOR.replace( 'ckeditor3' );
            </script>
            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane pr-2"></i>Kirim Resep</button>
        </form>
    </div>
</section>

@endsection