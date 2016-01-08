<?php 
    $pagename="Lists";
    $pagetitle="Lists";
    include('includes/header.php');
    if(isset($_REQUEST['listid'])){
       $listid = $_REQUEST['listid'];
    }
   
?>
<br>
<?php
$numbers = array(
    array("verticals 1 ", "list 1 ", "geo area1 "),
    array("verticals 2 ", "list 2 ", "geo area2 "),
    array("verticals 3 ", "list 3 ", "geo area2 "),
);

$f_nb = $numbers['0'];
$s_nb = $numbers['1'];
$t_nb = $numbers['2'];

$final_array = array();

for($a = 0; $a<sizeof($f_nb); $a++) 
{
    for($b = 0; $b<sizeof($s_nb); $b++) 
    {
        for($c = 0; $c<sizeof($t_nb); $c++) 
        {
            $final_array[] = $f_nb["$a"] . $s_nb["$b"] . $t_nb["$c"];
        }
    }
}

ksort($final_array);
echo "<pre>";
print_r($final_array);


?>
<style type="text/css">
#add{
  margin-top: 0px;
  float: right;
}
</style>
<div class="content">
   <div class="container">
    <div id="div1">
<?php

$json = '
 {
   "verticals": [
          {
            "name": "vertical name 1",
            "score": "integer"
          },
          {
            "name": "vertical name 2",
            "score": "integer"
          },
          {
            "name": "vertical name 3",
            "score": "integer"
          },
          {
            "name": "vertical name 4",
            "score": "integer"
          }
        ],
        
        "lists": [
          {
            "name": "list name 1",
            "score": "integer"
          },
          {
            "name": "list name 2",
            "score": "integer"
          },
          {
            "name": "list name 3",
            "score": "integer"
          },
          {
            "name": "list name 4",
            "score": "integer"
          }
        ],
        
         "geo": [
          {
            "name": "geo name 1",
            "score": "integer"
          },
          {
            "name": "geo name 2",
            "score": "integer"
          },
          {
            "name": "geo name 3",
            "score": "integer"
          },
          {
            "name": "geo name 4",
            "score": "integer"
          }
        ],
        
         "partner": [
          {
            "name": "partner name 1",
            "score": "integer"
          },
          {
            "name": "partner name 2",
            "score": "integer"
          },
          {
            "name": "partner name 3",
            "score": "integer"
          },
          {
            "name": "partner name 4",
            "score": "integer"
          }
        ],
        
        "keywords": [
          {
            "name": "keywords name 1",
            "score": "integer"
          },
          {
            "name": "keywords name 2",
            "score": "integer"
          },
          {
            "name": "keywords name 3",
            "score": "integer"
          },
          {
            "name": "keywords name 4",
            "score": "integer"
          }
        ]

       
  }
  ';

$obj = json_decode($json, true);
// echo "<pre>";
// print_r($obj);


$verticals = $obj['verticals'];

$vert = array();
foreach ($verticals as $value) {
array_push($vert, $value['name']);
}

$count = count($verticals);

for ($i=0; $i < $count ; $i++) { 
// print_r($verticals[$i]['name']);

?>      

<div class="row ruleRow mb10">

        <div class="col-sm-2">
          <select class="form-control verticalsselect" id="<?php echo $i; ?>"> 
            <option value="Vertical 1">Vertical 1</option>
            <option value="Vertical 1">Vertical 2</option>
            <option value="Vertical 1">Vertical 3</option>
            <option value="*****" selected>*****</option>
          </select>
        </div>
        <div class="col-sm-2">
          <select class="form-control">
            <option value="List 1">List 1</option>
            <option value="List 2">List 2</option>
            <option value="List 3">List 3</option>
            <option value="*****" selected>*****</option>
          </select>
        </div>
        <div class="col-sm-2">
          <select class="form-control">
            <option value="Geo Area 1">Geo Area 1</option>
            <option value="Geo Area 2">Geo Area 2</option>
            <option value="Geo Area 3">Geo Area 3</option>
            <option value="*****" selected>*****</option>
          </select>
        </div>
        <div class="col-sm-2">
          <select class="form-control">
            <option value="Partner 1">Partner 1</option>
            <option value="Partner 2">Partner 2</option>
            <option value="Partner 3">Yahoo 3</option>
            <option value="*****" selected>*****</option>
          </select>
        </div>

        <div class="col-sm-1">
          <input type="number" min="0" class="form-control" placeholder="T %">
        </div>
        <div class="col-sm-2">
          <select class="form-control">
              <option value="Keyword List 1">Keyword List 1</option>
              <option value="Keyword List 2">Keyword List 2</option>
              <option value="Keyword List 3">Keyword List 3</option>
              <option value="*****" selected>*****</option>
          </select>
        </div>
        <div class="col-sm-1 tac">
          <div class="fa fa-remove cursor mt10 delRule"></div>
        </div>
      </div>
      <br>
      <?php
}
      ?>
      
</div>

<a href="javascript:void(0)" id="add">Add</a>


   </div>
</div>
<?php include('includes/footer.php'); ?>
<script type="text/javascript">
$(document).ready(function(){

var generatedKeywords = [
   { name: "verticals 1", score: 0 },
   { name: "verticals 2", score: 0 },
   { name: "verticals 3", score: 0 },
   { name: "verticals 4", score: 0 }
    
];
var arr = $.map(generatedKeywords, function(n,i){
   return [[ n.name]];
});

// console.log(arr);
   

    $('.verticalsselect').change(function(e){
      var id = $("this").attr('id');//0
      var current_verticals = this.value;//Vertical 1

      for (var i = 0; i <= 3; i++) {
      
        if(id!=i){

          var loopvalue = $("#"+i).val();//****
          // alert(loopvalue);
          if(current_verticals==loopvalue){
            // alert("already selected");
          }


        }

      }


      });

    })





  


</script>
