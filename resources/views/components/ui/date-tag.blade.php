@php use Carbon\Carbon; @endphp
<div class="tags has-addons">
    <span class="tag">{{ $title }}</span>
    <span class="tag is-primary has-text-weight-bold">
        {{ Carbon::parse($slot)->diffForHumans() }}
    </span>
</div>
