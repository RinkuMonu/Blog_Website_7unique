@extends('admin.layouts.main')

@section('content')
<div class="page-content app-content content ">
    <div class="container-fluid">
        
        <div class="row mb-4">
            <div class="col-md-6">
                <h4 class="mb-0">All News Posts</h4>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route(auth()->user()->role == 1 ? 'admin.posts.create' : 'author.posts.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Post
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 align-middle table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Thumbnail</th>
                                <th>Title & Category</th>
                                <th>Status Indicators</th>
                                <th>Created At</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                            <tr>
                                <td style="width: 100px;">
                                    @if($post->thumbnail)
                                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="img" class="rounded" style="width: 80px; height: 50px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded text-center py-2 text-muted" style="width: 80px;">No Image</div>
                                    @endif
                                </td>
                                <td>
                                    <h6 class="mb-1 text-truncate" style="max-width: 250px;">{{ $post->title }}</h6>
                                    <small class="text-muted">
                                        <i class="fas fa-folder text-primary"></i> {{ $post->category->name ?? 'N/A' }} 
                                        @if($post->subcategory)
                                            <i class="fas fa-angle-right mx-1"></i> {{ $post->subcategory->name }}
                                        @endif
                                    </small>
                                </td>
                                <td>
                                    @if($post->status == 'published')
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-secondary">Draft</span>
                                    @endif

                                    @if($post->is_trending)
                                        <span class="badge bg-danger"><i class="fas fa-fire"></i> Trending</span>
                                    @endif

                                    @if($post->is_latest)
                                        <span class="badge bg-info text-dark">Latest</span>
                                    @endif
                                </td>
                                <td>
                                    <small>{{ $post->created_at->format('d M, Y') }}<br>
                                    <span class="text-muted">{{ $post->created_at->format('h:i A') }}</span></small>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        @php $prefix = auth()->user()->role == 1 ? 'admin' : 'author'; @endphp

                                        <a href="{{ route($prefix . '.posts.edit', $post->id) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                            edit <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route($prefix . '.posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Kya aap wakayi is post ko delete karna chahte hain?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                delete <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <img src="https://cdn-icons-png.flaticon.com/512/7486/7486744.png" width="50" class="mb-3 opacity-50"><br>
                                    <p class="text-muted">Post not found!</p>
                                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">Create Post</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection