@extends('admin.layouts.main')

@section('content')
<div class="page-content app-content content ">
    <div class="container-fluid">
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row">
            <div class="col-12">
                <h4 class="mb-4">Subcategory Management</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Add New Subcategory</h5>
                        <form action="{{ route('admin.subcategories.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Parent Category</label>
                                <select name="category_id" class="form-control" required>
                                    <option value="">-- Select Category --</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subcategory Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter subcategory name" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Save Subcategory</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Parent Category</th>
                                        <th>Slug</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($subcategories as $sub)
                                    <tr>
                                        <td class="fw-bold">{{ $sub->name }}</td>
                                        <td><span class="badge bg-soft-info text-info">{{ $sub->category->name ?? 'N/A' }}</span></td>
                                        <td><code>{{ $sub->slug }}</code></td>
                                        <td class="text-center">
                                            <form action="{{ route('admin.subcategories.destroy', $sub->id) }}" method="POST" onsubmit="return confirm('Pakka delete karna hai?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4 text-muted">No subcategories found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection