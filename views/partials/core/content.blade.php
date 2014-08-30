@if (Theme::getMode() != 'basic')

<div class="well well-sm">
    <header class="row">
        <div class="col-md-12">
            <h4>{{ str_replace(' | '.Config::get('core::app.site-name'), '', Theme::place('title')) }}</h4>
        </div>
    </header>

    {{ Theme::content() }}
</div>

@else

    {{ Theme::content() }}

@endif
