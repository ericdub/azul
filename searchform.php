<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div>
	<input type="text" name="s" id="s" onblur="this.value=(this.value=='') ? 'search this blog' : this.value;" onfocus="this.value=(this.value=='search this blog') ? '' : this.value;" value="search this blog" />

	<input type="submit" id="searchsubmit" value="" />
</div>
</form>