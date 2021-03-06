<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]> <html class=""> <![endif]-->
<head>
<title>{{{ strip_tags(Theme::place('title')) }}}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1, userscalable=no"/>
<meta name="keywords" content="{{{ Theme::place('keywords') }}}">
<meta name="description" content="{{{ Theme::place('description') }}}">

@if( Request::has('page') )
<link rel="prefetch" href="{{{ $_SERVER['REDIRECT_URL'].'?page='.(Request::get('page')+1) }}}" />
@endif

{{ Assets::css() }}
{{ Theme::asset()->styles() }}

{{ Assets::js() }}
{{ Theme::asset()->scripts() }}

<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body class="{{{ $currentRoute }}}">

{{ Theme::partial('theme.header') }}

<section class="container">
    <div class="row">

        <nav><ul class="nav">
            {{ Theme::partial('theme.nav') }}
        </ul></nav>

        <div class="clearfix"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ Theme::partial('theme.msgs') }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">{{ Theme::partial('core.content') }}</div>
        <div class="col-md-3">{{ Theme::partial('theme.sidebar-right') }}</div>
    </div>
</section>


{{ Theme::partial('theme.footer') }}

{{ Theme::partial('theme.modal') }}
{{ Theme::asset()->container('footer')->scripts() }}

</body>
</html>
