# WP Niche Product

[Download from WordPress Directory](https://wordpress.org/plugins/wp-niche-products/)


```
Contributors: hmbashar
Tags: Recommended Product, Featured Product, Best Product, Niche site product, niche site product review, product review for niche site, niche site plugin
Requires at least: 3.0
Tested up to: 5.0.3
Stable tag: 4.3
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
```

*This product for show recommended product to compare for your niche site. You can recommend any product in your niche site article using this plugin, Shortcode for product area wraper  [wp_niche_row]Content Here [/wp_niche_row] and [wp_niche_product] for single product*

## Description

This product for show recommended product to compare for your niche site. You can recommend any product in your niche site article using this plugin, Shortcode for the product area rapper  **[wp_niche_row]** Content Here **[/wp_niche_row]** and **[wp_niche_product]** for single product


<a href="http://www.codingbank.com/plugins/wp-niche-products">Demo Here</a>


### Shortcode for Row 
	[wp_niche_row]  Content Here [/wp_niche_row]

### Single Column Product
	[wp_niche_product]


### Product column 

* Attributes Support
	**[wp_niche_product]** for single product
	* **wnp_name** for column name
	* **wnp_title** for Product Title
	* **img_url** for product image
	* **link_text** for Link text
	* **link** for product url
	* **rating** for rating
	* **icon** for show icon below your column name, You can get icon from [FontAwesome](https://fontawesome.com/icons)
	* **link_bg_color** for change product link background color
	* **column** for column management <a href="https://getbootstrap.com/docs/4.2/layout/grid/#grid-options">(bootstrap4 grid system)</a>


### Full Code for single product 
<pre>[wp_niche_product wnp_name="Best Choose" wnp_title="Lorem ipsume title here lorem ipsume" img_url="http://localhost/test/wp-content/uploads/2019/02/wp-niche-image.png"  link_text="Read More" link="https://facebook.com" rating="5" icon="fab fa-twitter" link_bg_color="green"]</pre>

### Full code with row 
<pre>
[wp_niche_row]

[wp_niche_product wnp_name="Best Choose" wnp_title="Lorem ipsume title here lorem ipsume" img_url="http://localhost/test/wp-content/uploads/2019/02/wp-niche-image.png"  link_text="Read More" link="https://facebook.com" rating="5" icon="fab fa-twitter" link_bg_color="green"]

[/wp_niche_row]
</pre>

### Single Design Image Product
	[wpns_product]


### Single Design Image Product 

* Attributes Support
	**[wpns_product]** for single image product
	* **nsp_title** for Product Title
	* **img_url** for product image
	* **link_text** for Link text
	* **link** for product url
	* **img_hover_url** for Hover Image (Amazon image)


### Example Code for image product 
<pre>[wpns_product nsp_title="Lorem Ipsume title here" link_text="Learn More" img_url="http://localhost/test/wp-content/uploads/2019/02/Slide1.png"]</pre>




* **Note:** *If your theme used bootstrap 3 then it may conflict with this plugin, But I'm not sure, If you face any issue with this plugin, <a href="https://github.com/hmbashar/wp-niche-product/issues">please let me know</a>, I will be trying to fix it.*


### How to use Video 
https://youtu.be/woV3Dja5Obc

### Features 
* Show Product
* Responsive
* Boostrap 4
* FontAwesome 5 *free version*
* Change color
* Customizable
* And More
* You’re Welcome to [Github Repo](https://github.com/hmbashar/wp-niche-product) for features/pull request



### Installation

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Plugin Name screen to configure the plugin
1. (Make your instructions match the desired user flow for activating and installing your plugin. Include any steps that might be needed for explanatory purposes)


### Changelog 

#### 1.0
* Init Version

#### 1.0.1
* New Design Added