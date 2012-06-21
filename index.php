<?php

define("REQUEST", true);

require_once("setup.php");

require_once('header.php');
require_once('menu.php');

echo '
			<div id="Content">';
			
require_once('content/'.SESSION::getPage().'.php');			
			
echo '
			</div>';

require_once('footer.php');
	
echo '
		</div>
	</body>
</html>';



?>