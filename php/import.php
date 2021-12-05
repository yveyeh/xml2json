<?php
include './functions.php';

// String of entered keys. // TODO : Error report if no value submitted.
$keys_str = isset($_POST['keys']) ? esc($_POST['keys']) : '';
// Get the json object keys.
$keys = get_keys($keys_str);
// Generate and output JSON. (Check uploaded file and it's type)
if ($_FILES && $_FILES['file']['type'] == 'text/xml') {
    $dom = new DOMDocument(); // Instantiate the DOMDocument object.
    $dom->load($_FILES['file']['tmp_name']); // Load xml from the uploaded file.
    $rows = $dom->getElementsByTagName('Row'); // Get all rows.
    foreach ($rows as $i => $row) {
        $cells = $row->getElementsByTagName('Cell'); // Get all cells in the target row.
        foreach ($cells as $j => $cell)
            $data[$i][$keys[$j]] = $cell->nodeValue; // Set key: value pairs.
    }
    echo json_encode($data); // Output json.
}
