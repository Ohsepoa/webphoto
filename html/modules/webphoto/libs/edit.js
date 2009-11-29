/* ========================================================
 * $Id: edit.js,v 1.2 2009/11/29 07:43:41 ohwada Exp $
 * ========================================================
 */

/* must define webphoto_gmap_disp_on in template */
function webphoto_check_all( cbox, prefix ) 
{
	var regexp = new RegExp("^" + prefix );
	var inputs = document.getElementsByTagName("input");
	for (i=0; i<inputs.length; i++) {
		var ele = inputs[i];
        if (ele.type == "checkbox" && ele.name.match(regexp)) {
			ele.checked = cbox.checked;
		}
	}
}
function webphoto_detail_disp_onoff( onoff ) 
{
	if ( onoff.checked ) {
		document.getElementById("webphoto_detail").style.display = "block";
		webphoto_gmap_disp_on();
	} else{
		document.getElementById("webphoto_detail").style.display = "none";
	}
}
function webphoto_gmap_disp_onoff( onoff ) 
{
	if ( onoff.checked ) {
		webphoto_gmap_disp_on();
	} else{
		webphoto_set_gmap_iframe('');
	}
}
function webphoto_set_gmap_iframe( html ) 
{
	document.getElementById("webphoto_gmap_iframe").innerHTML = html;
}
function webphoto_uploading()
{
	document.getElementById('webphoto_uploading').style.display = "block";
	document.getElementById('webphoto_submit_form').style.display = "none";
}