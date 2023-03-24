<?php
// Als er op bewaar wordt geklikt, bewaar het in de WP option.
if(isset($_POST['wphw_submit'])){
  //monial1
    for($i = 1; $i < 4; $i++) {
      update_option('testimonial'.$i, trim($_POST['testimonial'.$i]));
      update_option('testimonial'.$i.'n', trim($_POST['testimonial ' . $i .'n']));
      update_option('testimonial'.$i.'i', trim($_POST['testimonial' . $i . 'i']));

      if($_FILES['testimonial'.$i.'i']['name'] != ''){
        $uploadedfile = $_FILES['testimonial'.$i.'i'];
        $upload_overrides = array( 'test_form' => false );
    
        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
        $imageurl = "";
        if ( $movefile && ! isset( $movefile['error'] ) ) {
           $imageurl = $movefile['url'];
           update_option("testimonial".$i."_image", $imageurl);
        } else {
           echo $movefile['error'];
        }
      }
    }

    
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
            <form action="" name='myform' method="post" enctype="multipart/form-data">
                <table class="form-table">
                  <?php 
                   for($i = 1; $i < 4; $i++) {
                  ?>
                        <!-- monial1 -->
                    <tr>
                        <td><textarea maxLength="255" name="testimonial<?php echo $i ?>" rows="10" cols="30"><?php echo get_option('testimonial'.$i);?></textarea></td>
                        <td scope="row">Author</td>
                        <td><input name="testimonial<?php echo $i ?>n" type="text" value="<?php echo get_option('testimonial'.$i.'n');?>"></td>
                        <td>
                            <input type="file" accept="image/*" id="testimonial<?php echo $i ?>i" name="testimonial<?php echo $i ?>i">
                            <img id="previewImage" src="<?php echo get_option('testimonial'.$i.'_image');?>" alt="Preview Image">
                        </td>
                     </tr>
                  <?php } ?>
    <!-- monial2 -->
    <tr>
        <td scope="row">&nbsp;</td>
        <td><input type="submit" name="wphw_submit" value="Opslaan" class="button-primary"></td>
    </tr>
    </div>

</div>
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
<?php 
/*
if ( ! function_exists( 'wp_handle_upload' ) ) require_once( ABSPATH . 'wp-admin/includes/file.php' );
$uploadedfile = $_FILES['testimonial1i'];
$upload_overrides = array( 'test_form' => false );
add_filter('upload_dir', 'my_upload_dir');
$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
remove_filter('upload_dir', 'my_upload_dir');

if ( $movefile ) {
    echo "File is valid, and was successfully uploaded.\n";
    var_dump( $movefile);
} else {
    echo "Possible file upload attack!\n";
}

function my_upload_dir($upload) {

  $upload['subdir'] = '/sub-dir-to-use' . $upload['subdir'];

  $upload['path']   = $upload['basedir'] . $upload['subdir'];

  $upload['url']    = $upload['baseurl'] . $upload['subdir'];

  return $upload;

}
*/
?>