# UPDATE 1 
(Starting Point)


# Standby Screen

The screen is for a project coming soon, passing images from where I have been in my travels while studying

### Contact form
the html for the contact form is commented, as well as the php for it and js for it as they will auth for email address and php to send the form to your email.

```bash
 Signup Form 
			<form id="signup-form" method="post" action="#">
				<input type="email" name="email" id="email" placeholder="Email Address" />
				<input type="submit" value="Sign Up" />
			</form>
		
```
just need to uncomment the portion named Signup Form and customize it to your own.

### Usage

there is 2 main things, you may want the images to be url based or local based, it cycles through 3 images, but you can add more if needed, with a fade out effect to black.
```
you will be looking for "Slideshow Background" 
in the js where you can set the url, and the delay between the images
```
the standby screen uses both css and js file both named main and are in the root folder, as the img are in the folder in main

-------------
# Update 2


# Error Screens

## 404 Screen
-------------
This screen is to have a custom 404 error screen, this one shows a moon and astronaut with custom text for your screen as well as a home/back button if needed.
it has 2 code pages that could be put together in one if needed. An index that has to be called `404.html` for it to work as a custom error page, and the css file that can be a normal styles page, all the animations are handled in the css file that has some scss attributes.

-   All custom text and elements if need to add more must be in `404.html`
-   All animations and colors must be changed in the css file (keep an eye on the children and levels of every animation) `404style.css`
-   ALL `.html` files must be placed in the root for them to work
-   The back button function must be set and custom in the html and css together for all of it to work

