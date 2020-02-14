<?php

function badFunctionName() {
    return;
}

/**
 * Missing @since and no @return.
 *
 * @return
 */
function my_func() {
}
