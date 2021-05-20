<div>
    <div class="first-block">
        <div class="row">
            <div class="col-md-6 locker-search">
                <h1>Find a Locker</h1>
                <div class="input-group mb-5 input-box">
                    <input type="text" wire:model.debounce.500ms="name" class="form-control box-text"
                        placeholder="Enter City or State" id="" aria-label="Enter City or State"
                        aria-describedby="basic-addon2" autocomplete="off">
                    <div class="box-btn">
                        <div>
                            <b> Find Locker </b>
                        </div>
                        <div class="text-btn">
                            <span>One Naira For Rent</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row second-box">
        <div class="col-md-6 available">
            <p> &nbsp; &nbsp; &nbsp; &nbsp; {{ $location ? $location->lockers->count() : '0' }} Open
                Locker{{ $location ? ($location->lockers->count() > 1 ? 's' : '') : '' }} Available</p>
        </div>
        <div class="col-md-6">
            <div class="row sorted">
                <div class="col-md-6 sorted-by">
                    <p> Sort By</p>
                </div>
                <div class="col-md-5">
                    <select class="form-control form-control-sm">
                        <option value="">Closest</option>
                        <option value="">Lowest Price</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 mt-3 left-box">
            <img src="{{ asset('images/person1.jpeg') }}" alt="Locker open by a person" width="230px" height="210px">
            <p class="box-stars">
                <a href="">22A Adeola Odeku Street, VI,Lagos.</a><br>
                <span class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span> <br>
                <a href="">0.3 Miles Away</a>
            </p>
        </div><br>
        <div class="col-md-9  mt-3">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-control form-control-sm">
                        <option value="">Featured</option>
                        <option value="">Small</option>
                        <option value="">Medium</option>
                        <option value="">Large</option>
                    </select>
                </div>
                <div class="col-md-6 view-guide">
                    <p><a href="">View the guide size</a></p>
                </div>
            </div>
            <div wire:loading class="load">
                Loading...
                <i class="fa fa-spinner"></i>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
            @endif
            @if ($location)
                <div class="list-group">
                    @foreach ($location->lockers as $locker)
                        <div class="list-group-item list-group-item-action list-result">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $locker['name'] }}</h5>
                                <p class="text-muted text-description">{{ $locker['description'] }}</p>
                                <p class="text-muted">N{{ $locker['price'] }} for the first rent </p>
                                <p class="mb-1">{{ $locker['available'] }} available</p>
                                <p>
                                    <a href="{{ route('success') }}" target="_blank"
                                        class="btn btn-success btn-rent">Rent Now</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="btw-view-location">
                        <p><a href="#"><span>+</span> View all lockers at this location</a></p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
