=== Plugin Name ===
Contributors: danielpataki
Donate link: http://pilegallery.com/
Tags: gallery
Requires at least: 3.5
Tested up to: 4.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create beautiful sortable and stackable galeries from your WordPress posts and media items

== Description ==

Create beautiful sortable and stackable galeries from your WordPress posts and media items. If you'd like to take a look at the plugin in action I suggest taking a look at the [Pile Gallery home page](http://pilegallery.com).

Pile Gallery can use any categories, tags or any custom taxonomy and create stacked galleries from your posts based on them. It will take the featured image of each post in a category and put them in a pile. The pile can be clicked to be expanded with a nice animation. The resulting images can then be clicked to go to the post or image.

A number of things can be customized on the back and the front end to make Pile Gallery more awesome. I am working on adding more andmore features, so if you need something, let me know :)

- Gallery source
- Animation delay
- Random rotation
- Columns
- Gutter

Pile Gallery should also work on all your devices like tablets and phones. It is completely responsive, going into a one-column layout on smaller screens

== Installation ==

1. Upload `pile-gallery.zip` to the `/wp-content/plugins/` directory
2. Unzip `pile-gallery.zip`
3. Activate plugin

== Frequently Asked Questions ==

= Can Pile Gallery use tags as well as categories? =

Yes, Pile Gallery can actually use any taxonomy you have set up so it will work with custom taxonomies as well

= How do I add categories to my media? =

Pile gallery can also assemble a gallery out of categorized media items but categorization of media is not available in WordPress by default. We recommend using [Media Categories](https://wordpress.org/plugins/media-categories-2/) to add categories to your media.

= How do I add my gallery to the site? =

You'll need to copy-paste the shortcode you see in your gallery list into a post's content.

== Upgrade Notice ==

= 1.0.0 =

No need to update, this is the first version :)

== Screenshots ==

1. A simple gallery consisting of 3 piles
2. When a pile is clicked the images inside are shown with a nice animation. The titles become visible on-hover
3. The admin side of things. Clicking on a pile allows you to customize it

== Changelog ==

= 1.0.2 =

- The ACF_LITE definition now uses a hook so it may be removed

= 1.0.1 =

- Better ACF Lite definition to make sure no problems occur if the constant is already defined (even better method coming soon)
- Added the $id argument to the `pile_gallery/post_query_args` hook

= 1.0.0 =
Initial Version
