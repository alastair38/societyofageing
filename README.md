#Joints Accessible

This is based on JointsWP (which itself uses Foundation), a project by [@jeremyenglert](https://twitter.com/jeremyenglert). [Follow Jeremy](https://twitter.com/jeremyenglert) on Twitter to keep up-to-date with JointsWP.

At its core, Joints Accessible utilises:

[Advanced Custom Fields](http://www.advancedcustomfields.com/) - [Github](https://github.com/elliotcondon/acf) - for any additional custom field requirements

[Wordpress Advanced Search](http://wpadvancedsearch.com/) - [Github](https://github.com/growthspark/wp-advanced-search) - for advanced search queries

My aim is to adapt the theme further for greater accessibility and ARIA support. This is a work in progress as I find out more about the pitfalls of making WP themes fully accessible.

##Joints Accessible Incorporates the Following Scripts

To give an excellent, accessible carousel/slider as a base to work from

[Ken Wheeler's Slick.js](http://kenwheeler.github.io/slick/) - [Github](https://github.com/kenwheeler/slick/)

For a properly accessible modal

[Greg Kraus' Accessible Modal Dialog](https://github.com/gdkraus/accessible-modal-dialog)

To comply with EU cookie legislation

[Prime Box's Cookie Bar](http://www.primebox.co.uk/projects/cookie-bar/)

### How to use Bower and Update to the Latest Version of ACF and WPAS
JointsWP supports Bower, which allows you to update the included libraries (under `bower_components`) with a single command. If you're new to Bower and don't have it installed, see [Bower.io](http://bower.io/) for installation instructions. 

From the command line, navigate to your main theme directory. Then run:
`bower update`

=======