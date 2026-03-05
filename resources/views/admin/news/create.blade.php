@extends('admin.layouts.main')

@section('content')
<div class="page-content app-content content ">
    <div class="container-fluid">
        <h4 class="mb-4">Create New Post</h4>

        {{-- Global Error Alert (Optional) --}}
        @if ($errors->any())
            <div class="alert alert-danger">Please fix the errors below.</div>
        @endif

        <form action="{{ route(auth()->user()->role == 1 ? 'admin.posts.store' : 'author.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Post Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" 
                                       value="{{ old('title') }}" placeholder="Enter title here">
                                @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea name="content" id="editor" rows="10" 
                                          class="form-control @error('content') is-invalid @enderror" 
                                          placeholder="Write your news content...">{{ old('content') }}</textarea>
                                @error('content') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Additional Images (Multiple)</label>
                                        <input type="file" name="images[]" class="form-control @error('images*') is-invalid @enderror" accept="image/*" multiple>
                                        @error('images*') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Thumbnail Image</label>
                                        <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" accept="image/*">
                                        @error('thumbnail') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Video URL (YouTube/Vimeo)</label>
                                        <input type="url" name="video_url" class="form-control @error('video_url') is-invalid @enderror" 
                                               value="{{ old('video_url') }}" placeholder="https://youtube.com/watch?v=...">
                                        @error('video_url') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Organization</h5>
                            
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">-- Select Category --</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Subcategory</label>
                                <select name="subcategory_id" id="subcategory_id" class="form-control @error('subcategory_id') is-invalid @enderror">
                                    <option value="">-- Select Category First --</option>
                                    {{-- Hum yahan purani subcategory populate nahi kar rahe kyunki wo AJAX se aati hai, user ko category phir se select karni hogi ya hume AJAX load par handle karna hoga --}}
                                </select>
                                @error('subcategory_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <input type="text" name="tags" class="form-control @error('tags') is-invalid @enderror" 
                                       value="{{ old('tags') }}" placeholder="Politics, Sports, etc.">
                                @error('tags') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Publish Settings</h5>
                            
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="status" value="1" {{ old('status', '1') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label">Published / Active</label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="is_live" value="1" {{ old('is_live') ? 'checked' : '' }}>
                                <label class="form-check-label text-success">
                                    Mark as Live 🔴
                                </label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="is_trending" value="1" {{ old('is_trending') ? 'checked' : '' }}>
                                <label class="form-check-label text-danger">Mark as Trending 🔥</label>
                            </div>

                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="is_latest" value="1" {{ old('is_latest', '1') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label text-primary">Mark as Latest</label>
                            </div>

                            {{-- Naye Status: Popular aur Premium --}}
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="is_popular" value="1" {{ old('is_popular') ? 'checked' : '' }}>
                                <label class="form-check-label text-warning">Mark as Popular ⭐</label>
                            </div>

                            <div class="form-check form-switch mb-4">
                                <input class="form-check-input" type="checkbox" name="is_premium" value="1" {{ old('is_premium') ? 'checked' : '' }}>
                                <label class="form-check-label text-info">Mark as Premium 💎</label>
                            </div>

                            <button type="submit" class="btn btn-success w-100 py-2">
                                <i class="fas fa-paper-plane"></i> Publish Post
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#category_id').on('change', function() {
        var categoryId = $(this).val();
        if(categoryId) {
            $.ajax({
                url: '/get-subcategories/' + categoryId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('#subcategory_id').empty();
                    $('#subcategory_id').append('<option value="">-- Select Subcategory --</option>');
                    $.each(data, function(key, value) {
                        $('#subcategory_id').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                    });
                }
            });
        } else {
            $('#subcategory_id').empty();
        }
    });
});
$(document).ready(function() {
    // 1. Ek function banaya jo AJAX load karega
    function loadSubcategories(categoryId, selectedSubId = null) {
        if(categoryId) {
            $.ajax({
                url: '/get-subcategories/' + categoryId,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#subcategory_id').empty();
                    $('#subcategory_id').append('<option value="">-- Select Subcategory --</option>');
                    $.each(data, function(key, value) {
                        // Check karein agar ye wahi ID hai jo pehle select ki thi
                        var selected = (selectedSubId == value.id) ? 'selected' : '';
                        $('#subcategory_id').append('<option value="'+ value.id +'" '+ selected +'>'+ value.name +'</option>');
                    });
                }
            });
        } else {
            $('#subcategory_id').empty();
            $('#subcategory_id').append('<option value="">-- Select Category First --</option>');
        }
    }

    // 2. Jab Category manually change ho
    $('#category_id').on('change', function() {
        var categoryId = $(this).val();
        loadSubcategories(categoryId);
    });

    // 3. PAGE LOAD PAR: Check karein agar Category pehle se selected hai (Validation back ke baad)
    var initialCatId = $('#category_id').val();
    var oldSubCatId = "{{ old('subcategory_id') }}"; // Laravel ka old data yahan capture kiya

    if(initialCatId) {
        loadSubcategories(initialCatId, oldSubCatId);
    }
});

</script>
@endsection