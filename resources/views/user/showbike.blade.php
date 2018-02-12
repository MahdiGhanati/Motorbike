@extends('../layouts.userapp')

@section('motorbikelist')
    <div class="box-title">Show MotorBike:</div>
    <br/>
    @foreach ($bike as $item)
        <div class="row mb-2 box-center">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <lable class="Headline-color">Model:</lable>
                        <strong class="d-inline-block mb-2 text-primary">{{ $item->model }}</strong>
                        <h3 class="mb-0">
                            <lable class="Headline-color">Company:</lable>
                            <div class="text-dark">{{ $item->company }}</div>
                        </h3>
                        <lable class="Headline-color">Color:</lable>
                        <div class="mb-1 text-muted">{{ $item->color }}</div>
                        <lable class="Headline-color">weight:</lable>
                        <p class="card-text mb-auto">{{ $item->weight }}</p>
                        <lable class="Headline-color">Price:</lable>
                        <p class="card-text mb-auto">{{ $item->price }}&nbsp;Toman</p>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="{{ url('/') . $item->image }}" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="{{ url('/') . $item->image }}" data-holder-rendered="true">
                </div>
            </div>
        </div>
    @endforeach
@endsection