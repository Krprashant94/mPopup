# mPopup
© version: 1.0.0.2
3-Apr-2014, 2:55PM

[Mail Me](kr.prashant94@gmail.com)
[Facebook](https://facebook.com/prashant94)
--------------------------------------------------------------------
# INTRODUCTION
mPopup is a API plug-in that offers a nice and elegant way to alert, 
zooming, prompt and other popup functionality for images, html and 
other web content on your webpages.

More information and examples : http://pkrcciit.blogspot.in

				
--------------------------------------------------------------------

To add the mPopup you just include this code in your page <head> tag : -
```
<HEAD>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<link href="/mPopup/mPopup.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/mPopup/mPopup.js"></script>
</HEAD>
```

Note : - 	1. To trigger the mPopup it must be include jQuery file

------------------ Triggring mPopup --------------------------------

Use the following script to trigger the mPopup :-
			    $('*').mPopup({"options1", "options2"...});
Eg :- 
```
			$('*').mPopup({
				heading	: "My heading",
				url		: "test.html",
				footer	:'My footer',
				progress: '#149bdf',
				type	: ""
			});
```		
--------------------------------------------------------------------
						OPTIONS
### A.	AJAX
		1.	method 		: GET/POST
		2.	send		: Data send
		3.	url			: path of the file.
### B.	Text Display
		1.	heading		: Text on heading
		2.	footer		: Text on footer
### C.	Style
		1.	progress	: Progress bar color (is not set Progress false )
		2.	type		: file (only)
		3.	Color_foot	: Footer text color
		4.	color_back	: Footer background color
		5.	top			: Possition to the top
		6.	width		: Width of the popup
		7.	height		:  Height of the popup
		8.	padding		: Padding on popup
--------------------------------------------------------------------
			Have a bug(Error)

Please create an issue or mail me 
