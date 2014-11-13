BCIT COMP4711 Assignment 1

September 28th, 2014

CST Set 4D, Team southkorea

Jun-Young Lee
Abel "Jacob" Lim


*Design Decisions

Images are stored in a "data" folder inside the document root. Thumbnails of images are stored in the "thumbnail" folder inside the images folder. All future media(graphics, sound and etc.) will be stored under "data".

Scripts, CSS, UI graphics and various other more coding related files are stored under "assets" folder in the root, following codeigniter conventions.

Future aesthetics will be focused on being functional and minimalist first while sticking to good navigation design conventions.

*What was accomplished

We focused on getting the most of coding done as much as possible first before any major layout or aesthetic decisions were to be made. This can now be easily expanded and modified to display any layout we want in the future.

All the php files are accurately commented, allowing for easier expansion or modification upon the current framework.

All the functionalities are working as specified in the assignment.

*What could be done better

Our controllers contain a lot of redundant lines, which should be condensed into a single parent controller.

This site simply reused the CSS from a different example, and does not have any original graphics of its own.

While Entertainment and Restaurant category have their own views and controllers, the views themselves currently use the same layout as Accommodations.

The layout of the site is barebones at best, and not really up the standards of any design minded person.

*Issues Raised

FTP access is a continued issue, sometimes the site may even fail to load while testing. Please contact us if the uploaded content somehow gets damaged or becomes offline, we'll submit a local copy as well.