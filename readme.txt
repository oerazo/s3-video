=== S3 Video Plugin ===
Contributors: Anthony.Mills
Plugin URI: https://github.com/anthony-mills/S3-Video
Author URI: http://www.development-cycle.com
Tested up to: 3.2.1
Tags: S3, Video, Embed

The S3 Video Plugin video allows the ability to store and embed video media using Amazons's S3 storage service.

== Description ==
The S3 Video Plugin allows the embedding of video media stored on Amazon's S3 storage into a Wordpress blog post or page. 

== Installation ==
1. Unzip plugin and upload to the wp-content/plugins directory of your Wordpress install.
2. Make sure your install has a wp-content/uploads directory and that it is writable by the web server user.
3. Activate the plugin throught the "plugins" menu found in the Wordpress backend.
4. In order to upload large .flv and .mp4 files to S3 through the backend you will need to increase the PHP upload limit sizes. If you are using Apache as you webserver 
this can be done by creating a .htaccess file if one doesn't already exist in the root of your Wordpress installation and adding the following lines:

php_value upload_max_filesize 200M
php_value post_max_size 200M

5. Log into your AWS account and create a new bucket to store your video files.
6. Enter your Amazon access keys and bucket name on the plugin settings page.

== Frequently Asked Questions ==

= Can i change the size of the player in my page? =
Yes, just add height and width tags to your embed shortcode with the dimensions in pixels e.g

To define the player as 640 pixels wide by 380 pixels high
[S3_embed_video file="myVideo.flv" width="640" height="380"]

== Screenshots == 
1. A video playing from S3 embedded into a test page

== Changelog ==

= 0.2 =
Ability to get standard embed code for a video allowing S3 videos to be embedded in pages outside of wordpress

= 0.1 =
The initial release, alot of polishing still needs to take place but it works.