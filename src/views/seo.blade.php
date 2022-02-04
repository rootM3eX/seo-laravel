    <!-- SEO in Here -->
    @isset($title)
	<title>{{ $title }}</title>
	@endisset
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="referrer" content="{{ !empty($referrer)? $referrer : config('seo.referrer') }}">
	<meta name="robots" content="{{ !empty($robots)? $robots : config('seo.robots') }}">
	<meta name="description" content="{{ !empty($description)? $description : config('seo.description') }}">
	<meta name="keywords" content="{{ !empty($keywords)? $keywords : config('seo.keywords') }}">
	<!-- Meta Geo Regional -->
    @if(config('seo.geo_region') !=='')
	<meta name="geo.region" content="{{ config('seo.geo_region') }}">
	@endif
    <!-- Meta Geo Position -->
	@if(config('seo.geo_position') !=='')
	<meta name="geo.position" content="{{ config('seo.geo_position') }}">
	<meta name="ICBM" content="{{ config('seo.geo_position') }}">
	@endif
	<meta name="geo.placename" content="{{  config('app.name') }}">


	<!-- Dublin Core basic info -->
	<meta name="dcterms.Format" content="text/html">
	<meta name="dcterms.Language" content="{{ config('app.locale') }}">
	<meta name="dcterms.Identifier" content="{{ url()->current() }}">
	<meta name="dcterms.Relation" content="{{  config('app.name') }}">
	<meta name="dcterms.Publisher" content="{{  config('app.name') }}">
	<meta name="dcterms.Type" content="text/html">
	<meta name="dcterms.Coverage" content="{{ url()->current() }}">
	<meta name="dcterms.Title" content="{{ !empty($title)? $title : config('seo.title') }}">
	<meta name="dcterms.Subject" content="{{ !empty($keywords)? $keywords : config('seo.keywords') }}">
	<meta name="dcterms.Contributor" content="{{ !empty($author)? $author : config('seo.author') }}">
	<meta name="dcterms.Description" content="{{ !empty($description)? $description : config('seo.description') }}">


	<!-- Facebook OpenGraph -->
	<meta property="og:locale" content="{{  config('app.locale') }}">
	<meta property="og:type" content="{{ !empty($type)? $type : config('seo.type') }}">
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="{{ !empty($title)? $title : config('seo.title') }}">
	<meta property="og:description" content="{{ !empty($description)? $description : config('seo.description') }}">
	<meta property="og:image" content="{{ !empty($image)? $image : config('seo.image') }}">
	<meta property="og:site_name" content="{{  config('app.name') }}">

	@if(config('seo.fb_app_id') !=='')
	<meta property="fb:app_id" content="{{ config('seo.fb_app_id') }}"/>
	@endif

	<!-- Twitter Card -->
	@if(config('seo.twitter_card') !=='')
	<meta name="twitter:card" content="{{ !empty($twitter_card)? $twitter_card : config('seo.twitter_card') }}">
	@endif
	@if(config('seo.twitter_site') !=='' || !empty($twitter_site))
	<meta name="twitter:site" content="{{ !empty($twitter_site)? $twitter_site : config('seo.twitter_site') }}">
	@endif
	<meta name="twitter:title" content="{{ !empty($title)? $title : config('seo.title') }}">
	<meta name="twitter:description" content="{{ !empty($description)? $description : config('seo.description') }}">
	<meta name="twitter:image" content="{{ !empty($image)? $image : config('seo.image') }}">