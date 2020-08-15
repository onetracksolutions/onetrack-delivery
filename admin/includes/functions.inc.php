
<?php

function deliverystatus($status)
{
    if ($status == "delivered") {
        echo "btn btn_custom delivered";
    } else {
        echo "btn btn_custom transit";
    }
}
