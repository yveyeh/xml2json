<?php

    include './functions.php';

    // string of entered keys
    $keys_str = $_POST['keys'];
    // the xml file
    $temp_file = $_FILES['file']['tmp_name'];

    //
    $data = array();
    //
    $values = array();
    //
    $keys = getKeys($keys_str);

    //
    if ( $temp_file ) {

        $dom = DOMDocument::load( $temp_file );
        $rows = $dom->getElementsByTagName( 'Row' );
        //
        $first_row = true;
        //
        foreach ( $rows as $row ) {

            if ( !$first_row ) {
                //
                $cells = $row->getElementsByTagName( 'Cell' );
                //
                foreach( $cells as $cell ) {
                    array_push( $values, $cell->nodeValue );
                }
                //
                for ($i=0; $i < count($keys); $i++) { 
                    $_data[ $keys[$i] ] = $values[$i];
                }
                //
                $data[] = $_data;
            }
            //
            $first_row = false;
        }

    }
    //
    echo json_encode($data);

?>