@extends('admin.layouts.main')

@section('content')
<div class="page-content app-content content ">
    <div class="container-fluid">
        <h4 class="mb-4">Edit Post: {{ $post->title }}</h4>
        @php 
            $role = auth()->user()->role == 1 ? 'admin' : 'author'; 
        @endphp
        <form action="{{ route($role . '.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Update ke liye humesha niche wali line zaroor likhein --}}
            @method('POST')
            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Post Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea name="content" id="editor" rows="10" class="form-control">{{ old('content', $post->content) }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Update Thumbnail</label>
                                        <input type="file" name="thumbnail" class="form-control" accept="image/*">
                                        @if($post->thumbnail)
                                            <img src="{{ asset('storage/' . $post->thumbnail) }}" class="mt-2 rounded" width="100">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Add More Images</label>
                                        <input type="file" name="images[]" class="form-control" accept="image/*" multiple>
                                        <div class="d-flex flex-wrap mt-2">
                                            @if($post->images)
                                                @foreach($post->images as $img)
                                                    <img src="{{ asset('storage/' . $img) }}" class="me-1 mb-1 rounded" width="50" height="50">
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Video URL</label>
                                        <input type="url" id="video_url" name="video_url" class="form-control" value="{{ old('video_url', $post->video_url) }}" placeholder="Paste YouTube or MP4 link here">
                                        
                                        <div id="video_preview" class="mt-3 shadow-sm rounded overflow-hidden" style="background: #f8f9fa;">
                                            @if($post->video_url)
                                                @php
                                                    $url = $post->video_url;
                                                    $video_id = "";
                                                    if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/', $url, $match)) {
                                                        $video_id = $match[1];
                                                    }
                                                @endphp
                                                
                                                @if($video_id)
                                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $video_id }}" frameborder="0" allowfullscreen></iframe>
                                                @else
                                                    <video width="100%" height="315" controls><source src="{{ $url }}" type="video/mp4"></video>
                                                @endif
                                            @endif
                                        </div>
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
                                <select name="category_id" id="category_id" class="form-control" required>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}" {{ $post->category_id == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Subcategory</label>
                                <select name="subcategory_id" id="subcategory_id" class="form-control">
                                    <option value="">-- Select Subcategory --</option>
                                    @foreach($subcategories as $sub)
                                        <option value="{{ $sub->id }}" {{ $post->subcategory_id == $sub->id ? 'selected' : '' }}>
                                            {{ $sub->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <input type="text" name="tags" class="form-control" value="{{ old('tags', $post->tags) }}">
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Publish Settings</h5>
                            
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="status" value="1" {{ $post->status == 'published' || $post->status == '1' ? 'checked' : '' }}>
                                <label class="form-check-label">Published</label>
                            </div>
                            <div class="form-check form-switch mb-4">
                                <input class="form-check-input" type="checkbox" name="is_live" value="1" {{ $post->is_live ? 'checked' : '' }}>
                                <label class="form-check-label text-success">Live 🔴</label>
                            </div>
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="is_trending" value="1" {{ $post->is_trending ? 'checked' : '' }}>
                                <label class="form-check-label text-danger">Trending 🔥</label>
                            </div>

                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="is_latest" value="1" {{ $post->is_latest ? 'checked' : '' }}>
                                <label class="form-check-label text-primary">Latest</label>
                            </div>

                            {{-- Naye Status: Popular aur Premium --}}
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="is_popular" value="1" {{ $post->is_popular ? 'checked' : '' }}>
                                <label class="form-check-label text-warning">Popular ⭐</label>
                            </div>

                            <div class="form-check form-switch mb-4">
                                <input class="form-check-input" type="checkbox" name="is_premium" value="1" {{ $post->is_premium ? 'checked' : '' }}>
                                <label class="form-check-label text-info">Premium 💎</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2">
                                <i class="fas fa-save"></i> Update Post
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
        }
    });
});
</script>
@endsection