
.ckclr {clear:both;visibility : hidden;}



/*---------------------------------------------
---	 	menu container						---
----------------------------------------------*/

/* menu */
div#maximenuresponsive {
	font-size:14px;
	line-height:21px;
	/*text-align:left;*/
	zoom:1;
}

/* container style */
div#maximenuresponsive ul.maximenuck {
	clear:both;
    position : relative;
    z-index:999;
    overflow: visible !important;
    display: block !important;
    float: none !important;
    visibility: visible !important;
	opacity: 1 !important;
    list-style:none;
	/*padding: 0;*/
    margin:0 auto;
    zoom:1;
	filter: none;
}

div#maximenuresponsive ul.maximenuck:after {
    content: " ";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
    font-size: 0;
}

/*---------------------------------------------
---	 	Root items - level 1				---
----------------------------------------------*/

div#maximenuresponsive ul.maximenuck li.maximenuck.level1 {
	display: inline-block;
    float: none;
    position:static;
    /*padding : 0;
    margin : 0;*/
    list-style : none;
    text-align:center;
    cursor: pointer;
	filter: none;
}

/** IE 7 only **/
*+html div#maximenuresponsive ul.maximenuck li.maximenuck.level1 {
	display: inline !important;
}

/* vertical menu */
div#maximenuresponsive.maximenuckv ul.maximenuck li.maximenuck.level1 {
	display: block !important;
	/*margin: 0;
	padding: 0;*/
	text-align: left;
}

div#maximenuresponsive ul.maximenuck li.maximenuck.level1:hover,
div#maximenuresponsive ul.maximenuck li.maximenuck.level1.active {

}

div#maximenuresponsive ul.maximenuck li.maximenuck.level1 > a,
div#maximenuresponsive ul.maximenuck li.maximenuck.level1 > span.separator {
	display:block;
    float : none;
    float : left;
    position:relative;
	text-decoration:none;
    outline : none;
    /*border : none;*/
    white-space: nowrap;
	filter: none;
}

/* parent item on mouseover (if subemnus exists) */
div#maximenuresponsive ul.maximenuck li.maximenuck.level1.parent:hover,
div#maximenuresponsive ul.maximenuck li.maximenuck.level1.parent:hover {

}

/* item color on mouseover */
div#maximenuresponsive ul.maximenuck li.maximenuck.level1:hover > a span.titreck,
div#maximenuresponsive ul.maximenuck li.maximenuck.level1.active > a span.titreck,
div#maximenuresponsive ul.maximenuck li.maximenuck.level1:hover > span.separator,
div#maximenuresponsive ul.maximenuck li.maximenuck.level1.active > span.separator {

}

div#maximenuresponsive.maximenuckh ul.maximenuck li.level1.parent > a,
div#maximenuresponsive.maximenuckh ul.maximenuck li.level1.parent > span.separator {
	padding-right: 12px;
}

/* arrow image for parent item */
div#maximenuresponsive ul.maximenuck li.level1.parent > a:after,
div#maximenuresponsive ul.maximenuck li.level1.parent > span.separator:after {
	content: "";
	display: block;
	position: absolute;
	width: 0; 
	height: 0; 
	border-style: solid;
	border-width: 7px 6px 0 6px;
	border-color: #000 transparent transparent transparent;
	top: 7px;
	right: 0px;
}

div#maximenuresponsive ul.maximenuck li.level1.parent:hover > a:after,
div#maximenuresponsive ul.maximenuck li.level1.parent:hover > span.separator:after {

}

/* vertical menu */
div#maximenuresponsive.maximenuckv ul.maximenuck li.level1.parent > a:after,
div#maximenuresponsive.maximenuckv ul.maximenuck li.level1.parent > span.separator:after {
	display: inline-block;
	content: "";
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 6px 0 6px 7px;
	border-color: transparent transparent transparent #000;
	margin: 3px 10px 3px 0;
	position: absolute;
	right: 3px;
	top: 3px;
}

