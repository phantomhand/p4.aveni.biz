p4.aveni.biz
============

CSCI E-15 - Dynamic Web Applications - Project 4

SUMMARY: 

Prototype of database-driven website for Documentary Educational Resources (DER), a non-profit documentary film distributor.

--

DESCRIPTION:

My application allows users to browse and watch previews of a collection of documentary films, and to post messages and follow other members of the site's online community. It also allow users with administrator privileges to access a form for entering new films into the database.

I chose to build this application to gain a better understanding of the development process for a website with a database-driven back end. DER's current website consists of more than one thousand static HTML pages, making site maintenance and adding new content inefficient. The current DER site also serves only as a one way push of information, with no way for its users to add their voice to the site, or share input with other users. This new prototype website improves on both of these aspects while also introducing a clean new design aesthetic for the front end.

My application is built using the DWA course's proprietary PHP framework and a MySQL database for storing film-related data and user information in separate tables. It uses a few small bits of JavaScript/JQuery to control the behavior of selected content (details below).

I've used Twitter Bootstrap as the front end framework for the visual design.

--

FEATURES:
 	
Non-account holders:
	
	¥ Users can browse a selection of films and watch a video preview of each title. For this, no account is needed.
	¥ Users can sign up for an account, and can then log in to access more features of the site.

Account-holding users:

	¥ Users can log in and out of the site.
	¥ Logged in users can post messages to the Community area.
	¥ Logged in users can see a list of other members of the Community area.
	¥ Logged in users can follow or unfollow other members to see their posts.
	¥ Logged in users can upload a profile image to be used as their avatar across the site.
	¥ Logged in users can click on the names of other users to view their profile (targeted by user id number).

Administator-level users (contact me for admin log-in credentials):

	¥ Admin users can access an admin panel (via an additional link in the site's main navigation).
	¥ Admins can access a form to add new films into the database.
	
--

JAVASCRIPT:
	
The film page view uses a JQuery plug-in (Fancybox) to animate a window for the video preview. I've made a dedicated JS file (/js/fancybox/fancybox-controls.js) to control the optional parameters for this plugin, e.g. limit the size of the window and control the color and opacity of the backdrop which overlays the page while the window is open.

The app.js file (/js/app.js) includes a few small custom functions: 

1) Uses the JQuery .toggleClass() attribute to hide and show the image upload form on the user profile page (/users/profile).

2) Uses the JQuery .focus() method to automatically focus on the first field in forms on the site. This is handy on the Add a Film form, which has many fields and which would otherwise place the focus somewhere in the middle of the form.

3) Uses the JQuery .keyup() function to monitor the number of characters in the "description" input on the Add a Film form and present a warning message when approaching or exceeding the character limit. For some reason this is not working properly, although the code works fine in JSFiddle (http://jsfiddle.net/ECvsh/1/) and the browser console shows no errors. Some Stack Overflow posts suggest this may be due to a conflict between .keyup() and Bootstrap, but I have not resolved it yet. I've left the code in place as an additional Javascript component that is a work in progress.

--

ADDITIONAL INFORMATION:

To access the Add a Film form, one must have admin-level privileges (please contact me for credentials). 

Once logged in, you'll see an ADMIN link in the navigation menu at the top of the header (this link is not available to non-admin users). Click this to go the the Admin panel, which currently has only one option Ð Add a film to the database.

This form allows input of the essential pieces of information for listing films on the site (e.g. title, director, running time, year released). These fields are required (marked by a *), while the rest are optional.

Two notes on the "add film" form:

1) The "Video link" url must be taken from the YouTube embed code (remember to add the http://) Ð the regular YouTube url will not work correctly.

2) The field for "Film image filename" allows the administrator to point to files already in the site's 'images' directory by simply listing the filename (e.g. dead-birds.jpg). If no filename is specified, a default image will be used as a placeholder. This is in part because the database auto increments an id number (unique_id) to each new title posted, and I did not find an easy way to upload a file as past of the same POST. I would like to add an uploader similar to the one used for the user profile image. For now, the image file must be added to the images directory and the filename entered here.

--

REFLECTIONS:

I learned a great deal while doing this project and will continue to work on it locally to add additional user and admin features.

This was my first experience building a responsive site using Bootstrap and it functions best when viewed anywhere from full screen down to 999px window width. It sometimes behaves strangely when reduced beyond that Ð another thing I will continue to work on locally.

Thank you to Susan and to the TF's for their help throughout the semester.

Github repository: https://github.com/phantomhand/p4.aveni.biz

Live site: http://p4.aveni.biz

Frank Aveni
12/23/2013























	
