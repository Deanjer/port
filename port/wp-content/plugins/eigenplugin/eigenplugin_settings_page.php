<?php
// Als er op bewaar wordt geklikt, bewaar het in de WP option.
if(isset($_POST['wphw_submit'])){
  //monial1
    $testimonial1 = trim($_POST['testimonial1']);
     update_option('testimonial1', $testimonial1);
     $testimonial1n = trim($_POST['testimonial1n']);
     update_option('testimonial1n', $testimonial1n);
     //monial2
     $testimonial2 = trim($_POST['testimonial2']);
     update_option('testimonial2', $testimonial2);
     $testimonial2n = trim($_POST['testimonial2n']);
     update_option('testimonial2n', $testimonial2n);
     //monial3
     $testimonial3 = trim($_POST['testimonial3']);
     update_option('testimonial3', $testimonial3);
     $testimonial3n = trim($_POST['testimonial3n']);
     update_option('testimonial3n', $testimonial3n);
}
?>
<div class="wrap">
 <h2>Beheer tekst</h2>
 <?php if(isset($_POST['wphw_submit'])): ?>
 <div id="message" class="updated below-h2">
   <p>Opgeslagen!</p>
 </div>
 <?php endif; ?>
 <div class="metabox-holder">
   <div class="postbox">
     <h3>Wijzig teksten</h3>
     <form action="" method="post">
       <table class="form-table">
         <tr>
           <td scope="row">Tekst</td>
           <?php echo "<br>"; ?>
           <!-- monial1 -->
           <tr>
           <td><textarea maxLength="255" name="testimonial1" rows="10" cols="30" >
          <?php echo get_option('testimonial1');?></textarea></td>
          <td scope="row">Author</td>
          <td><input name="testimonial1n" type="text" value="<?php echo get_option('testimonial1n');?>"></td>
          <td>
  <input type="file" accept="image/*" id="fileInput" name="testimonial1i">
  <img id="previewImage" src="#" alt="Preview Image">
 
</td>

</div>

</div>

          </tr>
          <!-- monial2 -->
          <tr>
          <td><textarea maxLength="255" name="testimonial2" rows="10" cols="30" >
          <?php echo get_option('testimonial2');?></textarea></td>
          <td scope="row">Author</td>
          <td><input name="testimonial2n" type="text" value="<?php echo get_option('testimonial2n');?>"></td>
          <input type="file" accept="image/*" id="fileInput" name="testimonial2i">
  <img id="previewImage" src="#" alt="Preview Image">
          </tr>
          <!-- monial3 -->
          <td><textarea maxLength="255" name="testimonial3" rows="10" cols="30" >
          <?php echo get_option('testimonial3');?></textarea></td>
          <td scope="row">Author</td>
          <td><input name="testimonial3n" type="text" value="<?php echo get_option('testimonial3n');?>"></td>
          
         </tr>
         <tr>
           <td scope="row">&nbsp;</td>
           <td><input type="submit" name="wphw_submit" value="Opslaan" class="button-primary"></td>
         </tr>
       </table>
     </form>
   </div>
 </div>
</div>
<script> 
  const fileInput = document.getElementById('fileInput');
const previewImage = document.getElementById('previewImage');

fileInput.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.addEventListener('load', function() {
      previewImage.setAttribute('src', reader.result);
    });
    reader.readAsDataURL(file);
  }
});

</script>