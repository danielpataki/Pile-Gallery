# Pile Gallery For WordPress

Pile Gallery is a WordPress plugin which allows users to create piled galleries based on posts or their media items.

## Getting Started

Pile Gallery allows users to display grouped galleries (based on taxonomies or custom selections) in post content. This is achieve by creating a custom post type named `pile_gallery` which in turn is used to populate a shortcode. The contents of each Pile Gallery is set up in the posts for this post type. The ID of the post is added to the `pile_gallery` shortcode which displays the gallery. Shortcode parameters can be used to fine-tune the display of the gallery.

## Hook Reference

We've included a number of hooks in the plugin for your developing pleasure. If you require something different please do let us know, our goal is to make Pile Gallery easy to work with.


### pile_gallery/before_shortcode

This **action** runs just before the gallery is shown. It can be used to inject some HTML before the gallery. It takes two parameters. The first parameter, `$atts` contains the attributes passed to the shortcode. The second parameter, `$pile` is an array which defines the piles and their contents.


### pile_gallery/after_shortcode

This **action** runs just after the gallery is shown. It can be used to inject some HTML after the gallery. It takes two parameters. The first parameter, `$atts` contains the attributes passed to the shortcode. The second parameter, `$pile` is an array which defines the piles and their contents.



### pile_gallery/pile_content

This **filter** runs on **all** piles, regardless of their type (post, media or custom). It takes one parameter, the `$pile` array which contains the piles and their contents.



### pile_gallery/pile_content_[type]

This **filter** runs on piles of the given type. The type may be `post`, `gallery` or `custom`. This filter always runs after the general `pile_gallery/pile_content` filter. It takes one parameter, the `$pile` array which contains the piles and their contents.



### pile_gallery/post_query_args

This **filter** allows you to modify the arguments passed to the `WP_Query` object while retrieving the posts for Pile Galleries which are based on posts. Beware, removing the `tax_query` will remove the retrieval by category.


### pile_gallery/gallery_query_args

This **filter** allows you to modify the arguments passed to the `WP_Query` object while retrieving the posts for Pile Galleries which are based on media items. Beware, removing the `tax_query` will remove the retrieval by category.