/* arrow image for submenu parent item */
div#maximenuresponsive ul.maximenuck li.level1.parent li.parent > a:after,
div#maximenuresponsive ul.maximenuck li.level1.parent li.parent > span.separator:after,
div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 li.parent > a:after,
div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 li.parent > a:after {
	display: inline-block;
	content: "";
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 6px 0 6px 7px;
	border-color: transparent transparent transparent #007bff;
	margin: 0 3px;
	position: absolute;
	right: 3px;
	top: 2px;
}

/* styles for right position */
div#maximenuresponsive ul.maximenuck li.maximenuck.level1.align_right,
div#maximenuresponsive ul.maximenuck li.maximenuck.level1.menu_right,
div#maximenuresponsive ul.maximenuck li.align_right,
div#maximenuresponsive ul.maximenuck li.menu_right {
	float:right !important;
	margin-right:0px !important;
}

div#maximenuresponsive ul.maximenuck li.align_right:not(.fullwidth) div.floatck,
div#maximenuresponsive ul.maximenuck li:not(.fullwidth) div.floatck.fixRight {
	left:auto;
	right:0px;
	top:auto;
}


/* arrow image for submenu parent item to open left */
div#maximenuresponsive ul.maximenuck li.level1.parent div.floatck.fixRight li.parent > a:after,
div#maximenuresponsive ul.maximenuck li.level1.parent div.floatck.fixRight li.parent > span.separator:after,
div#maximenuresponsive ul.maximenuck li.level1.parent.menu_right li.parent > a:after,
div#maximenuresponsive ul.maximenuck li.level1.parent.menu_right li.parent > span.separator:after {
	border-color: transparent #007bff transparent transparent;
}

/* margin for right elements that rolls to the left */
div#maximenuresponsive ul.maximenuck li.maximenuck div.floatck div.floatck.fixRight,
div#maximenuresponsive ul.maximenuck li.level1.parent.menu_right div.floatck div.floatck  {
    margin-right : 180px;
}

div#maximenuresponsive ul.maximenuck li div.floatck.fixRight{

}


/*---------------------------------------------
---	 	Sublevel items - level 2 to n		---
----------------------------------------------*/

div#maximenuresponsive ul.maximenuck li div.floatck ul.maximenuck2,
div#maximenuresponsive ul.maximenuck2 {
    z-index:11000;
    clear:left;
    text-align : left;
    background : transparent;
    margin : 0 !important;
    padding : 0 !important;
    border : none !important;
    box-shadow: none !important;
    width : 100%; /* important for Chrome and Safari compatibility */
    position: static !important;
    overflow: visible !important;
    display: block !important;
    float: none !important;
    visibility: visible !important;
}

div#maximenuresponsive ul.maximenuck li ul.maximenuck2 li.maximenuck,
div#maximenuresponsive ul.maximenuck2 li.maximenuck {
	text-align : left;
    z-index : 11001;
    /*padding:0;*/
	position:static;
	float:none !important;
    list-style : none;
	display: block;
}

div#maximenuresponsive ul.maximenuck li ul.maximenuck2 li.maximenuck:hover,
div#maximenuresponsive ul.maximenuck2 li.maximenuck:hover {
}

/* all links styles */
div#maximenuresponsive ul.maximenuck li.maximenuck a,
div#maximenuresponsive ul.maximenuck li.maximenuck span.separator,
div#maximenuresponsive ul.maximenuck2 a,
div#maximenuresponsive ul.maximenuck2 li.maximenuck span.separator {
	display: block;
    float : none !important;
    float : left;
    position:relative;
	text-decoration:none;
    outline : none;
    white-space: normal;
	filter: none;
}

/* submenu link */
div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 li a,
div#maximenuresponsive ul.maximenuck2 li a {

}

div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 a,
div#maximenuresponsive ul.maximenuck2 a {
	display: block;
}

div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > a,
div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > h2 a,
div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > h3 a,
div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 li.active > a,
div#maximenuresponsive ul.maximenuck2 li:hover > a,
div#maximenuresponsive ul.maximenuck2 li:hover > h2 a,
div#maximenuresponsive ul.maximenuck2 li:hover > h3 a,
div#maximenuresponsive ul.maximenuck2 li.active > a{

}


