<?php

namespace AlgoliaSearch;

$make_is_writable_fail = false;

function is_writable($filename)
{
    global $make_is_writable_fail;

    if ($make_is_writable_fail === true) {
        return false;
    }

    return \is_writeable($filename);
}
