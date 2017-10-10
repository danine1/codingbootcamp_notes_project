<?php

//so we dont have to keep using FQN in namespaces

/**
*alias for \codingbootcamp\tinymvc\request::get
*/
function request($name, $default = null)
{
    return \codingbootcamp\tinymvc\request::get($name, $default);
} 