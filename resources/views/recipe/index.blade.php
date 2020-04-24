@extends('layouts.default')

@section('content')

<section class="uk-section uk-section-small uk-section-default uk-padding-remove-bottom">
    <div class="uk-container uk-container-expand uk-margin-large-bottom">
        <ul class="uk-subnav uk-subnav-pill">
            <li class="uk-active" data-uk-filter-control><a href="#">Show All</a></li>
            <li data-uk-filter-control=".nature-card"><a href="#">Nature</a></li>
            <li data-uk-filter-control=".music-card"><a href="#">Music</a></li>
            <li data-uk-filter-control=".photo-card"><a href="#">Photography</a></li>
            <li data-uk-filter-control=".design-card"><a href="#">Design</a></li>
        </ul>
        <div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l  uk-child-width-1-5@xl uk-grid-match js-filter" data-uk-grid="masonry: true" data-uk-sortable="handle: .drag-icon">
            
            <!-- card -->
            <div class="nature-card" data-tags="a beautiful landscape - nature outdoor">
                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
                            <div class="uk-width-expand">
                                <span class="cat-txt">Nature / Outdoor</span>
                            </div>
                            <div class="uk-width-auto uk-text-right uk-text-muted">
                                <span data-uk-icon="icon:clock; ratio: 0.8"></span> 3 min.
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img class="lazy" data-src="https://picsum.photos/400/300/?random=5" data-width="400" data-height="300" data-uk-img alt="" src="img/transp.gif">
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                <span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
                            </div>
                        </div>
                        
                    </div>
                    <div class="uk-card-body">
                        <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">A BEAUTIFUL LANDSCAPE HERE</h6>
                        <p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
                    </div>
                    <div class="uk-card-footer">
                        <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-expand uk-text-small">
                                John Doe
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /card -->
            <!-- card -->
            <div class="music-card" data-tags="amazing music band here - music bands">
                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
                            <div class="uk-width-expand">
                                <span class="cat-txt">MUSIC / BANDS</span>
                            </div>
                            <div class="uk-width-auto uk-text-right uk-text-muted">
                                <span data-uk-icon="icon:clock; ratio: 0.8"></span> 6 min.
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img class="lazy" data-src="https://picsum.photos/400/470/?random=4" data-width="400" data-height="470" data-uk-img alt="" src="img/transp.gif">
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                <span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">AMAZING MUSIC BAND HERE</h6>
                        <p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
                    </div>
                    <div class="uk-card-footer">
                        <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-expand uk-text-small">
                                John Doe
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /card -->

        </div>
	</div>
</section>

@endsection
