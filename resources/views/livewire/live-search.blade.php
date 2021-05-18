<div>
    <div class="first-block">
        <div class="row">
            <div class="col-md-6 locker-search">
                <h1>Find a Locker</h1>

                @if (session()->has('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="input-group mb-5">
                    <input type="text" wire:model.debounce.500ms="name" class="form-control"
                        placeholder="Enter City or State" id="" aria-label="Enter City or State"
                        aria-describedby="basic-addon2" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">Search</span>
                    </div>
                </div>
            </div>
            <div wire:loading>
                Loading...
            </div>
        </div>
    </div>
    @if ($location)
        <div class="list-group mt-2">
            @foreach ($location->lockers as $locker)
                <div class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $locker['name'] }}</h5>
                        <small class="text-muted">{{ $locker['description'] }}</small>
                    </div>
                    <p class="mb-1">{{ $locker['available'] }} available</p>
                    <small class="text-muted">N{{ $locker['price'] }} for the first rent</small>
                </div>
            @endforeach
        </div>
    @endif
</div>
