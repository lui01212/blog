
$(document).ready(OnJscStartUp);

function OnJscStartUp()
{
	try
	{
	    $('#tinymce script').remove();
	    $('#tinymce a').attr('href','a');
	    // alert($('#tinymce a').html());

	    $('#tinymce').val($('#tinymce').val().replace('<a href="//Ｔruyencuatui.net/" data-mce-href="//Ｔruyencuatui.net/"> //truyencuatui.<br><br>NＥt/<br><br></a>',''));
	    $('#tinymce').val($('#tinymce').val().replace('t r u y e n c u a t u i .❊v n',''));
	    $('#tinymce').val($('#tinymce').val().replace('đọc truyện với http://truｙencuatui.net/',''));
        // $('#tinymce').val($('#tinymce').val().replace('tui','moi nguoi ung ho minh nhe'));
        $('#tinymce').val($('#tinymce').val().replace('t r u y e n c u a❤t u i n e t','moi nguoi ung ho minh nhe'));
        $('#tinymce').val($('#tinymce').val().replace(' Truy Ｃập http://truyencuatuｉ.Net/ để  đọc truyện ','moi nguoi ung ho minh nhe'));
	}
	catch( ex )
	{
	}
}
