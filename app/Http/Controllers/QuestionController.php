<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
class QuestionController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|max:100',
            'content'   => 'required|max:1000',
            'post_id'   => 'required|exists:posts,id',
            'parent_id' => 'nullable|exists:questions,id' // Reply ke liye zaroori hai
        ]);

        Question::create([
            'post_id'   => $request->post_id,
            'parent_id' => $request->parent_id,
            'user_name' => $request->user_name,
            'content'   => $request->content,
        ]);

        $message = $request->parent_id ? 'Reply posted!' : 'Question posted!';
        return back()->with('success', $message);
    }

    public function adminIndex()
    {
        $questions = Question::with(['post', 'replies'])
                    ->whereNull('parent_id')
                    ->latest()
                    ->paginate(10);

        return view('admin.questions.index', compact('questions'));
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete(); 
        return back()->with('success', 'Deleted successfully!');
    }
}
