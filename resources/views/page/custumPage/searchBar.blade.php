<div class="search-bar">
	<form method="POST" action="{{ route('seachpage.index') }}" id="i_search">
        {{ csrf_field() }}
	    <div class="search-icon">
	        <i class="material-icons" onclick="event.preventDefault();
                                                 document.getElementById('i_search').submit();">search</i>
	    </div>
	    <input type="text" placeholder="GÕ TỪ KHÓA TÌM KIẾM..." name="search" required>
	    <div class="close-search">
	        <i class="material-icons">close</i>
	    </div>
	</form>
</div>