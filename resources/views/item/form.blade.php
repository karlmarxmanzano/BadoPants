<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Item Name</label>

    <div class="col-md-6">
        <input type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{ old('item_name') ?? $item->item_name ?? '' }}" autocomplete="item_name" autofocus>

        @error('item_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Item Description</label>

    <div class="col-md-6">
        <input type="text" class="form-control @error('item_description') is-invalid @enderror" name="item_description" value="{{ old('item_description') ?? $item->item_description ?? '' }}" autocomplete="item_description" autofocus>

        @error('item_description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Item Cost</label>

    <div class="col-md-6">
        <input type="number" class="form-control @error('cost') is-invalid @enderror" name="cost" value="{{ old('cost') ?? $item->cost ?? '' }}" autocomplete="cost" autofocus>

        @error('cost')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

@foreach($categories as $category)
    <div class="form-group row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="categories[]" value="{{ $category->id }}">
                <label class="form-check-label" for="category">{{ $category->category_name }}</label>
              </div>
        </div>
    </div>
@endforeach

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>