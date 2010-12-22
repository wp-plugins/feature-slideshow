=== Plugin Name ===
Contributors: Bakke
Donate link: http://sleek.no
Tags: featured, feature, slideshow, jquery, posts, frontpage
Requires at least: 2.7
Tested up to: 3.0.3
Stable tag: 1.0.6-beta 

Retrives posts / pages and creates a jQuery driven slideshow, with a vertical list of post titles and a short excerpt.

== Description ==


Retrives posts / pages and creates a jQuery driven slideshow (using the post feature images), with a vertical list of post titles and a short excerpt.


**Key features:**

* Easy customization 
 * Choose size of the slideshow 
 * Choose number of posts to be displayed and specify categories, tags etc. 
 * With a small understanding of CSS you can even create your own themes.

* Posts are automatically added to the slideshow, if they are amoung the target posts.

* Posts feature image will automatically be used for the slideshow.

* Automatic scaling and cropping of images



This Slideshow is based on the Feature List by <a href="http://jqueryglobe.com/">jQueryGlobe</a>.

You can see the slideshow in action over at <a href="http://pervelde.idrift.no/">Per Veldes website</a>.

== Installation ==


1. Copy the <code>feature-slideshow</code> folder and all its contents to the <code>/wp-content/plugins/</code> directory

2. Activate the plugin through the 'Plugins' menu in WordPress.

3. Set your desired settings under 'Settings' --> 'Feature Slideshow'

4. Make sure all posts that will be displayed in the slideshow has a feature image

5. Place the <code>[feature-slideshow]</code> shortcode in a post / page, or put <code>feature_slideshow_init();</code> in your code, 
where you want the slideshow.

== Frequently Asked Questions ==

If you can't find your answer here, please post your question <a href="http://sleek.no/kunder/138">here</a>.
 

= How can i customize the slideshow? =

You can create a new theme simply by creating a new folder within the <code>themes</code> folder, and give it the name of your theme. Inside it place a dynamic stylesheet called <code>style.php</code>. To make sure you get the necessary styles, it might be a good idea to copy an existing stylesheet file from another theme, and edit it.

== Screenshots ==

1. Example of Feature Slideshow
2. Admin area

== Changelog ==

= 1.0.5 =

* Fixed jQuery conlict in adminpanel.

= 1.0.2 =

* Automatic cropping of images in the slideshow

* Option in adminpanel for setting transition interval

* <code>feature_slideshow_init();</code> bug fixed

= 1.0.1 =
* First release of the Feature Slideshow plugin.