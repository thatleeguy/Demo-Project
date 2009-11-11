/** 
* ---------------------------------------------------------------
* PHP Development Framework (by Ran Aroussi)
* ---------------------------------------------------------------
* @version $Id: $
* @copyright Copyright (c) 2006 Ran Aroussi (http://aroussi.com)
* @author Ran Aroussi <ran@aroussi.com> 
* ---------------------------------------------------------------
*/

/* ----------------------------------- */
/*         General Functions           */
/* ----------------------------------- */
function set_and_submit(form, element_id, value) {
	document.getElementById(element_id).value = value; 
	eval('document.'+form+'.submit();');
}

/* ----------------------------------- */
function checkUncheckAll(theElement) {
	var theForm = theElement.form, z = 0;
	for (z=0; z<theForm.length;z++) { 
		if (theForm[z].type == 'checkbox' && theForm[z].name != 'checkall') { 
			theForm[z].checked = theElement.checked;
		}
	}
}

/* ----------------------------------- */
function popInfo(loc, width, height) {
	mywindow = window.open (loc, "popInfo", "location=0, status=0, scrollbars=1, width=" + width + ",height=" + height);
}

/* ----------------------------------- */
function rusure(msg, url) {
	if (confirm(msg)) {
		location.href = url;
	}
}

/* ----------------------------------- */
function fancy_rusure(msg, url, YES, NO) {
	if (YES == undefined) YES = 'YES';
	if (NO  == undefined) NO = 'NO';
	document.getElementById('msg4dialog').innerHTML = msg;
	document.getElementById('link4dialog').innerHTML = '<a href="'+ url + '" class="button_orange">&nbsp;'+ YES + '&nbsp;</a>&nbsp; &nbsp; &nbsp;<a href="#" onclick="hide_rusure(); return false;" class="button">&nbsp;'+ NO + '&nbsp;</a>';
	display('shutter', 'block');	
	display('msg_dialog', 'block');	
}

/* ----------------------------------- */
function hide_rusure() {
	display('shutter', 'none');	
	display('msg_dialog', 'none');	
	if (document.getElementById('ad_preview')) display('ad_preview', 'block');
}

/* ----------------------------------- */
function esc_rusure(e) {
       var kC  = (window.event) ?  event.keyCode : e.keyCode;	// MSIE or Firefox?
       var Esc = (window.event) ?  27 : e.DOM_VK_ESCAPE;		// MSIE or Firefox
       if (kC==Esc) hide_rusure(); // alert("Esc pressed")
}

/* ----------------------------------- */
function flash(timeout) {
	if (!timeout) { timeout = 4000; }
	self.setTimeout("Effect.BlindUp('flash')", timeout);
}
function re_flash() {
	Effect.BlindDown('flash');
	flash();	
}
/* ----------------------------------- */
function toggle(element, style) {
	if (document.getElementById(element).style.display != 'none') {
		style = 'none';
	}
	display(element, style)
}

/* ----------------------------------- */
function display(element, style) {
	eval("document.getElementById('" + element + "').style.display = style;");	
}

/* ----------------------------------- */
function changeClass(element, className) {
	eval("document.getElementById('" + element + "').className = className;");	
}

/* ----------------------------------- */
function markFormField(element) {
	if (document.getElementById(element))
		document.getElementById(element).style.background = '#D2E4B8';
}

/* ----------------------------------- */
function clearFormMark(element) {
	if (document.getElementById(element))
		document.getElementById(element).style.background = 'transparent';
}

