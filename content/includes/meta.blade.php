<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="manifest" href="/manifest.json">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=rMBWbbb2wK">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=rMBWbbb2wK">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=rMBWbbb2wK">
<link rel="manifest" href="/site.webmanifest?v=rMBWbbb2wK">
<link rel="mask-icon" href="/safari-pinned-tab.svg?v=rMBWbbb2wK" color="#5bbad5">
<link rel="shortcut icon" href="/favicon.ico?v=rMBWbbb2wK">
<meta name="msapplication-TileColor" content="#f49c35">
<meta name="theme-color" content="#ffffff">

@if (Route::currentRouteName() == 'content' and isset($list))
    <title>{{showListTitle($list, $filters, false)}}</title>
    <!-- Para colocar title do SEO exemplo: $listModel->seo_title -->
    <meta name="description" content="Finden Sie hier Ihren Job in der Region {{ $list->name }} und bewerben Sie sich ohne Registrierung bei Top-Arbeitgebern.">
    <meta property="og:description" content="Finden Sie hier Ihren Job in der Region {{ $list->name }} und bewerben Sie sich ohne Registrierung bei Top-Arbeitgebern.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Aktuelle Stellenangebote in {{ $list->name }}">
    <meta property="og:site_name" content="{{ config('settings.name') }}">
    <meta property="og:url" content="{{ \Request::url() }}">
    @if ($list->image)
    <meta property="og:image" content="{{ asset('uploads/lists/' . $list->image) }}">
    @else
    <meta property="og:image" content="{{ asset('uploads/' . config('settings.image')) }}">
    @endif

    <link rel="canonical" href="{{url('/') .'/'. $list->slug }}" />



@elseif (\Route::currentRouteName() == 'author.get' and isset($author))
    <title>Offene Jobangebote bei {{ $author->name }}</title>
    <meta name="description" content="Finden Sie hier Ihren Job bei {{ $author->name }}  und bewerben Sie sich direkt online">
    <meta property="og:description" content="Finden Sie hier Ihren Job bei {{ $author->name }}  und bewerben Sie sich direkt online">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Offene Jobangebote bei {{ $author->name }}">
    <meta property="og:site_name" content="{{ config('settings.name') }}">
    <meta property="og:url" content="{{ \Request::url() }}">
    <meta property="og:image" content="{{ $author->gravatar() }}?s=120&d=identicon&r=PG">
@elseif (Route::currentRouteName() == 'content' and isset($content))
    <title>{{ $content->title }}</title>
    <!-- Para colocar title do SEO exemplo: $nach->seo_title -->
    @isset($content->data_fields['stellenbeschreibung'])
    <meta name="description" content="{!! \Str::limit(strip_tags($content->data_fields['stellenbeschreibung']), 285, ' ...') !!}">
    <meta property="og:description" content="{!! \Str::limit(strip_tags($content->data_fields['stellenbeschreibung']), 285, ' ...') !!}">
    @endisset
    <meta property="og:type" content="article">
    <meta property="article:author" content="{{ $content->user->name }}">
    <meta property="article:published_time" content="{{ $content->created_at }}">
    <meta property="og:title" content="Stellenangebot: {{ $content->title}}">
    <meta property="og:site_name" content="{{ config('settings.name') }}">
    <meta property="og:url" content="{{ \Request::url() }}">
    @if ($content->image)
    <meta property="og:image" content="{{ asset('uploads/' . $content->image) }}">
    @else
    <meta property="og:image" content="{{ $content->user->gravatar() }}">
    @endif
    @if(App::environment('production'))
    <?php
    $employmentType = "";
    if(isset($content->data_fields['beschaftigungsart'])){
        if ($content->data_fields['beschaftigungsart'] == 'Praktikum') {
            $employmentType = "INTERN";
        }
        if ($content->data_fields['beschaftigungsart'] == 'Vollzeit') {
            $employmentType = "FULL_TIME";
        }
        if ($content->data_fields['beschaftigungsart'] == 'Teilzeit') {
            $employmentType = "PART_TIME";
        }
        if ($content->data_fields['beschaftigungsart'] == 'Ausbildung') {
            $employmentType = "INTERN";
        }
    }
    function escapeJsonString($value)
    {
        $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
        $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
        $result = str_replace($escapers, $replacements, $value);
        return $result;
    }
    ?>
    @isset ($content->data_fields['arbeitsort']['postalCode'])
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "JobPosting",
            "title": "{{ $content->title }}",
            "description": "{!! escapeJsonString($content->data_fields['stellenbeschreibung']) !!}",
            "datePosted": "{{ $content->updated_at->format('Y-m-d') }}",
            "validThrough": "{{ $content->updated_at->addDays(90)->toIso8601String() }}",
            "employmentType": "{{ $employmentType }}",
            "hiringOrganization": {
                "@type": "Organization",
                "name": "{{ $content->user->name }}",
                "sameAs": "{{ isset($content->user->social_networks['site']) ? $content->user->social_networks['site'] : '' }}",
                "logo": "{{ $content->user->gravatar() }}?s=120&d=identicon&r=PG"
            },
            "jobLocation": {
                "@type": "Place",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "{{ isset($content->data_fields['arbeitsort']['streetAddress'])?$content->data_fields['arbeitsort']['streetAddress']:'' }}",
                    "addressLocality": "{{ isset($content->data_fields['arbeitsort']['addressLocality'])?$content->data_fields['arbeitsort']['addressLocality']:'' }}",
                    "addressRegion": "{{ isset($content->data_fields['arbeitsort']['addressRegion'])?$content->data_fields['arbeitsort']['addressRegion']:'' }}",
                    "postalCode": "{{ isset($content->data_fields['arbeitsort']['postalCode'])?$content->data_fields['arbeitsort']['postalCode']:'' }}",
                    "addressCountry": "{{ isset($content->data_fields['arbeitsort']['addressCountry'])?$content->data_fields['arbeitsort']['addressCountry']:'' }}"
                }
            }
        }
    </script>
    @endisset
    @endif
@else
    <title>@yield('meta_title', '')</title>
    <meta name="description" content="@yield('meta_description', \Str::limit(strip_tags(config('settings.description')), 285, ' ...'))">
    <meta property="og:description" content="@yield('meta_og_description', \Str::limit(strip_tags(config('settings.description')), 285, ' ...'))">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('meta_og_title', config('settings.name'))">
    <meta property="og:site_name" content="@yield('meta_og_site_name', config('settings.name'))">
    <meta property="og:url" content="{{ \Request::url() }}">
    <meta property="og:image" content="@yield('meta_og_image', asset('uploads/' . config('settings.image')))">
    <link rel="canonical" href="{{ \Request::url() }}" />
@endif

@if (!empty(config('settings.favicon_image')))
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('uploads/' . config('settings.favicon_image')) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('uploads/' . config('settings.favicon_image')) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('uploads/' . config('settings.favicon_image')) }}">
@endif