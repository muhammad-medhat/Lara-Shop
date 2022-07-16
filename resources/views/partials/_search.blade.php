{{-- add search --}}
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ __('search') }}</h3>
    </div>
    <div class="card-body">
        <form action="{{-- route('admin.search') --}}" method="get">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="{{ __('admin.search') }}">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-flat"><i class="fas fa-search"></i></button>
                </span>
            </div>
        </form>
    </div>
    <hr>