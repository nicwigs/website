<?php
/**
 * Created by PhpStorm.
 * User: nicwiggins
 * Date: 6/6/18
 * Time: 10:28 PM
 */

namespace nic;

use nic\System as System;

class IndexView extends View
{
    public function present_body(){
        $html = <<<HTML
<h1 class="center">Welcome to Nic Wiggins's Website!</h1><div class="body">
<form class="dialog" method="post" action="post/index-post.php">
	<div class="controls">
	<p class="name"><label for="name">Name </label><br><input type="text" id="name" name="name"></p>
	<p><button>Start</button></p>
HTML;
        if($this->system->check() == System::INVALID){
            $html .= '<p>You must enter a name!</p>';
        }
        $html .= <<<HTML
	</div>
</form>
</div>
HTML;
        $this->system->clear();

        return $html;
    }
}