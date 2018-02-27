<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 

    $p = '';
    if (isset($prev)) {
        $p = $prev;
    }

    $t = '';
    if (isset($top)) {
        $t = $top;
    }

    $n = '';
    if (isset($next)) {
        $n = $next;
    }
?>

<div class="row footer-nav">
    <div class="col-sm-12 col-sm-offset-1 col-sm-10">
        <a href="/<?php echo $p; ?>">PREVIOUS</a>|<a href="/<?php echo $t; ?>">BACK TO TOP</a>|<a href="/<?php echo $n; ?>">NEXT</a>'
    </div>
</div>
