<?php
	Header("Content-type: text/css");
	$feature_slideshow_width = strip_tags($_GET['width']);
	$feature_slideshow_height = strip_tags($_GET['height']);
	$feature_slideshow_image_width = strip_tags($_GET['imagewidth']);
	$feature_slideshow_p_width = strip_tags($_GET['pwidth']);
	$feature_slideshow_p_size = strip_tags($_GET['psize']);
?>

#feature-slideshow-container {
	margin: 0;
	padding: 5px;
    background: #fff;
    border: 1px solid #ccc;
    width: <?php echo $feature_slideshow_width; ?>;
}

#feature-slideshow {
	width: <?php echo $feature_slideshow_width; ?>;
	height: <?php echo $feature_slideshow_height; ?>;
	overflow: hidden;
	position: relative;
}

        #feature-slideshow h3 {
            margin: 0 0 5px 0;	
            padding: 0;
            font-size: 16px;
            line-height: 1;
        }

		#feature-slideshow ul {
			position: absolute;
			top: 0;
			list-style: none!important;	
			padding: 0;
			margin: 0;
            height: <?php echo $feature_slideshow_height; ?>;
		}

		#feature-slideshow ul#tabs {
			right: 0;
			z-index: 2;
			width: 320px;
            list-style: none !important;
            margin: 0;
            padding: 0;
		}

		#feature-slideshow ul#tabs li {
			font-size: 12px;
			font-family: Arial;
			width: 287px;
			margin: 1px 0 0 33px;
            padding: 0;
			background: url('images/feature-tab-link.png') left center repeat-x;
            text-align: right;
		}
		
		#feature-slideshow ul#tabs li:first-child {
			margin: 0 0 0 33px;
		}
		
		#feature-slideshow #tabs li img {
			padding: 5px;
			border: none;
			float: left;
			margin: 10px 0 0 10px;
		}

		#feature-slideshow ul#tabs li a {
			color: #333;
			text-decoration: none;	
			display: block;
			padding: 10px;
			height: 60px;
			outline: none;
            line-height: 1;
		}
		
		#feature-slideshow ul#tabs li a:hover {
			color: #333 !important;
		}
		
		#feature-slideshow ul#tabs li a h3 {
			font-family: Georgia, "Times New Roman", Times, serif;
			color: #3e96da;
			font-size: 21px;
		}
		
		#feature-slideshow ul#tabs li a span {
			font-size: 12px;
			line-height: 1.2;
		}

		#feature-slideshow ul#tabs li a.current {
			background: url('images/feature-tab-current.png');
			width: 267px;
			color: #fff;
			padding-left: 43px;
            position: relative;
            right: 33px;
		}
		
		#feature-slideshow ul#tabs li a.current:hover {
			color: #fff !important;
		}

		#feature-slideshow ul#tabs li a.current:hover {
			text-decoration: none;
			cursor: default;
		}

		#feature-slideshow ul#output {
			left: 0;
			width: <?php echo $feature_slideshow_image_width; ?>;
			height: <?php echo $feature_slideshow_height; ?>;
			position: relative;
            list-style: none!important;	
			padding: 0;
			margin: 0;
		}

		#feature-slideshow ul#output li {
			position: absolute;
			width: <?php echo $feature_slideshow_image_width; ?>;
			height: <?php echo $feature_slideshow_height; ?>;
            margin: 0;
            padding: 0;
		}
        
        #feature-slideshow ul#output li a img {
        	margin: 0;
            padding: 0;
            boreder: 0;
            border-style: none;
        }
		
		#feature-slideshow ul#output li p {
			width: <?php echo $feature_slideshow_p_width; ?>;
			position: absolute;
			bottom: 10px;
			left: 15px;
			font-size: <?php echo $feature_slideshow_p_size; ?>;
			line-height: 1.6;
			color: #000;
			background: #FFF;
			padding: 10px 20px;
			
			filter:alpha(opacity=70);
			-moz-opacity:0.7;
			-khtml-opacity: 0.7;
			opacity: 0.7;
		}
        
        #feature-slideshow  .clear {
        	width: 100%;
            clear: both;
        }