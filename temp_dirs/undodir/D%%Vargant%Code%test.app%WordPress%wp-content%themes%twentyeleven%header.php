Vim�UnDo� �9�8�� %C
��ԛt �z���O�Ӻ�/S   f                               S�wnS�wn    _�                      O       ����                                                                                                                                                                                                                                                                                                                            z          O          v   S�wmS�wm    �   N   P   �   ,   8				// Check to see if the header image has been removed   '				$header_image = get_header_image();   				if ( $header_image ) :   >					// Compatibility with versions of WordPress prior to 3.4.   4					if ( function_exists( 'get_custom_header' ) ) {   						/*   W						 * We need to figure out what the minimum width should be for our featured image.   a						 * This result would be the suggested width if the theme were to implement flexible widths.   							 */   J						$header_image_width = get_theme_support( 'custom-header', 'width' );   					} else {   /						$header_image_width = HEADER_IMAGE_WIDTH;   					}   					?>   7			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">   					<?php   					/*   					 * The header image.   U					 * Check if this is a post or page, if it has a thumbnail, and if it's a big one   					 */   =					if ( is_singular() && has_post_thumbnail( $post->ID ) &&   �							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&   +							$image[1] >= $header_image_width ) :   -						// Houston, we have a new header image!   A						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );   					else :   ?						// Compatibility with versions of WordPress prior to 3.4.   5						if ( function_exists( 'get_custom_header' ) ) {   9							$header_image_width  = get_custom_header()->width;   :							$header_image_height = get_custom_header()->height;   						} else {   1							$header_image_width  = HEADER_IMAGE_WIDTH;   2							$header_image_height = HEADER_IMAGE_HEIGHT;   						}   						?>   �					<img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />   F				<?php endif; // end check for featured image or standard header ?>   			</a>   8			<?php endif; // end check for removed header image ?>       			<?php    				// Has the text been hidden?   .				if ( 'blank' == get_header_textcolor() ) :   			?>5��