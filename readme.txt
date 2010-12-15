=== Plugin Name ===
Contributors: Bakke
Donate link: http://sleek.no
Tags: featured, feature, slideshow, jquery, posts, frontpage
Requires at least: 2.7
Tested up to: 3.0.2
Stable tag: 0.5

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



This Slideshow is based on the Feature List by <a href="http://jqueryglobe.com/">jQueryGlobe</a>.

You can see the slideshow in action over at <a href="http://pervelde.idrift.no/">Per Veldes website</a>.

== Installation ==


1. Copy the <code>feature-slideshow</code> folder and all its contents to the <code>/wp-content/plugins/</code> directory
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Set your desired settings under 'Settings' --> 'Feature Slideshow'
5. Place the <code>[feature-slideshow]</code> shortcode in a post / page, or put <code>feature_slideshow_init()</code> in your code, 
where you want the slideshow.
6. Update your feature images for the posts that will be displayed.

Remember to update your feature post images for all the affected posts after customizing the slideshow (changing number of posts or width).

== Frequently Asked Questions ==

If you can't find your answer here, please post your question <a href="http://sleek.no/kunder/138">here</a>.


= The pictures in the slideshow aren't cropped right? =

You have to update your feature image for the affected posts.

= How can i customize the slideshow? =

You can create a new theme simply by creating a new folder within the <code>themes</code> folder, and give it the name of your theme. Inside it place a stylesheet called <code>style.css</code>. To make sure you get the necessary styles, it might be a god idea to copy an existing stylesheet file from another theme, and edit it.

== Screenshots ==

1. Example of Feature Slideshow
2. Admin area

== Changelog ==


= 0.5 =
* First release of the Feature Slideshow plugin.