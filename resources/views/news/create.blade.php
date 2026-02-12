@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Write Latest News</h3>
            </div>
            <div class="card-body">
                <form action="/posts" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">News Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter headline..." required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Author Name</label>
                        <input type="text" name="author" class="form-control" placeholder="Your name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" class="form-control" rows="8" placeholder="Start writing news..." required></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg">Publish News</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection