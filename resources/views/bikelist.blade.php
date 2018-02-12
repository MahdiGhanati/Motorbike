@extends('layouts.app')

@section('motorbikelist')
    <form method="POST" action="filterbike" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="color" class="col-sm-4 col-form-label text-md-right">color :</label>

            <div class="col-md-2">
                <input id="color" type="text" class="form-control" name="color" value="" required autofocus>
            </div>
            <button type="submit" class="btn btn-primary">
                Filter Motorbike by color
            </button>
            <div class="col-sm-4">
                <a class="btn btn-danger" href="list">Clear Filter</a>
            </div>

        </div>
    </form>
    <br/>
    <div class="table-responsive" id="table-responsive">
    <table class="table table-striped table-hover table-condensed">
        <thead>
        <tr>
            <th><strong><i class="sort" >@sortablelink('id')</i></strong></th>
            <th><strong><i class="sort" >@sortablelink('model')</i></strong></th>
            <th><strong><i class="sort" >@sortablelink('company')</i></strong></th>
            <th><strong><i class="sort" >@sortablelink('color')</i></strong></th>
            <th><strong><i class="sort" >@sortablelink('weight')</i></strong></th>
            <th><strong><i class="sort" >@sortablelink('price')</i></strong></th>
            <th><strong><i class="sort" >image</i></strong></th>
        </tr>
        </thead>
                <tbody>
    @if($bikes->count())
    @foreach ($bikes as $bike)
                <tr>
                    <th>{{ $bike->id }}</th>
                    <th>{{ $bike->model }}</th>
                    <th>{{ $bike->company }}</th>
                    <th>{{ $bike->color }}</th>
                    <th>{{ $bike->weight }}</th>
                    <th>{{ $bike->price }}</th>
                    <th><img src="{{ url('/') . $bike->image }}" style="width: 50px;height: 50px;"></th>
                </tr>
    @endforeach
    @endif
                </tbody>
    </table>
    </div>
    {!! $bikes->appends(\Request::except('page'))->render() !!}
@endsection