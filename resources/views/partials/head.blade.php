<head>
  <meta charset="utf-8">

	<!-- mobile meta -->
	<meta name="HandheldFriendly" content="True">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- /mobile meta -->

	<!-- icons & favicons -->
	@include('partials.icons')
	<!-- /icons & favicons -->

	<!-- wp-head -->
  @php(wp_head())
	<!-- /wp-head -->

	<!-- RSS Feed -->
	<link rel="alternate" type="application/rss+xml" title="{{ get_bloginfo('name', 'display') }} Feed" href="{{ get_feed_link() }}">
	<!-- /RSS Feed -->

</head>
