 <title><?=$title?></title>
    <?php foreach($css as $item): ?>
        <link rel="stylesheet" href=<?=base_url("assets/css/".$item)?> type="text/css" /> 
    <?php endforeach;?>
     <?php foreach($js as $item): ?>
        <script type="text/javascript" src=<?=base_url("assets/js/".$item)?>> </script>
    <?php endforeach;?>
    <?php foreach($fonts as $item): ?>    
        <link rel="stylesheet" href=<?=$item?> type="text/css" /> 
    <?php endforeach;?>
<meta charset="UTF-8">
