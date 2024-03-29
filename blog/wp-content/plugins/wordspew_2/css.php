
/*
This file controls the look of the Live shoutbox...
*/


#chatoutput {

/* Height of the shoutbox*/
height: 200px;

/*Uncomment width below*/
/*width: 220px;*/

/* Horizontal Scrollbar Killer */
padding: 6px 8px; 

/* Borders */
border: 1px solid #666666;
border-width: 1px 2px;

font: 11px helvetica, arial, sans-serif;
color: #333333;
background: #FFFFFF;
overflow: auto;
margin-top: 10px;
}

#chatoutput span {
font-size: 1.1em;
color: #666666;
}

#chatForm label, #shoutboxAdmin {
display: block;
margin: 4px 0;
}

#chatoutput a {
font-style: normal;
font-weight: bold;
color: #666666}

/* User names with links */
#chatoutput li span a {
font-weight: normal;
display: inline !important;
border-bottom: 1px dotted #666666}

#chatForm input, #chatForm textarea {
width: 120px;
display: block;
margin: 0 auto;
}

#chatForm textarea {
width: 150px;
}


#chatForm input#submitchat {
width: 70px;
margin: 10px auto;
border: 2px outset;
padding: 2px;
}

#chatoutput ul#outputList {
padding: 0;
position: static;
margin: 0;
}

#chatoutput ul#outputList li {
padding: 4px;
margin: 0;
color: #333333;
background: none;
font-size: 1em;
list-style: none;
}

/* No bullets from Kubrick et al. */
#chatoutput ul#outputList li:before {
content: '';
}

ul#outputList li:first-line {
line-height: 16px;
}

#lastMessage {
padding-bottom: 2px;
text-align: center;
border-bottom: 2px dotted #666666;
}

em#responseTime {
font-style: normal;
display: block;
}

#chatoutput .wp-smiley {
vertical-align: middle;
}