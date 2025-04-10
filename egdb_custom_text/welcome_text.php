<!-- In this file the welocome page is created where you can select the worck tools -->
<!-- <html>  -->
 <div class="container"> 
  <!-- <div class="cover_img"> -->
    <!-- <h1 id="welcome_h1"><img src='<?php //echo "$images_path/db_logo_large.png";?>' alt="Mouse_Logo" style="height:200px;"><br> Welcome to the <br> Lung Atlas</h1> -->
  <h1 id="welcome_h1">Welcome to the <br> Lung Atlas</h1>
  </div>

  <!-- <div id="box"> -->
    <!-- <div class="row"> -->
      <!-- <div class="select">
        <a href="/easy_gdb/tools/expression/comparator_input.php" class="d-flex zoom-img">
          <img src="<?php //echo $images_path.'/tools/exp_comparator.png'?>" alt="expression viewer" width="250px" height="250px" class="solid alignnone size-medium wp-image-3011 rounded-circle image">
        </a>
        <div class="text">
          <strong>Expression Comparator</strong>
        </div>
      </div> -->
      <div class="select">
        <a href="/lung_atlas/egdb_custom_text/tools/expression/expression_input.php" style="text-decoration: none;">
        <button class="boton" >Multiomics Expression Viewer</button>
        </a>
      </div>
      <!-- <div class="select">
        <a href="/easy_gdb/tools/expression/expression_input.php" class="d-flex zoom-img">
          <img src="<?php //echo $images_path.'/tools/exp_expre_viewer.png'?>" alt="Comparator" width="250px" height="250px" class="solid alignnone size-medium wp-image-3011 rounded-circle image">
        </a>  
        <div class="text">
          <strong>Experiment Expression Viewer</strong>
        </div>
      </div> -->
    <!-- </div> -->
  <!-- </div> -->
</div>
<!-- </html> -->


<!-- Style css -->
<style>      

#welcome_h1 {
  margin-top: 80px;
  text-align: center;
  font-size: 100px;
  font-weight: bold;
  line-height: 1.2;
  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
  color: #fff;
  width: 100%;
}

/* #welcome_h1 img {
  width: 15vw; 
  height: 15vw !important; 
} */


  .image {
    background-color:#fff;
    /* object-fit:contain; */
  }

  .text {
    text-align:center;
    font-size:20px;
  }

  .page_container {
    background-image: url('<?php echo $images_path.'/Image_02_a.webp'?>');  
    background-size:cover;
    background-repeat: no-repeat; 
    min-height: 100dvh !important; 
  }

  .container {
  display: flex;
  justify-content: center;
  align-items: center;    
  /* height: 100%; */
}

  .boton {
  display: block;
  margin: auto;
  padding: 20px 35px;
  border: none;
  border-radius: 5px;
  background-color:rgb(97, 76, 175);
  color: #fff;
  font-size: 18px;
  cursor: pointer;
  /* font-weight: bold; */
  margin-top: 35px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.7); /* establece una sombra negra con un radio de 10px y una opacidad del 50% */
} 


.boton:hover {
  background-color:rgb(54, 167, 219);
}

.select{
  margin-top: 15vh;
  margin-bottom: 15vh;
}

#gdb_footer {
  margin-top: 0px !important;
}

</style>