/* link image style */
div#maximenuresponsive li.maximenuck > a img {
    margin : 3px;
    border : none;
}

/* img style without link (in separator) */
div#maximenuresponsive li.maximenuck img {
    border : none;
}

/* item title */
div#maximenuresponsive span.titreck {
	text-decoration : none;
	/*min-height : 17px;*/
	float : none !important;
	float : left;
	margin: 0;
}

/* item description */
div#maximenuresponsive span.descck {
	display : block;
	text-transform : none;
	font-size : 10px;
	text-decoration : none;
	height : 12px;
	line-height : 12px;
	float : none !important;
	float : left;
}

/*--------------------------------------------
---		Submenus						------
---------------------------------------------*/

/* submenus container */
div#maximenuresponsive div.floatck {
	position : absolute;
	display: none;
	padding : 0;
    margin : 0;
	/*width : 180px;*/ /* default width */
	text-align:left;
	width: auto;
	z-index:9999;
	cursor: auto;
}

div#maximenuresponsive div.maxidrop-main {
	width : 180px; /* default width */
	display: flex;
	flex-wrap: wrap;
}

/* vertical menu */
div#maximenuresponsive.maximenuckv div.floatck {
	margin : -39px 0 0 90%;
}

div#maximenuresponsive .maxipushdownck div.floatck {
	margin: 0;
}

/* child blocks position (from level2 to n) */
div#maximenuresponsive ul.maximenuck li.maximenuck div.floatck div.floatck {
    margin : -30px 0 0 180px; /* default sub submenu position */
}

/**
** Show/hide sub menu if javascript is off - horizontal style
**/
div#maximenuresponsive ul.maximenuck li:hover:not(.maximenuckanimation) div.floatck div.floatck, div#maximenuresponsive ul.maximenuck li:hover:not(.maximenuckanimation) div.floatck:hover div.floatck div.floatck, div#maximenuresponsive ul.maximenuck li:hover:not(.maximenuckanimation) div.floatck:hover div.floatck:hover div.floatck div.floatck {
	display: none;
}

div#maximenuresponsive ul.maximenuck li.maximenuck:hover > div.floatck, div#maximenuresponsive ul.maximenuck li.maximenuck:hover > div.floatck li.maximenuck:hover > div.floatck, div#maximenuresponsive ul.maximenuck li.maximenuck:hover>  div.floatck li.maximenuck:hover > div.floatck li.maximenuck:hover > div.floatck, div#maximenuresponsive ul.maximenuck li.maximenuck:hover > div.floatck li.maximenuck:hover > div.floatck li.maximenuck:hover > div.floatck li.maximenuck:hover > div.floatck {
	display: block;
}

div#maximenuresponsive div.maximenuck_mod ul {
	display: block;
}

/*---------------------------------------------
---	 	Columns management					---
----------------------------------------------*/

div#maximenuresponsive ul.maximenuck li div.floatck div.maximenuck2,
div#maximenuresponsive .maxipushdownck div.floatck div.maximenuck2 {
	/*width : 180px;*/ /* default width */
	margin: 0;
	padding: 0;
	flex: 0 1 auto;
	width: 100%;
}

/* allow auto fill if no column created, default behavior */
/*
div#maximenuresponsive ul.maximenuck li div.floatck div.maximenuck2:not([style]) {
    flex: 1 1 auto;
}
*/


/* h2 title */
div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 h2 a,
div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 h2 span.separator,
div#maximenuresponsive ul.maximenuck2 h2 a,
div#maximenuresponsive ul.maximenuck2 h2 span.separator {
	font-size:21px;
	font-weight:400;
	letter-spacing:-1px;
	margin:7px 0 14px 0;
	padding-bottom:14px;
	line-height:21px;
	text-align:left;
}

