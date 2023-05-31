# KaelProgrammer-Designer.github.io

This is my main project starting my portfolio, with joining a main and 2 portfolio divided
screens one for code and one for design.
for versions and updates see the update folder.

# To-do:
- [x] Splash standby screen
- [x] Error Pages
- [ ] Start the functionality of a home page
- [ ] Customize home page
- [ ] Start to screenshot projects and links for the repository and project page
- [ ] Customize and select projects to add 
- [ ] Select best portfolio design projects and start a design portfolio page
- [ ] Customize the project
- [ ] add links for social media and email
- [ ] work on a working form to be easily contacted
- [ ] create and custom more error pages 

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

# Error Screens
### 404 Screen

**404 error page is:** response status code indicates that the server cannot find the requested resource [Read More...](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/404)

This screen is to have a custom `404 error screen`, this one shows a moon and astronaut with custom text for your screen as well as a home/back button if needed.
it has 2 code pages that could be put together in one if needed. An index that has to be called `404.html` for it to work as a custom error page, and the css file that can be a normal styles page, all the animations are handled in the css file that has some scss attributes.

-   All custom text and elements if need to add more must be in `404.html`
-   All animations and colors must be changed in the css file (keep an eye on the children and levels of every animation) `404style.css`
-   ALL `.html` **files must be placed in the __root__ for them to work**
-   The back button function must be set and custom in the html and css together for all of it to work

### 403 Screen

**403 error page is:**  response status code indicates that the server understands the request but refuses to authorize it [Read More...](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/403)

This Screen is to have a custom `403 error screen`, this screen of 403 is used to have a lock and custom text. If needed there is the posibility of adding a button in the html and customizing it on the css. But if the necesity is to go back to the previous page or home works when clicking on bottom text that is underlined. Like any other error call the html file must be in the root and called `403.html`. This page works with an html, css that handles the colors and the animations as well.

-   All custom text and elements if need to add more must be in `403.html`
-   The `.html` file does not have a button but it must be customized and added if needed, the function of the button to go back is handled in the underline text
-   All animations and colors must be changed in the css file (keep an eye on the children and levels of every animation) `403style.css`
-   ALL `.html` **files must be placed in the __root__ for them to work**
-   The clickable underlined text function must be set and custom in the html and css together for all of it to work

### 408 Screen

**408 error page is:**  response status code means that the server would like to shut down this unused connection [Read More...](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/408)

This Screen is to have a custom `408 error screen`, this screen is used to show when the server is not responding and has a button for the user to find a way back home if needed. The 408 page unlike the previous ones works with an html, css, and js file. Like any other error call the html file must be in the root and called `408.html`. This page works with an html, css that handles the colors with some animation, but for the screen to handle the fades and movement a js file was added to benefit functionality as we as if you want to set a little more time between one screen from the other that can be changed in the js file.

-   All custom text and elements if need to add more must be in `408.html`
-   All animations __(small)__ and colors must be changed in the css file `408style.css`
-   All big animations, and times between screens are handled in the js file which is completly customizable but must be debugged `408.js`
-   ALL `.html` **files must be placed in the __root__ for them to work**
-   The back button function must be set and custom in the html and css together for all of it to work

### 500 Screen

**500 error page is:**  server error response code indicates that the server encountered an unexpected condition that prevented it from fulfilling the request [Read More...](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/500)

This Screen is to have a custom `500 error screen`, this screen is used to have a screen to show when the server has encountered a problem and cannot be found at all. Like any other error call the html file must be in the root and called `500.html`. This page works with an html, css that handles the colors and the animation of the vectors and is highly customizable for the colors and positions. There is a button cthat can be configured to send the user back home or the disired url.

-   All custom text and elements if need to add more must be in `500.html`
-   All animations __(small)__ and colors must be changed in the css file `500.css`
-   ALL `.html` **files must be placed in the __root__ for them to work**
-   The back button function must be set and custom in the html and css together for all of it to work

<sub>To read more about errors you can find them [here](https://developer.mozilla.org/en-US/docs/Web) </sub>

### Usage

This are just templates modified to fit my needs, if you want more or want more info please do check the documentation at the bottom as it will lead you to where you can find more about them. You can modify and use as you need but most of them I managed to translate them from pug to html and scss to css. The most important is to have some knowladge of pug and scss as most of this templates work with those extensions, and sadly it does requiere `.html` and `.css` to work and replace a working error page to your custom one. 

All these templates could if you know how to work svg files and change them can change to any error file you may want to customize.  

<sub> **Note:** this files can be also added js script and some do requiere js script some is json, vue and others pure javascript </sub>





## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

## License

[MIT](https://choosealicense.com/licenses/mit/)

## Credits

Images: [Unsplash](unsplash.com)

Icons: [Font Awesome](fontawesome.io)
	
Main Template for standby screen: [Eventually by HTML5 UP](html5up.net/license)

Error screens: [found examples and templates](https://freefrontend.com/html-code-examples/)
