// panhJSON - in personal page
// pathPHP - in personal page

$( '.MxDownload' ).on( 'click', function(){
		
	var JSONobj,
		namePlugin = $( '.MxDownload' ).attr( 'data-nameplugin' ),
		existMethod = 0;
	
	function GetJSON( data ){
		JSONobj = data;
		$.each( JSONobj, function( key, value ){
			if( key === namePlugin ){
				existMethod += 1;
			}
		} );
	}

	function UpdateJSON(){
		if( existMethod > 0 ){
			countDownloads = JSONobj[namePlugin].countDownloads;
			JSONobj[namePlugin].countDownloads = countDownloads + 1;
		} else{
			JSONobj[namePlugin] = {countDownloads: 1};
		}
	}

	function SendJSON( _data ){
		var dataJSON = 'JSONobj=' + JSON.stringify( _data );
		$.ajax( {
			url: pathPHP,
			type: 'POST',
			data: dataJSON,
		    success: function( data ){
		    	console.log('success');
		    }
		} );
	}

	function AddDownloads( data ){
		GetJSON( data );
		UpdateJSON();
		setTimeout( function(){
			SendJSON( data );
		},500 );
		
	}

	$.ajax( {
		dataType: 'json',
		type: 'GET',
		url: panhJSON,
		success: function( data ){
			AddDownloads( data );
		}
	} );

} );