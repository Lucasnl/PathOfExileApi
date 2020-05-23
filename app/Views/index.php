<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/r-2.2.5/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/r-2.2.5/datatables.min.js"></script>
 <style>
div.container {
        width: 80%;
    }
    .pesquisar{
        text-align: center;
    }

body{
background:url("https://webcdn.pathofexile.com/public/news/2017-08-10/WallpaperChitus.jpg");
background-attachment: fixed;
  background-position: center;
background-repeat: no-repeat;
}
.tabela{
    

border:4px solid #DDD;	
padding:30px;
margin-top:50px;


border-radius: 24px;
background:white;

}



#overlay {
  position: fixed; /* Sit on top of the page content */
  display: ; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: -99; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
     </style>
</head>

<div id="bg"></div>
<div id="overlay"></div>
    <div class="pesquisar ">
        <form class="" METHOD="GET" action="<?php echo site_url('/exileApi/Search/SearchAccount/'); ?> " >
            <input type="text" name="nome" class=" form-control-sm" placeholder="Nome da Conta" />
           
            <button type="Submit" class="btn btn-success"> Pesquisar </button>
            </div>
        </form>


    <div class="container tabela">
    <table id="table" class="table  table-bordered responsive" cellspacing="0" width="100%">

<?php  


$nome = $_GET['nome'];

?>


<thead class="thead-dark">
    <tr>
        <?php  ?>


       <th width="5%"> Personagem</th>
       <th width="5%">Classe</th>

       <th width="5%">Level</th>
       <th width="5%">Liga</th>
       <th width="25%">Itens</th> 


     




        
    </tr>
</thead>
<tbody>
<tr>
    <td>itens</td>
</tr>
</tbody>


   
   </table> </div>
</body>


<script>
$(document).ready(function() {
    $('#table').DataTable( {
        "lengthMenu": [[5,10, 25, 50], [5,10, 25, 50]],

        "pageLength": 5 ,
       responsive:true,
        "ajax": {
         url:"http://localhost/exileApi/Search/Ajax?nome=<?php echo $nome;?>",
         dataSrc : '',

        } ,
        "columns": [
            { "data": "name" },
            { "data": "class" },
            { "data": "level" },
            { "data": "league" },
            { "data": "name" },
            
        
        ],  "aoColumnDefs": [
                { "aTargets": [4], "mData":1,
                    "orderable": false,
                   "mRender": function ( data, type, full ) {
                     //return '<a href="../View/ViewChar?charName='+ data + '&accountName=<?=$nome?>">'+ data + '</a>';

                    return '<embed width="100%" height="300" src="http://localhost/exileApi/View/ViewChar?charName='+ data + '&accountName=<?=$nome?>"> </embed>';
                   }

                   
                   
                   },
            ], 
    } );
} );
</script>

</html>