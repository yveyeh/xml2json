<?php

$data = array();
 
$results = array();

if ( $_FILES['file']['tmp_name'] ) {

	$dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
	$rows = $dom->getElementsByTagName( 'Row' );
	$first_row = true;
	
	foreach ($rows as $row) {

		if ( !$first_row ) {

			$code_catalogue = "";
			$items = "";
			$kit_size = "";
			$method = "";
			 
			$index = 1;
			$cells = $row->getElementsByTagName( 'Cell' );

			foreach( $cells as $cell ) {

				$ind = $cell->getAttribute( 'Index' );
				if ( $ind != null ) $index = $ind;
				 
				if ( $index == 1 ) $code_catalogue = $cell->nodeValue;
				if ( $index == 2 ) $items = $cell->nodeValue;
				if ( $index == 3 ) $kit_size = $cell->nodeValue;
				if ( $index == 4 ) $method = $cell->nodeValue;
				 
				$index += 1;
			}

			$data_ = array();
			$data_['code_catalogue'] = $code_catalogue;
			$data_['items'] = $items;
			$data_['kit_size'] = $kit_size;
			$data_['method'] = $method;
			$results[] = $data_;
		}

		$first_row = false;
	}
}

echo json_encode($results);

?>
