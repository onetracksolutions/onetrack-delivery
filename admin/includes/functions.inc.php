
<?php

function deliverystatus($status)
{
    if ($status == "delivered") {
        $dstatus = "btn btn_custom delivered";
    } else {
        $dstatus =  "btn btn_custom transit";
    }
    return $dstatus;
}
