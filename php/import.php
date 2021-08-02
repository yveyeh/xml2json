<?php

    // string of entered keys
    $keys_string = $_POST['keys'];
    // the xml file
    $temp_file = $_FILES['file']['tmp_name'];

    $data = array();
    $results = array();

    function sanitizeKeysString($_string, $_char) {
        $sanitized_string = "";
        if (startsWith($_string, $_char)) {
            $sanitized_string = substr_replace($_string , "", 0);
            if (endswith($sanitized_string, $_char)) {
                $sanitized_string = substr_replace($_string , "", -1);
            }
        }
        if (endsWith($_string, $_char)) {
            $sanitized_string = substr_replace($_string , "", -1);
            if (startswith($sanitized_string, $_char)) {
                $sanitized_string = substr_replace($_string , "", 0);
            }
        }
        return $sanitized_string;
    }

    function startsWith($haystack, $needle) {
        return ($needle === $haystack[0]);
    }

    function endsWith($haystack, $needle) {
        return ($needle === $haystack[strlen($haystack) - 1]);
    }

    if ( $temp_file ) {

        $dom = DOMDocument::load( $temp_file );
        $rows = $dom->getElementsByTagName( 'Row' );
        $first_row = true;
        
        foreach ($rows as $row) {

            if ( !$first_row ) {

                
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