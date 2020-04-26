@extends('layouts.default')

@section('content')

<section class="uk-section uk-section-small uk-section-default uk-padding-remove-bottom">
    <div class="uk-container uk-container-expand uk-margin-large-bottom">
        <ul class="uk-subnav uk-subnav-pill">
            <li class="uk-active" data-uk-filter-control><a href="#">Show All ({{ $recipes->count() }})</a></li>
            @foreach ($categories as $category)
                @if ($category->recipes->isNotEmpty())
                    <li data-uk-filter-control=".{{ $category->title }}">
                        <a href="#">{{ $category->title }} ({{ $category->recipes->count() }})</a>      
                    </li>
                @endif
            @endforeach
        </ul>
        <div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l  uk-child-width-1-5@xl uk-grid-match js-filter" data-uk-grid="masonry: true" data-uk-sortable="handle: .drag-icon">
    
            @foreach ($recipes as $recipe)

                <a href="#" class="uk-link-toggle {{ $recipe->categories->pluck('title')->join(' ') }}" data-tags="{{ $recipe->categories->pluck('title')->join(' ') }}">
                    <div class="uk-card uk-card-small uk-card-default">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
                                <div class="uk-width-expand">
                                    <span class="cat-txt">{{ $recipe->categories->pluck('title')->join(' / ') }}</span>
                                </div>
                                <div class="uk-width-auto uk-text-right uk-text-muted">
                                    <span data-uk-icon="icon:clock; ratio: 0.8"></span> {{ $recipe->cooking_time }} min.
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-media">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img class="lazy" data-src="https://picsum.photos/400/300/?random={{ $recipe->image }}" data-width="600" data-height="470" data-uk-img alt="" src="img/transp.gif">
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">{{ $recipe->title }}</h6>
                            <p class="uk-text-small uk-text-muted">{{ $recipe->description }}</p>
                        </div>
                        <div class="uk-card-footer">
                            <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
                                <div class="uk-width-auto">
                                    <small>{{ $recipe->calories }} kcal</small>
                                </div>
                                <div class="uk-width-auto uk-text-right">
                                    <span class="uk-icon" data-uk-icon="icon:star; ratio: 0.8"></span> 
                                    <span class="uk-icon" data-uk-icon="icon:star; ratio: 0.8"></span> 
                                    <span class="uk-icon" data-uk-icon="icon:star; ratio: 0.8"></span> 
                                    <span class="uk-icon" data-uk-icon="icon:star; ratio: 0.8"></span> 
                                    <span class="uk-icon" data-uk-icon="icon:star; ratio: 0.8"></span> 
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            @endforeach

        </div>
	</div>
</section>

@endsection
