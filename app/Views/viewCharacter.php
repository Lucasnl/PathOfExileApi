<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    

    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/umd/popper.min.js" integrity="sha256-FT/LokHAO3u6YAZv6/EKb7f2e0wXY3Ff/9Ww5NzT+Bk=" crossorigin="anonymous"></script>

-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"> </script>


   <style>
#tooltip {
  /* ... */
  display: none;
}

#tooltip[data-show] {
  display: block;
}
body{
    background-color: transparent;
}
   </style> 
</head>

<?php 



//echo "Conta :".$_GET['accountName'];
//echo '<br/>';
//echo "Personagem :".$_GET['charName'];

//echo '<pre>'; print_r($data->items[0]);echo '<pre>';



?>

<div class="Container">

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
   
 <td>              <?php
foreach ($data as $info) {

foreach ($info as $datas) {

    
$itens=array(
    'nome'=> $datas->name , 
    
    'sockets'=> $datas->sockets , 
    
    'tipo'=>$datas->typeLine ,
    
    'ilvl'=> $datas->ilvl , 
    
    'requerimentos' => $datas->requirements ,
);
    


//echo '<pre>'; var_dump($itens);echo '<pre>';

?><?php   if ($datas->icon != NUll) {
     
     ?>

     <img data-tippy-content="<?php echo 'Nome: '.$itens['nome'].'<br/> Ilvl : '.$itens['ilvl'].'<br/> Tipo : '.$itens['tipo'];?>"  src="<?php echo $datas->icon?>"> 


     
     <?php }}}?>    </td>



                </tr>
 
            </tbody>

        



    </table>
</div>

<script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5"></script>
</body>


<script>
tippy('[data-tippy-content]');

 </script>