/* h3 title */
div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 h3 a,
div#maximenuresponsive ul.maximenuck li.maximenuck ul.maximenuck2 h3 span.separator,
div#maximenuresponsive ul.maximenuck2 h3 a,
div#maximenuresponsive ul.maximenuck2 h3 span.separator {
	font-size:14px;
	margin:7px 0 14px 0;
	padding-bottom:7px;
	line-height:21px;
	text-align:left;
}

/* paragraph */
div#maximenuresponsive ul.maximenuck li ul.maximenuck2 li p,
div#maximenuresponsive ul.maximenuck2 li p {
	line-height:18px;
	margin:0 0 10px 0;
	font-size:12px;
	text-align:left;
}




/* image shadow with specific class */
div#maximenuresponsive .imgshadow { /* Better style on light background */
	background:#FFFFFF !important;
	padding:4px;
	border:1px solid #777777;
	margin-top:5px;
	-moz-box-shadow:0px 0px 5px #666666;
	-webkit-box-shadow:0px 0px 5px #666666;
	box-shadow:0px 0px 5px #666666;
}

/* blackbox style */
div#maximenuresponsive ul.maximenuck li ul.maximenuck2 li.blackbox,
div#maximenuresponsive ul.maximenuck2 li.blackbox {
	background-color:#333333 !important;
	color: #eeeeee;
	text-shadow: 1px 1px 1px #000;
	padding:4px 6px 4px 6px !important;
	margin: 0px 4px 4px 4px !important;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	-webkit-box-shadow:inset 0 0 3px #000000;
	-moz-box-shadow:inset 0 0 3px #000000;
	box-shadow:inset 0 0 3px #000000;
}

div#maximenuresponsive ul.maximenuck li ul.maximenuck2 li.blackbox:hover,
div#maximenuresponsive ul.maximenuck2 li.blackbox:hover {
	background-color:#333333 !important;
}

div#maximenuresponsive ul.maximenuck li ul.maximenuck2 li.blackbox a,
div#maximenuresponsive ul.maximenuck2 li.blackbox a {
	color: #fff;
	text-shadow: 1px 1px 1px #000;
	display: inline !important;
}

div#maximenuresponsive ul.maximenuck li ul.maximenuck2 li.blackbox:hover > a,
div#maximenuresponsive ul.maximenuck2 li.blackbox:hover > a{
	text-decoration: underline;
}

/* greybox style */
div#maximenuresponsive ul.maximenuck li ul.maximenuck2 li.greybox,
div#maximenuresponsive ul.maximenuck2 li.greybox {
	background:#f0f0f0 !important;
	border:1px solid #bbbbbb;
	padding: 4px 6px 4px 6px !important;
	margin: 0px 4px 4px 4px !important;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px;
}

div#maximenuresponsive ul.maximenuck li ul.maximenuck2 li.greybox:hover,
div#maximenuresponsive ul.maximenuck2 li.greybox:hover {
	background:#ffffff !important;
	border:1px solid #aaaaaa;
}

/* create new row with flexbox */
div#maximenuresponsive .ck-column-break {
    flex-basis: 100%;
    height: 0;
}


/*---------------------------------------------
---	 	Module in submenus					---
----------------------------------------------*/

/* module title */
div#maximenuresponsive ul.maximenuck div.maximenuck_mod > div > h3,
div#maximenuresponsive ul.maximenuck2 div.maximenuck_mod > div > h3 {
    width : 100%;
    font-weight : bold;
	font-size: 16px;
}

div#maximenuresponsive div.maximenuck_mod {
    /*width : 100%;*/
    padding : 0;
    white-space : normal;
}

div#maximenuresponsive div.maximenuck_mod div.moduletable {
    border : none;
    background : none;
}

div#maximenuresponsive div.maximenuck_mod  fieldset{
    width : 100%;
    padding : 0;
    margin : 0 auto;
    overflow : hidden;
    background : transparent;
    border : none;
}

div#maximenuresponsive ul.maximenuck2 div.maximenuck_mod a {
    border : none;
    margin : 0;
    padding : 0;
    display : inline;
    background : transparent;
    font-weight : normal;
}

