$meta_query = [];

if (!empty($_GET['pickup_date'])) {
$meta_query[] = [
'key' => 'available_from',
'value' => $_GET['pickup_date'],
'compare' => '<=', 'type'=> 'DATE'
  ];
  }

  if (!empty($_GET['dropoff_date'])) {
  $meta_query[] = [
  'key' => 'available_to',
  'value' => $_GET['dropoff_date'],
  'compare' => '>=',
  'type' => 'DATE'
  ];
  }

  $args = [
  'post_type' => 'cars',
  'tax_query' => [
  [
  'taxonomy' => 'location',
  'field' => 'slug',
  'terms' => sanitize_text_field($_GET['pickup_location']),
  ]
  ],
  'meta_query' => $meta_query,
  ];

  $query = new WP_Query($args);