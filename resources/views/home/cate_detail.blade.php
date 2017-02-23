@extends('home.base.base')
@section('title')
	@foreach($newCates as $item)
        {{ $item->category->cateGroup->name }}
    @endforeach
@endsection

@section('content')
<div class="td-pb-span8 td-main-content" role=main>
    <div class="td-ss-main-content td_block_template_1">

        @foreach($newCates as $item)
        <div class="td_module_10 td_module_wrap td-animation-stack">
            <div class=td-module-thumb>
                <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html" title="{{ $item->title }}">
                    <img width=218 height=150 class="entry-thumb" src="upload/news/{{ $item->image }}" sizes="(max-width: 218px) 100vw, 218px" alt="" title="{{ $item->title }}"/>
                </a>
            </div>
            <div class=item-details>
                <h3 class="entry-title td-module-title">
                    <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html" title="{{ $item->title }}">{{ $item->title }}</a>
                </h3>
                <div class=td-module-meta-info>
                    <a href="{{ $item->category->alias }}"
                       class=td-post-category>{{ $item->category->name }}</a>
                    <div class=entry-review-stars>
                        <i class=td-icon-star></i>
                        <i class=td-icon-star></i>
                        <i class=td-icon-star></i>
                        <i class=td-icon-star-half></i>
                        <i class=td-icon-star-empty></i>
                    </div>
                    <div class=td-module-comments>
                        <a href="{{ $item->category->alias }}/{{ $item->id }}/{{ $item->alias }}.html">0</a>
                    </div>
                </div>
                <div class=td-excerpt>
                    {{ $item->description }}
                </div>
            </div>
        </div>
        @endforeach
        
        {!! $newCates->render() !!}
    </div>
</div>
@endsection