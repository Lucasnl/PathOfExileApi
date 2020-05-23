<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />


    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/umd/popper.min.js" integrity="sha256-FT/LokHAO3u6YAZv6/EKb7f2e0wXY3Ff/9Ww5NzT+Bk=" crossorigin="anonymous"></script>

-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
        integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous">
    </script>

    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"> </script>


    <style>

@font-face {
  font-family: 'Fontin';
  src: url('../assets/fonts/Fontin-SmallCaps.ttf'); /* IE9 Compat Modes */
  src: url('../assets/fonts/Fontin-Bold.ttf?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('../assets/fonts/FFontin-Bold.ttf') format('woff2'), /* Super Modern Browsers */
       url('../assets/fonts/FFontin-Bold.ttf') format('woff'), /* Pretty Modern Browsers */
       url('../assets/fonts/FFontin-Bold.ttf')  format('truetype'), /* Safari, Android, iOS */
}
    #tooltip {
        /* ... */
        display: none;
    }

    #tooltip[data-show] {
        display: block;
    }

    body {
        background-color: transparent;
    }

    .data-tippy-content {

        display: none;
    }
 .tippy-tooltip.custom-theme {

  color: #8888ff;
  text-align:center !important;
  font-size: 15px;
  font-family: "Fontin","sans-serif";
}
    </style>
</head>

<?php 



//echo "Conta :".$_GET['accountName'];
//echo '<br/>';
//echo "Personagem :".$_GET['charName'];

//echo '<pre>'; print_r($data->items[0]);echo '<pre>';



?>

<div class="container">
<div class="row">
    <table id="table" class="table table-striped table-bordered responsive" cellspacing="0" width="100%">

        <?php  


$nome = $_GET['nome'];

?>

        <body>







            <thead class="thead-dark">
                <tr>
                    <?php  ?>









                </tr>
            </thead>
            <tbody>


                <tr>

                    <td> <?php
foreach ($data as $info) {

foreach ($info as $datas) {

    
$itens=array(
    'nome'=> $datas->name , 
    
    'sockets'=> $datas->sockets , 
    
    'tipo'=>$datas->typeLine ,
    
    'ilvl'=> $datas->ilvl , 
    
    'requerimentos' => $datas->requirements ,
    'propriedades' => $datas->properties ,
  
    'modsExplicitos' => $datas->explicitMods ,
    'modsCraftados' => $datas->craftedMods ,
    'modsEncantados' => $datas->enchantMods ,
    

);
    


 //echo '<pre>'; var_dump($itens["propriedades"]);echo '<pre>';

?><?php   if ($datas->icon != NUll) {
     
     ?>

                        <img data-tippy-content="
                        

                        
                        <?php echo '<b> Nome: </b> '.$itens['nome'].'<br/> <b>Ilvl</b> : '.$itens['ilvl'].'<br/> <b>Tipo</b> : '.$itens['tipo'];?> 
                        <?php if($itens['modsExplicitos']!=NULL) {echo '<br/> <b>Mods</b>: '; foreach ($itens['modsExplicitos'] as $mods) {echo '<br/> '.($mods);}} ?>
                          
                        <?php if($itens['modsCraftados']!=NULL){ echo '<br/> <b>Craftado</b> :'; 
                           foreach ($itens['modsCraftados'] as $modsCraft){ echo '<br/>'. $modsCraft;}} ?>


                     <?php if($itens['modsEncantados']!=NULL){ echo '<br/> <b>Encantado</b> :'; 
                           foreach ($itens['modsEncantados'] as $modsEnch){ echo '<br/>'. $modsEnch;}} ?> 

                        "
                            src="<?php echo $datas->icon?>" id="btn-html">



                        <?php }}}?> </td>



                </tr>

            </tbody>





    </table>
</div> </div>

<script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5"></script>
</body>


<script>
tippy('[data-tippy-content]', {
    theme: 'custom',
  arrow: false,
  placement: 'right',



});
</script>