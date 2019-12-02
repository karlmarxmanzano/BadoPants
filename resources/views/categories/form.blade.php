<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Category Name</label>

    <div class="col-md-6">
        <input id="category_name" type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{ old('category_name') ?? $category->category_name ?? '' }}" autocomplete="category_name" autofocus>

        @error('category_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>