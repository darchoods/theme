<?php

return array(
    // theme info
    'name'    => 'Darchoods',
    'author'  => 'Dan Aldridge',
    'site'    => 'http://cysha.co.uk',
    'type'    => 'frontend',
    'version' => '1.0',

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => 'default', //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle('Darchoods Network');

            // Breadcrumb template.
            $theme->breadcrumb()->setTemplate(
                '<ul class="breadcrumb">
                @foreach ($crumbs as $i => $crumb)
                    @if ($i != (count($crumbs) - 1))
                    <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
                    @else
                    <li class="active">{{ $crumb["label"] }}</li>
                    @endif
                @endforeach
                </ul>'
            );
            
            if (($analyticsCode = Config::get('core::app.google-analytics', null)) !== null) {
                $theme->asset()->container('footer')->writeScript('google-analytics', '
                    (function (i,s,o,g,r,a,m) {i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function () {
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

                    ga(\'create\', \''.$analyticsCode.'\', \'auto\');
                    ga(\'send\', \'pageview\');
                ', ['dependencies.js']);
            }
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function ($theme) {
            $theme->asset()->usePath()->add('base', 'css/styles.css', array('bootstrap'));
            $theme->asset()->usePath()->add('appjs', 'js/application.js', array('jsapi'));
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function ($theme) {
                //$theme->asset()->add('js', 'assets/js.js');

            }

        )

    )

);