div#maximenuresponsive ul.maximenuck2 div.maximenuck_mod a:hover {

}

div#maximenuresponsive ul.maximenuck2 div.maximenuck_mod ul {
    margin : 0;
    padding : 0;
    width : 100%;
    background : none;
    border : none;
    text-align : left;
}

div#maximenuresponsive ul.maximenuck2 div.maximenuck_mod li {
    margin : 0 0 0 15px;
    padding : 0;
    background : none;
    border : none;
    text-align : left;
    font-size : 11px;
    float : none;
    display : block;
    line-height : 20px;
    white-space : normal;
}

/* login module */
div#maximenuresponsive ul.maximenuck2 div.maximenuck_mod #form-login ul {
    left : 0;
    margin : 0;
    padding : 0;
    width : 100%;
}

div#maximenuresponsive ul.maximenuck2 div.maximenuck_mod #form-login ul li {
    margin : 2px 0;
    padding : 0 5px;
    height : 20px;
    background : transparent;
}


/*---------------------------------------------
---	 	Fancy styles (floating cursor)		---
----------------------------------------------*/

div#maximenuresponsive .maxiFancybackground {
	position: absolute;
    top : 0;
    list-style : none;
    padding: 0;
    margin: 0;
    border: none;
	z-index: -1;
	border-top: 1px solid #fff;
}

div#maximenuresponsive .maxiFancybackground .maxiFancycenter {
    /*border-top: 1px solid #fff;*/
}



/*---------------------------------------------
---	 	Button to close on click			---
----------------------------------------------*/

div#maximenuresponsive span.maxiclose {
    color: #fff;
}

/*---------------------------------------------
---	 Stop the dropdown                  ---
----------------------------------------------*/

div#maximenuresponsive ul.maximenuck li.maximenuck.nodropdown div.floatck,
div#maximenuresponsive ul.maximenuck li.maximenuck div.floatck li.maximenuck.nodropdown div.floatck,
div#maximenuresponsive .maxipushdownck div.floatck div.floatck {
	position: static !important;
	background:  none;
	border: none;
	left: auto;
	margin: 3px;
	moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none;
	display: block !important;
}

div#maximenuresponsive ul.maximenuck li.level1.parent ul.maximenuck2 li.maximenuck.nodropdown li.maximenuck,
div#maximenuresponsive .maxipushdownck ul.maximenuck2 li.maximenuck.nodropdown li.maximenuck {
	background: none;
	text-indent: 5px;
}

div#maximenuresponsive ul.maximenuck li.maximenuck.level1.parent ul.maximenuck2 li.maximenuck.parent.nodropdown > a,
div#maximenuresponsive ul.maximenuck li.maximenuck.level1.parent ul.maximenuck2 li.maximenuck.parent.nodropdown > span.separator,
div#maximenuresponsive .maxipushdownck ul.maximenuck2 li.maximenuck.parent.nodropdown > a,
div#maximenuresponsive .maxipushdownck ul.maximenuck2 li.maximenuck.parent.nodropdown > span.separator {
	background:  none;
}

/* remove the arrow image for parent item */
div#maximenuresponsive ul.maximenuck li.maximenuck.level1.parent ul.maximenuck2 li.parent.nodropdown > *:after,
div#maximenuresponsive .maxipushdownck ul.maximenuck2 li.parent > *:after {
	display: none;
}

div#maximenuresponsive li.maximenuck.nodropdown > div.floatck > div.maxidrop-main {
	width: auto;
}

/*---------------------------------------------
---	 Full width				                ---
----------------------------------------------*/

div#maximenuresponsive.maximenuckh li.fullwidth > div.floatck {
	margin: 0;
	padding: 0;
	width: auto !important;
	left: 0;
	right: 0;
}

div#maximenuresponsive.maximenuckv li.fullwidth > div.floatck {
	margin: 0;
	padding: 0;
	top: 0;
	bottom: 0;
	left: 100%;
	right: auto !important;
}

div#maximenuresponsive li.fullwidth > div.floatck > div.maxidrop-main {
	width: auto;
}