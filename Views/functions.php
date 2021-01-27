<?php
function lorem(){
    return 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt nisi, magni atque repellendus corrupti repudiandae totam inventore iste repellat debitis. Aliquam obcaecati, veniam voluptates illo sed dicta debitis inventore delectus?';
}

function average($n1,$n2){
    return ($n1+$n2)/2;
}

?>

<div class="bg-danger bg-gradient text-white p-3">
    <?php echo lorem(); ?>
</div>
<div class="bg-secondary bg-gradient text-white p-3 display-4">
    <?php echo average(12,15); ?>
</div>