


<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="row">
		<div class="twelve columns">
			<div class="row collapse">
				<div class="eight mobile-three columns">
    				<?php /* the element of name is very important. */ ?>
    				
        			<input type="text" id="s" name="s" results="5" placeholder="Search" />    				
    			</div>
    			<div class="four mobile-one columns">
        			<input type="submit" class="postfix button" name="submit" id="searchsubmit" value="Search" />
        		</div>
        	</div>
        </div>
    
   </div>
</form>

