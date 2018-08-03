$(document).ready(OnJscStartUp);
function OnJscStartUp()
{
    try
    {
        // custumPage();

        $(document).on('keyup','#i_search-bar',{ix : 0},showSearch);
        $(document).on('click','.close-search',{ix : 1},showSearch);
        //
        $(document).on('click','.group-size button:first-child',custumPage);
        $(document).on('click','.group-size button:last-child',custumPage);
        $(document).on('click','.group-framesize button:first-child',custumPage);
        $(document).on('click','.group-framesize button:last-child',custumPage);
        $(document).on('click','.group-lineheight button:first-child',custumPage);
        $(document).on('click','.group-lineheight button:last-child',custumPage);
        //
    }
    catch( ex )
    {
    }
}
function custumPage(){
  $csize = $.cookie('csize');
  $cfull = $.cookie('cfull');
  $cline = $.cookie('cline');

  $('.content-chapter').css({'font-size' : $csize + 'px', 'line-height': $cline + '%'});
  $('.custum-width').css({'width': $cfull + '%'});
}
function showSearch(e){
	//
	$key = e.data.ix;
	$resultSearchBar = $('.result-search-bar');
	//
	if($key == 0){
	  if($(this).val().length >=3)
	  {
	    if ($resultSearchBar.hasClass('open')){
	       $resultSearchBar.removeClass('open').addClass('open');
	    }else{
	      $resultSearchBar.addClass('open'); 
	  	}
	  	OnJscSearch(e,$(this).val());
	  }else{
	  	if ($resultSearchBar.hasClass('open')){
	       $resultSearchBar.removeClass('open');
	    }
	  }
  	}else{
  		$resultSearchBar = $('.result-search-bar');

	    if ($resultSearchBar.hasClass('open')){
	       $resultSearchBar.removeClass('open');
	    }
  	}
}
function OnJscSearch(e,value){
  //
  e.preventDefault();
  //
  var url = $('#i_search').attr('action');
  //
  OnJscSearchAjax(url,value);
  //
}
function OnJscSearchAjax(url,value){
  //
  $.ajax({
     type: "GET",
     url: url + '/' +  value
  }).success(function(data) {
         $('.result-search-bar div.row').html('');
         $('.result-search-bar div.row').append(data);
  });
  //
}