
$(document).ready(OnJscStartUp);

function OnJscStartUp()
{
    try
    {
    	$('#btn_chapter_link').on('click',loaddingData);
    }
    catch( ex )
    {
    }
}
function loaddingData(){
	$iframe = $('iframe');
	alert('xXZX');
	alert($iframe.html());
}