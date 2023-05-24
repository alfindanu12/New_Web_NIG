<?php
function redirect($url){
    // return header("location:$url");
    echo '<script>window.location.href="'.$url.'"</script>';
}
?>

