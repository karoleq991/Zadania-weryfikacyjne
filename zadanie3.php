<?php

function fun($A)
{

    for ($i = 1; $i <= count($A); $i++) {
        if (!in_array($i, $A))
            return 0;
    }
    return 1;
}
