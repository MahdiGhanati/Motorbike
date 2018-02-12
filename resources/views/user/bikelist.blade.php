@extends('../layouts.userapp')

@section('motorbikelist')
    <form method="POST" action="filter" enctype="multipart/form-data">
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
                <a class="btn btn-danger" href="motorlist">Clear Filter</a>
            </div>

        </div>
    </form>
    <br/>
    <div class="table-responsive" id="table-responsive">
    <table class="table table-striped table-hover table-condensed">
        <thead>
        <tr>
            <th><strong><i class="sort" >@sortablelink('model')</i></strong></th>
            <th><strong><i class="sort" >@sortablelink('color')</i></strong></th>
            <th><strong><i class="sort" >Show Motor</i></strong></th>
        </tr>
        </thead>
                <tbody>
    @if($bikes->count())
    @foreach ($bikes as $bike)
                <tr>
                    <th>{{ $bike->model }}</th>
                    <th>{{ $bike->color }}</th>
                    <th><a href="show/{{ $bike->id }}"><img src="{{ url('/eye.png')}}" style="width: 20px;height: 20px;"></a></th>
                </tr>
    @endforeach
    @endif
                </tbody>
    </table>
    </div>
    {!! $bikes->appends(\Request::except('page'))->render() !!}
@endsection