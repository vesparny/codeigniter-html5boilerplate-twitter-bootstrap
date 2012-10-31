### A CodeIgniter skeleton application based on twitter bootstrap and html5boilerplate.
---------------------------------------------------

	VERSION 1.1.2

* Codeigniter 2.1.3
* bootstrap 2.2.1
* html5boilerplate 4.0.0
* unique style css contains all bootstrap css (responsive and basic), and global css for custom styles.
* unique plugin js contains all bootstrap plugins.
* view rendering handled by a smart MY_Controller.
* jQuery 1.8.2
* underscore.js 1.3.3
* nav_helper
* .htacces tip for remove index.php
* basejs view always include in page. (usefull to access via js some server side information e.g. base_url())

USAGE
-------------------
1. edit .htaccess file in order to match your server config (see line 5 in the file);
	if you have http://localhost/site you nedd to set RewriteBase /site/
2. set up yor defaults values in application/config/development/custom.php
3. take a look to home controller and template view files to understand how does rendering works.
4. create your template: i've set up an header, footer, nav, and main for example purpose. Skeleton.php contains the scaffolding page.
5. pass your data to the view using in controller $this->data["my_var"] = "value";

My_Controller
------------------- 
is made for my basic page template.
You need to customize it in order to match your needs.
Feel free to improve it.
Send a pull request, or contact me.

Author
------------------- 

####Alessandro Arnodo

+	[@vesparny](https://twitter.com/vesparny)

+	[http://arnodo.net](http://arnodo.net)

+	<mailto:alessandro@arnodo.net>