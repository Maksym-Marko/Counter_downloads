<? header('Content-type: text/html; charset=utf-8');?>
<?php
class UpdateJSON{
	public function OpenJSONfile( $JSONfile, $JSONdata ){
		$openJSONfile = fopen( $JSONfile, 'w+' );
		$addJSONdata = fwrite( $openJSONfile, $JSONdata );
		fclose( $openJSONfile );
	}
}

$createJSONdata = new UpdateJSON;

$JSONfile = 'dataDownloads.json';
$JSONdata = stripslashes( $_POST['JSONobj'] );

if( !empty( $JSONdata ) ){
	$createJSONdata->OpenJSONfile( $JSONfile, $JSONdata );
}