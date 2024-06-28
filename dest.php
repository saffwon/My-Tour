<?php

$destinationName = isset($_GET['name']) ? $_GET['name'] : '';

// Placeholder data for destination details
$destinationDetails = array(
    'dal_lake' => array(
        'name' => 'Dal Lake',
        'description' => 'Dal Lake is a famous lake in Srinagar, known for its picturesque beauty and houseboats.',
        // Add more details if needed
    ),
    'gulmarg' => array(
        'name' => 'Gulmarg',
        'description' => 'Gulmarg is a popular hill station and skiing destination in Jammu and Kashmir.',
        // Add more details if needed
    ),
    'leh_ladakh' => array(
        'name' => 'Leh-Ladakh',
        'description' => 'Leh-Ladakh is known for its stunning landscapes, monasteries, and adventurous trekking trails.',
        // Add more details if needed
    )
);

// Check if the destination exists
if (array_key_exists($destinationName, $destinationDetails)) {
    $destination = $destinationDetails[$destinationName];
    echo "<h1>{$destination['name']}</h1>";
    echo "<p>{$destination['description']}</p>";
    // Add more details if needed
} else {
    echo "<h1>Destination not found</h1>";
}

?>
