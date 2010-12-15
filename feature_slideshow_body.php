<?php $return = '  	<div id="feature-slideshow-container">
	                <div id="feature-slideshow">
                    
                    	<ul id="tabs">';
                    
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
										
										if( has_post_thumbnail ) {
											$thumb = get_the_post_thumbnail( $post->ID, "feature_slideshow_image" );
										}
                                
                                        $return .= '<li>
                                            <a href="' . get_permalink($post->ID) . '">' . $thumb . '</a>
                                            <p>' . feature_slideshow_excerpt(10) . '</p>
                                        </li>';
                                       
									endforeach;
                                }
                        
                        $return .= '</ul>
                        
                        <div class="clear"></div>
                        
                    </div>
					</div>';