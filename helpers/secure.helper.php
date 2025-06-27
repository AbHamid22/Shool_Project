<?php

function csrf(){
    return "<input type='hidden' value='".md5(rand())."' name='_token' />";
}

?>