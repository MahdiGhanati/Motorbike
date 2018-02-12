@extends('layouts.app')

@section('addmotorbike')
    <form method="POST" action="addbike" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="model" class="col-sm-4 col-form-label text-md-right">Model</label>

            <div class="col-md-6">
                <input id="model" type="text" class="form-control" name="model" value="" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="company" class="col-md-4 col-form-label text-md-right">Company</label>

            <div class="col-md-6">
                <input id="company" type="text" class="form-control" name="company" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="color" class="col-md-4 col-form-label text-md-right">Color</label>

            <div class="col-md-6">
                <input id="color" type="text" class="form-control" name="color" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="weight" class="col-md-4 col-form-label text-md-right">Weight</label>

            <div class="col-md-6">
                <input id="weight" type="text" class="form-control" name="weight" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

            <div class="col-md-6">
                <input id="price" type="text" class="form-control" name="price" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="image" class="col-md-4 col-form-label text-md-right">Image of Motorbike</label>

            <div class="col-md-6">
                <input id="image" type="file" class="" name="image">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Add Motorbike
                </button>
            </div>
        </div>
    </form>
@endsection