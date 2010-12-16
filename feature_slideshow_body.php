<?php $return = '  	<div id="feature-slideshow-container">
	                <div id="feature-slideshow">
                    
                    	<ul id="tabs">';
						
								$fs_height = ($feature_slideshow_settings['numberposts'] * 81) - 1;
								$fs_width = $feature_slideshow_settings['width'] - 287;
                    
								$posts = get_posts("numerposts=" . $numerposts . "&orderby=" . $orderby . "&post_parent=" . $post_parent . "&post_type=" . $post_type . "&category=" . $category . "&tag=" . $tag);
                                
                                if($posts) {
                                    foreach($posts as $post):
                                        setup_postdata($post); 
										
										$return .= '<li>
                                            <a href="javascript:;">
                                                <h3>' . get_the_title($post->ID) . '</h3>
                                                <span>' . feature_slideshow_excerpt(10) . '</span>
                                            </a>
                                        </li>';
                                       
									endforeach;
                                }
                            
                            
                        
                        $return .= '</ul>
                        
                        <ul id="output">';
                    
                                $posts = get_posts("numerposts=" . $numerposts . "&orderby=" . $orderby . "&post_parent=" . $post_parent . "&post_type=" . $post_type . "&category=" . $category . "&tag=" . $tag);
                                
                                if($posts) {
                                    foreach($posts as $post):
                                        setup_postdata($post);
										
										if( has_post_thumbnail() ) {
											$thumb = wp_get_attachment_url( get_post_meta( $post->ID, '_thumbnail_id', true ) );
											$image = '<img src="' . $feature_slideshow_dir . 'timthumb.php?src=' . $thumb . '&h=' . $fs_height . '&w=' . $fs_width . '&zc=1" alt="" />';
										}
                                
                                        $return .= '<li>
                                            <a href="' . get_permalink($post->ID) . '">' . $image . '</a>
                                            <p>' . feature_slideshow_excerpt(10) . '</p>
                                        </li>';
                                       
									endforeach;
                                }
                        
                        $return .= '</ul>
                        
                        <div class="clear"></div>
                        
                    </div>
					</div>';