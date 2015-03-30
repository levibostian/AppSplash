[![Stories in Ready](https://badge.waffle.io/levibostian/app-splash.png?label=ready&title=Ready)](https://waffle.io/levibostian/app-splash)
# app-splash
Wordpress theme to create a splash page website for a mobile app coming soon. 


### Installing

app-splash uses the following tools/libraries:

* [grunt](http://gruntjs.com)
* [less](http://lesscss.org/)
* [bootstrap](http://getbootstrap.com/)

And in order for site to work, you must get all of these tools up and running.

```
# first install node and npm (required for installing dependencies)
sudo apt-get install -y nodejs
sudo apt-get install -y npm

# now install the building tools
sudo npm install -g bower
sudo npm install -g grunt-cli
sudo npm install -g grunt
```

Great. The tools are now all intalled. Lets now install all our dependencies.

```
bower install
npm install
```

Now we need to compile the site. After compiling, we are all done installing and the site will be able to view.

```
grunt --force
```

This will run various tasks such as LESS, concat, minify, tests, etc.

DONE! Now you can view the web page in your browser.
*Note: If any problems occur during this install, **please** [create an issue](https://github.com/levibostian/app-splash/issues) or make a pull request.
I want to make sure this project is easy to get up and running.*

### Contributing

First make sure and run the Install directions in this README to get the dependencies, tools, and site compiling.
Check out the [issues](https://github.com/levibostian/app-splash/issues) or the [waffle.io board](https://waffle.io/levibostian/app-splash) to view what needs to be done. Go ahead and jump on an item and get to work. Pull requests are always welcome!
