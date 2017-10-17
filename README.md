Mint & Marzipan
===

Mint & Marzipan is a fully responsive theme with a dynamic layout that changes to accomodate any device or display size. Featuring modern design trends such as a full-page landing and parallax scroll, Mint & Marzipan gives users a fashionable online home for their business.

Getting Started
---------------

Because this theme makes heavy use of plugins, getting started is a bit more complex. This section will guide you through the following steps:

1. Installing the theme
2. Installing the necessary plugins
3. Importing post-type and field starter data
4. Editing your website

Let's get going, shall we?

### Installing the theme

Inside a WordPress Installation, clone this repository to `~wordpress/wp-content/themes`. This should make the theme available inside your themes menu on the WordPress dashboard. 

### Installing the plugins

This theme utilizes two plugins that you will need to effectively manage the content. Your next step will be to navigate to the 'Plugins' menu, then download and activate 1) 'Advanced Custom Fields', 2) 'Custom Post Types UI'. These will give you the interface you need to work with the content easily from the WP dashboard.

### Importing fields and post-types

Once the plugins are installed, you will need to link the plugins with the PHP used in the theme templates. Don't worry, I've made this easy. 

The PHP references named fields and post types. Included with this repository is an xml file containing all of this information. Go to your WP dashboard, then Tools -> Import. On this screen, scroll down to "WordPress" and click "Run Importer". Select "Choose File", and find `import-me.xml` at the root of this repository. Select 'Upload file and import'.

When this is finished, your dashboard will be filled with several new menu options. The next section will discuss how to use these.

### Editing your website

Everything on this theme is located on a single page called 'home'. If it is not already, set this to your static front page at Appearance -> Customize -> Static Front Page. 

Next, return to the Dashboard, go to Pages, then open up 'home' for editing. Scroll down past 'Page Attributes' and 'Featured Image' to find the custom fields we installed in the previous step. If these do not appear, check out `Troubleshooting` below. Fill out each input field according to your liking. This should generate the majority of the site content, but oh no! Your menu is just nonsense about catfish!

The menu section is comprised of four different menu categories, appropriately named "Menu Category 1", "Menu Category 2", and so on. We assume you will have a Breakfast (1), Lunch (2), Dinner (3) and Sides (4). See troubleshooting for steps to re-name these fields. To add a entry under any of these categories, select the corresponding menu in the Dashboard and click 'Add New'. You will be taken to the post edit screen.

At the top, you'll see a big input field with "Enter Title here". This is built-in WordPress stuff, and doesn't do anything for us. Ignore this, and scroll down to the "Menu Item" form. This is what you want. Fill in the information as you wish, and click publish. Your item is now listed on the website under the appropriate category.

As with the Menu Categories, Directions to your business are also edited via their own custom post type. Follow directions as above, but selecting the "Directions" pin from the Dashboard. Scroll down to 'Directions' form and add directions as you wish.

And that should be all. If you're having trouble, check out Troubleshooting below. Otherwise, have fun and enjoy your new website!

Troubleshooting
---------------

### Importing that stupid xml file didn't do anything!

No worries. This happened to me, too. WordPress is pretty smart, but sometimes needs a little help. The information is there, but WordPress isn't aware of it yet. We can fix this. 

1. Open the 'Custom Fields' menu on your dashboard and select 'Custom Fields'
2. There should be a list of 12 field groups
3. Visit each one by clicking 'Edit'
   - You don't need to do anything here. Just click 'Update'
   - WordPress will not be aware that this field exists
4. Return to editing the 'home' page, now with the field groups showing

### We don't serve breakfast! (or lunch, or dinner, or sides)

Okay, then having a 'Breakfast Menu' probably doesn't work for you, does it? Luckily, this can be easily fixed. Just open the Custom Post-Types UI (CPT UI) menu in the Dashboard, and select 'Add/Edit Post Types'. 

The theme grabs the field 'Singular Label' from each post type and uses that as its display title on the website. Select the 'Edit Post Types' tab from the CPT UI, and use the top drop-down menu to select the field you're interested in re-naming. Scroll down a little bit and there it is-- 'Singular Label'. Edit this to whatever you want, then click 'Save Post Type'.

When you return to your website, the menu category will now display your custom title. Hurray!

Special Thanks:
--------------

This theme was built using the very handy _s theme from http://underscores.me.