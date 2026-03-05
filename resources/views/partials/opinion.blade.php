<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Merriweather', serif;

}

.divider {
    border-right: 1px solid #ddd;
}

.opinion-img {
    width: 100%;
    margin-bottom: 15px;
}

.see-more {
    text-align: center;
    margin-top: 30px;
    font-weight: 700;
    cursor: pointer;
}
</style>
<div class="container my-5">
<div class="opinion-wrapper">

<div class="text-center mb-4">

<h2 class="text-center fw-bold" style="color:#B00020;">The Hindu Opinion</h2>

<div class="d-flex justify-content-center align-items-center gap-2 mt-2">

<div class="premium-img-container">
<a href="/">
<img src="images/h-circle-yellow-new.svg" alt="Premium Badge">
</a>
</div>

<span class="fw-bold small premium-text">
The PREMIUM
</span>

</div>
</div>

<div class="row">

@foreach($allCategoriesData->where('category_id', 5) as $post)

<div class="col-lg-3 divider">

<a href="{{ url('post/'.$post->slug) }}">
<img src="{{ asset('storage/'.$post->thumbnail) }}" class="opinion-img">
</a>

<div class="fs-5">
<a href="{{ url('post/'.$post->slug) }}" class="txt">
{{ $post->title }}
</a>
</div>

<span style="font-size:10px;">
<a href="/" class="smll">{{ $post->user->name ?? '' }}</a>
</span>

</div>

@endforeach

</div>

<div class="see-more">
SEE MORE →
</div>

</div>
</div>