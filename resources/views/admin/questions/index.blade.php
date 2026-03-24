@extends('admin.layouts.main')
@section('content')
<div class="page-content app-content content ">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Manage Questions & Answers</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>User</th>
                            <th>Question</th>
                            <th>Related Post</th>
                            <th>Replies</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($questions as $q)
                        <tr>
                            <td><strong>{{ $q->user_name }}</strong></td>
                            <td style="max-width: 300px;">
                                <span class="text-wrap">{{ $q->content }}</span>
                            </td>
                            <td>
                                <a href="{{ route('admin.posts.show', $q->post->id ?? null) }}" class="text-primary small">
                                    {{ Str::limit($q->post->title ?? 'Post Deleted', 40) }}
                                </a>
                            </td>
                            <td>
                                {{-- Click handle karne ke liye humne 'open-replies' class add ki hai --}}
                                <button type="button" class="btn btn-sm btn-info text-white open-replies" 
                                        data-id="{{ $q->id }}">
                                    {{ $q->replies->count() }} Replies
                                </button>
                            </td>
                            <td>{{ $q->created_at->format('d M, Y') }}</td>
                            <td>
                                <form action="{{ route(request()->segment(1).'.questions.destroy', $q->id) }}" method="POST" onsubmit="return confirm('Delete this question?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="6" class="text-center p-4">No questions found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-end">
                {{ $questions->links() }}
            </div>
        </div>
    </div>
</div>

{{-- MODALS SECTION --}}
@foreach($questions as $q)
<div class="modal fade" id="repliesModal{{ $q->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow">
            
            {{-- Simple Header --}}
            <div class="modal-header bg-white py-2">
                <h6 class="modal-title text-dark fw-bold">
                    <i data-feather="message-circle" class="text-primary me-1" style="width: 16px;"></i> Discussion Thread
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-0">
                {{-- Question Area --}}
                <div class="px-3 py-3 border-bottom bg-light">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold text-dark">{{ $q->user_name }}</span>
                        <small class="text-muted small">{{ $q->created_at->format('d M, Y') }}</small>
                    </div>
                    <p class="mt-1 mb-0 text-dark fw-bold" style="font-size: 1rem;">{{ $q->content }}</p>
                </div>

                {{-- Replies Area --}}
                <div class="px-3 pt-3">
                    <h6 class="text-uppercase text-muted small fw-bold mb-3">Replies ({{ $q->replies->count() }})</h6>
                    
                    <div class="replies-list" style="max-height: 350px; overflow-y: auto;">
                        @forelse($q->replies as $reply)
                            <div class="d-flex border-bottom pb-2 mb-2">
                                <div class="flex-shrink-0 pt-1">
                                    <div class="bg-soft-danger text-danger rounded text-center fw-bold" style="width: 32px; height: 32px; line-height: 32px; font-size: 12px; background: #fff1f0;">
                                        {{ strtoupper(substr($reply->user_name, 0, 1)) }}
                                    </div>
                                </div>
                                <div class="ms-2 w-100">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-bold text-dark small">{{ $reply->user_name }}</span>
                                        <small class="text-muted" style="font-size: 11px;">{{ $reply->created_at->diffForHumans() }}</small>
                                    </div>
                                    <p class="mb-1 text-muted small" style="line-height: 1.4;">{{ $reply->content }}</p>
                                    
                                    <div class="text-start">
                                        <form action="{{ route(request()->segment(1).'.questions.destroy', $reply->id) }}" method="POST" class="d-inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn p-0 text-danger" style="font-size: 11px; text-decoration: underline;" onclick="return confirm('Delete this reply?')">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center text-muted py-4 small">No replies yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="modal-footer border-top-0 py-1">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<style>
    /* Thin Scrollbar for Clean Look */
    .replies-list::-webkit-scrollbar { width: 5px; }
    .replies-list::-webkit-scrollbar-thumb { background: #e0e0e0; border-radius: 10px; }
    .replies-list::-webkit-scrollbar-track { background: transparent; }
</style>
{{-- Is block ko apne @endsection se upar paste karein --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    $('.open-replies').on('click', function() {
        var id = $(this).data('id');
        var modalElement = document.getElementById('repliesModal' + id);
        
        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            var myModal = new bootstrap.Modal(modalElement);
            myModal.show();
        } 
        else if (typeof $().modal === 'function') {
            $('#repliesModal' + id).modal('show');
        } 
        else {
            alert("Modal library not loading, check console.");
            console.error("Bootstrap JS missing!");
        }
    });
});
</script>

@endsection