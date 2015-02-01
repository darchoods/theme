<?php $menus = Config::get($_module.'::sidebar.right', []); ?>

@if (count($menus))
    @foreach($menus as $title => $contentView)
    <div class="well well-sm">
        <header class="row">
            <h4>{{{ $title }}}</h4>
        </header>
        <section>
            @include($contentView)
        </section>
    </div>
    @endforeach
@endif
