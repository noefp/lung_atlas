<header>
<?php include_once realpath("../../../../easy_gdb/header.php");?>
<?php include_once realpath("../functions/modal.html");?>

</header>

<body>
<div>
  <a class="float-right margin-20" href="/easy_gdb/help/08_gene_expression.php" target="_blank"><i class='fa fa-info' style='font-size:20px;color:#229dff'></i> Help</a>

    <a onClick="history.back()" class="float-left margin-20 cursor-pointer" style="cursor: pointer"><i class="fas fa-reply" style="color:#229dff"></i> Back to input</a>
    <br><br>
    <h1 class="text-center" style="color:#343a40;">Multiomic Reference Atlas Results</h1>
</div>

<div id="loader_main" class="loader"></div>
<div id="expression_output" class="margin-20" style="display:none" >

  <!-- This message would be displayed when the information in the Json "expression_colors" arrays does not match the size -->
<!-- <div id="color_default" class="alert alert-info" style="display:none"><strong>Info:</strong> The default palette has been selected because the size of the attributes
"expression_colors" in <i>"expression_info.json"</i> do not match !!!</div> -->

<?php 

// $dataset_file_name=["CP10K_matrix_Ctrl-ARDS_sc_v01.txt","RNA-seq_ARDS_lung.txt","RNA-seq_SARSCOV2_ricin.txt","lungs_proteomics_young-old_v02.txt"];
$dataset_file_name=["CP10K_matrix_Ctrl-ARDS_sc_v01.txt","RNA-seq_ARDS_lung.txt","RNA-seq_SARSCOV2_ricin.txt","lungs_proteomics_young-old_scaled_data_v01.txt"];

$gids = [];

  // get post data
  $gene_list = $_POST["gids"];  
  if(isset($gene_list)) {
        
    foreach (explode("\n",$gene_list) as $one_gene) {
      $one_gene = rtrim($one_gene);
      if(!in_array($one_gene,$gids)){
        array_push($gids,$one_gene); // array with the data from "expression_input.php post"
      }
    }
//--------------- end get post data -----------------------------------------------------------------    
//----- find if the grids are in the datasets files----------------------------------------------------
include realpath('../functions/01_expr_not_found.php');

//--------------- end find -----------------------------------------------------------------
   
  
//   // get data from the files dataset_file_name and Ids selection from "expression_input.php post"
include_once realpath("../functions/data_function.php");

$data1=get_data($dataset_file_name[0],$gids,"table1");
$data2=get_data($dataset_file_name[1],$gids,"table2");
$data3=get_data($dataset_file_name[2],$gids,"table3");
$data4=get_data($dataset_file_name[3],$gids,"table4");
// $data5=get_data($dataset_file_name[4],$gids);;

// load expressions colors and ranges
include_once realpath("../functions/01_expr_colors_range.php");

// create cartoons
include_once realpath("../functions/03_expr_load_cartoons_html.php");

// create lines graph
include_once realpath("../functions/03_expr_load_bars_html.php");

// create heatmap
include_once realpath("../functions/03_expr_load_heatmap_html.php");

// create replicates graph
include_once realpath("../functions/03_expr_load_replicates_html.php"); // no

// create data table
include_once realpath("../functions/03_expr_load_avg_table_html.php");


// Description dataset
include_once realpath('../functions/01_expr_load_dataset_description.php');
//---- end description dataset ------------------------------------------------------------
}
?>
</div>
</body>

<footer>
<?php include realpath('../../../../easy_gdb/footer.php'); ?>
</footer>

<style>

.banner {
  /* color:rgb(101, 63, 40); */
  /* background-color:#d9bf9e; */
  color:'#229dff';
}

.banner:hover {
    /* color:#229dff; */
    color:white;
    /* background-color:#d9bf9e; */
  }
  
</style>

<script>
  $(document).ready(function() {
    
    $("#loader_main").hide();
    $("#expression_output").show();
  })
</script>

