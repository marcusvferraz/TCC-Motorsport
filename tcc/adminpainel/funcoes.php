<?php

function retirarMask($retira)
{
    $retira = str_replace(['(', ')', '-', '_', '.', '/', ' '], '', $retira);
    return $retira;
}
?>