var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function ()
{
    if ( this.readyState == 4 && this.status == 200 ) 
    {
        var json = JSON.parse( this.responseText );
        var n = Object.keys( json ).length;

        var j = 0;
        for ( j = 0; j < n; j++ )
        {
            var pageName = Object.keys( json[ j ] )[ 0 ];
            var page = json[ j ][ pageName ];
            var m = Object.keys( page ).length

            var i = 0;
            for ( i = 0; i < m; i++ )
            {
                var elements = Object.keys( page );
                var element = elements[i];
                var text = page[ element ];
                $("#"+element).html(text)
                // document.getElementById( element ).outerHTML = text;
            }
        };
    }
};

$( "#en" ).on( "click", function ()
{
    xmlhttp.open( "GET", "/js/json/en.json", true );
    xmlhttp.send();
} );
$( "#pt" ).on( "click", function ()
{
    xmlhttp.open( "GET", "/js/json/pt.json", true );
    xmlhttp.send();
} );