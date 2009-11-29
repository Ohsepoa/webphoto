<?php
// $Id: main.php,v 1.9 2009/11/29 07:34:23 ohwada Exp $

//=========================================================
// webphoto module
// 2009-03-01 K.OHWADA
//=========================================================

//---------------------------------------------------------
// v1.90
//---------------------------------------------------------
if( !defined("_WEBPHOTO_TITLE_PICTURE") ) 
{
// menu
define("_WEBPHOTO_TITLE_PICTURE", "Pictures" ) ;
define("_WEBPHOTO_TITLE_AUDIO",   "Musics" ) ;

// item 
define("_WEBPHOTO_ITEM_DETAIL_ONCLICK", "Action on click the content image");
define("_WEBPHOTO_ITEM_WEIGHT", "Weight");

// item option
define("_WEBPHOTO_ITEM_KIND_OFFICE","Office (doc,xls,ppt...)");
define("_WEBPHOTO_ITEM_KIND_IMAGE_OTHER","Image (bmp,tif,wmf...)");
define("_WEBPHOTO_ITEM_DETAIL_ONCLICK_DEFAULT", "Default (uploaded content)");

// file
define("_WEBPHOTO_FILE_KIND_CONT" ,  "Content" ) ;
define("_WEBPHOTO_FILE_KIND_THUMB" ,  "Thumbnail" ) ;
define("_WEBPHOTO_FILE_KIND_MIDDLE" ,  "Middle image" ) ;
define("_WEBPHOTO_FILE_KIND_FLASH" ,  "Flash flv" ) ;
define("_WEBPHOTO_FILE_KIND_DOCOMO" ,  "Docomo video" ) ;
define("_WEBPHOTO_FILE_KIND_PDF" ,  "PDF" ) ;
define("_WEBPHOTO_FILE_KIND_SWF" ,  "Flash swf" ) ;
define("_WEBPHOTO_FILE_KIND_SMALL" ,  "Small image" ) ;
define("_WEBPHOTO_FILE_KIND_JPEG" ,  "JPEG" ) ;
define("_WEBPHOTO_FILE_KIND_MP30" , "MP3" ) ;

// mime option
define("_WEBPHOTO_MIME_KIND_OFFICE_DOC", "Office doc" ) ;
define("_WEBPHOTO_MIME_KIND_OFFICE_XLS", "Office xls" ) ;
define("_WEBPHOTO_MIME_KIND_OFFICE_PPT", "Office ppt" ) ;
define("_WEBPHOTO_MIME_KIND_OFFICE_PDF", "Office pdf" ) ;

// submit
define("_WEBPHOTO_UPLOADING", "Uploading..." ) ;
define("_WEBPHOTO_EMBED_ENTER", "Enter the video id from the url" ) ;
define("_WEBPHOTO_EMBED_EXAMPLE", "Example" ) ;

// photo
define("_WEBPHOTO_ICON_GROUP", "Only in group" ) ;
}

//---------------------------------------------------------
// v1.80
//---------------------------------------------------------
if( !defined("_WEBPHOTO_MIME_KIND") ) 
{
// mime
define("_WEBPHOTO_MIME_KIND" , "File Kind" ) ;
define("_WEBPHOTO_MIME_OPTION" , "Command Option" ) ;

// item option
define("_WEBPHOTO_ITEM_CODEINFO_JPEG","JPEG Image");
define("_WEBPHOTO_ITEM_CODEINFO_MP3", "MP3");

// form
define("_WEBPHOTO_ERR_JPEG", "Cannot create JPEG");
define("_WEBPHOTO_ERR_MP3",  "Cannot create MP3");

// mime option
define("_WEBPHOTO_MIME_KIND_GENERAL",       "Genaral") ;
define("_WEBPHOTO_MIME_KIND_IMAGE",         "Image" ) ;
define("_WEBPHOTO_MIME_KIND_IMAGE_CONVERT", "Image convert"  ) ;
define("_WEBPHOTO_MIME_KIND_VIDEO",         "Video" ) ;
define("_WEBPHOTO_MIME_KIND_VIDEO_FFMPEG",  "Video ffmpeg" ) ;
define("_WEBPHOTO_MIME_KIND_AUDIO",         "Audio" ) ;
define("_WEBPHOTO_MIME_KIND_AUDIO_MID",     "Audio midi" ) ;
define("_WEBPHOTO_MIME_KIND_AUDIO_WAV",     "Audio wav" ) ;
define("_WEBPHOTO_MIME_KIND_OFFICE",        "Office" ) ;

// player option
define("_WEBPHOTO_PLAYER_TITLE_DEFAULT", "Undefined");

define("_WEBPHOTO_TITLE_IMAGE",   "Images" ) ;
define("_WEBPHOTO_TITLE_VIDEO",   "Videos" ) ;
define("_WEBPHOTO_TITLE_MUSIC",   "Musics" ) ;
define("_WEBPHOTO_TITLE_OFFICE",  "Offices" ) ;

}

//---------------------------------------------------------
// v1.60
//---------------------------------------------------------
if( !defined("_WEBPHOTO_TITLE_SUBMIT_SELECT") ) 
{
define("_WEBPHOTO_TITLE_SUBMIT_SELECT",  "Select submit form");
define("_WEBPHOTO_TITLE_SUBMIT_SINGLE",  "Registration of one photo");
define("_WEBPHOTO_TITLE_SUBMIT_BULK",  "Batch registration of photos");
}

//---------------------------------------------------------
// v1.30
//---------------------------------------------------------
if( !defined("_WEBPHOTO_TITLE_MAP") ) 
{
define("_WEBPHOTO_TITLE_MAP",  "GoogleMap");
define("_WEBPHOTO_MAP_LARGE", "Show large map");

// timeline
define("_WEBPHOTO_TITLE_TIMELINE",  "Timeline");
define("_WEBPHOTO_TIMELINE_ON",  "Show timeline");
define("_WEBPHOTO_TIMELINE_OFF", "Hide timeline");
define("_WEBPHOTO_TIMELINE_SCALE_WEEK",   "One Week") ;
define("_WEBPHOTO_TIMELINE_SCALE_MONTH",  "One Month") ;
define("_WEBPHOTO_TIMELINE_SCALE_YEAR",   "One Year") ;
define("_WEBPHOTO_TIMELINE_SCALE_DECADE", "10 Years") ;
define("_WEBPHOTO_TIMELINE_LARGE", "Show large timeline");
define("_WEBPHOTO_TIMELINE_CAUTION_IE", "In InternetExplore, you cannot see it sometimes. Please try in other browsers such as Firfox, Opera, Safari.");

// item option
define("_WEBPHOTO_ITEM_CODEINFO_SMALL","Small image");

// edit form
define("_WEBPHOTO_CAP_SMALL_SELECT", "Select the small image");

}

//---------------------------------------------------------
// main for Portugues.do.Brasil
//---------------------------------------------------------
if( !defined("_WEBPHOTO_ITEM_TIME_PUBLISH") ) 
{

//---------------------------------------------------------
// v0.50
//---------------------------------------------------------
// item table
define("_WEBPHOTO_ITEM_TIME_PUBLISH" , "Published Time" ) ;
define("_WEBPHOTO_ITEM_TIME_EXPIRE"  , "Expired Time" ) ;
define("_WEBPHOTO_ITEM_PLAYER_ID" ,    "Player ID" ) ;
define("_WEBPHOTO_ITEM_FLASHVAR_ID" ,  "FlashVar ID" ) ;
define("_WEBPHOTO_ITEM_DURATION" , "Video Duration Time" ) ;
define("_WEBPHOTO_ITEM_DISPLAYTYPE", "Display Type");
define("_WEBPHOTO_ITEM_ONCLICK","Action when click thumbnail");
define("_WEBPHOTO_ITEM_SITEURL", "WebSite URL");
define("_WEBPHOTO_ITEM_ARTIST", "Artist");
define("_WEBPHOTO_ITEM_ALBUM", "Album");
define("_WEBPHOTO_ITEM_LABEL", "Label");
define("_WEBPHOTO_ITEM_VIEWS", "Views");
define("_WEBPHOTO_ITEM_PERM_DOWN" , "Download Permission" ) ;
define("_WEBPHOTO_ITEM_EMBED_TYPE" ,  "Plugin Type" ) ;
define("_WEBPHOTO_ITEM_EMBED_SRC" ,   "Plugin URL Param" ) ;
define("_WEBPHOTO_ITEM_EXTERNAL_URL" , "External URL" ) ;
define("_WEBPHOTO_ITEM_EXTERNAL_THUMB" , "External Thumbnail URL" ) ;
define("_WEBPHOTO_ITEM_PLAYLIST_TYPE",  "Playlist Type" ) ;
define("_WEBPHOTO_ITEM_PLAYLIST_FEED",  "Playlist Feed URL" ) ;
define("_WEBPHOTO_ITEM_PLAYLIST_DIR",   "Playlist Directory" ) ;
define("_WEBPHOTO_ITEM_PLAYLIST_CACHE", "Playlist Cache Name" ) ;
define("_WEBPHOTO_ITEM_PLAYLIST_TIME",  "Playlist Cache Time" ) ;
define("_WEBPHOTO_ITEM_CHAIN", "Chain");
define("_WEBPHOTO_ITEM_SHOWINFO", "Show Infomation");

// player table
define("_WEBPHOTO_PLAYER_TABLE","Player Table");
define("_WEBPHOTO_PLAYER_ID","Player ID");
define("_WEBPHOTO_PLAYER_TIME_CREATE" , "Create Time" ) ;
define("_WEBPHOTO_PLAYER_TIME_UPDATE" , "Update Time" ) ;
define("_WEBPHOTO_PLAYER_TITLE","Player Title ");
define("_WEBPHOTO_PLAYER_STYLE","Style Option");
define("_WEBPHOTO_PLAYER_WIDTH","Player Width");
define("_WEBPHOTO_PLAYER_HEIGHT","Player Height");
define("_WEBPHOTO_PLAYER_DISPLAYWIDTH","Display Width");
define("_WEBPHOTO_PLAYER_DISPLAYHEIGHT","Display Height");
define("_WEBPHOTO_PLAYER_SCREENCOLOR","Screen Color");
define("_WEBPHOTO_PLAYER_BACKCOLOR","Back Color");
define("_WEBPHOTO_PLAYER_FRONTCOLOR","Front Color");
define("_WEBPHOTO_PLAYER_LIGHTCOLOR","Light Color");

// FlashVar table
define("_WEBPHOTO_FLASHVAR_TABLE","FlashVar Table");
define("_WEBPHOTO_FLASHVAR_ID","FlashVar ID");
define("_WEBPHOTO_FLASHVAR_TIME_CREATE" , "Create Time" ) ;
define("_WEBPHOTO_FLASHVAR_TIME_UPDATE" , "Update Time" ) ;
define("_WEBPHOTO_FLASHVAR_ITEM_ID","Item ID");
define("_WEBPHOTO_FLASHVAR_WIDTH","Player Width");
define("_WEBPHOTO_FLASHVAR_HEIGHT","Player Height");
define("_WEBPHOTO_FLASHVAR_DISPLAYWIDTH","Display Width");
define("_WEBPHOTO_FLASHVAR_DISPLAYHEIGHT","Display Height");
define("_WEBPHOTO_FLASHVAR_IMAGE_SHOW","Show Image");
define("_WEBPHOTO_FLASHVAR_SEARCHBAR","Searchbar");
define("_WEBPHOTO_FLASHVAR_SHOWEQ","Show Equalizer");
define("_WEBPHOTO_FLASHVAR_SHOWICONS","Activity Icons");
define("_WEBPHOTO_FLASHVAR_SHOWNAVIGATION","Show Navigation");
define("_WEBPHOTO_FLASHVAR_SHOWSTOP","Show Stop");
define("_WEBPHOTO_FLASHVAR_SHOWDIGITS","Show Digits");
define("_WEBPHOTO_FLASHVAR_SHOWDOWNLOAD","Show Download");
define("_WEBPHOTO_FLASHVAR_USEFULLSCREEN","Full Screen Button");
define("_WEBPHOTO_FLASHVAR_AUTOSCROLL","Scroll Bar Off");
define("_WEBPHOTO_FLASHVAR_THUMBSINPLAYLIST","Thumbnails");
define("_WEBPHOTO_FLASHVAR_AUTOSTART","Auto Start");
define("_WEBPHOTO_FLASHVAR_REPEAT","Repeat");
define("_WEBPHOTO_FLASHVAR_SHUFFLE","Shuffle");
define("_WEBPHOTO_FLASHVAR_SMOOTHING","Smoothing");
define("_WEBPHOTO_FLASHVAR_ENABLEJS","Enable Javascript");
define("_WEBPHOTO_FLASHVAR_LINKFROMDISPLAY","Link from Display");
define("_WEBPHOTO_FLASHVAR_LINK_TYPE","Screen Hyperlink");
define("_WEBPHOTO_FLASHVAR_BUFFERLENGTH","Bufferlength");
define("_WEBPHOTO_FLASHVAR_ROTATETIME","Image Rotation Time");
define("_WEBPHOTO_FLASHVAR_VOLUME","volume");
define("_WEBPHOTO_FLASHVAR_LINKTARGET","Link Target");
define("_WEBPHOTO_FLASHVAR_OVERSTRETCH","Stretch Image/Video");
define("_WEBPHOTO_FLASHVAR_TRANSITION","Slide Show Transition");
define("_WEBPHOTO_FLASHVAR_SCREENCOLOR","Screen Color");
define("_WEBPHOTO_FLASHVAR_BACKCOLOR","Back Color");
define("_WEBPHOTO_FLASHVAR_FRONTCOLOR","Front Color");
define("_WEBPHOTO_FLASHVAR_LIGHTCOLOR","Light Color");
define("_WEBPHOTO_FLASHVAR_TYPE","Type");
define("_WEBPHOTO_FLASHVAR_FILE","Media File");
define("_WEBPHOTO_FLASHVAR_IMAGE","Preview Image");
define("_WEBPHOTO_FLASHVAR_LOGO","Player Logo Image");
define("_WEBPHOTO_FLASHVAR_LINK","Screen Hyperlink");
define("_WEBPHOTO_FLASHVAR_AUDIO","Audio Program");
define("_WEBPHOTO_FLASHVAR_CAPTIONS","Captions URL");
define("_WEBPHOTO_FLASHVAR_FALLBACK","Fallback URL");
define("_WEBPHOTO_FLASHVAR_CALLBACK","Callback URL");
define("_WEBPHOTO_FLASHVAR_JAVASCRIPTID","JavaScript ID");
define("_WEBPHOTO_FLASHVAR_RECOMMENDATIONS","Recommendations");
define("_WEBPHOTO_FLASHVAR_STREAMSCRIPT","Stream Script URL");
define("_WEBPHOTO_FLASHVAR_SEARCHLINK","Search Link");

// log file
define("_WEBPHOTO_LOGFILE_LINE","Line");
define("_WEBPHOTO_LOGFILE_DATE","Date");
define("_WEBPHOTO_LOGFILE_REFERER","Referer");
define("_WEBPHOTO_LOGFILE_IP","IP Address");
define("_WEBPHOTO_LOGFILE_STATE","State");
define("_WEBPHOTO_LOGFILE_ID","ID");
define("_WEBPHOTO_LOGFILE_TITLE","Title");
define("_WEBPHOTO_LOGFILE_FILE","File");
define("_WEBPHOTO_LOGFILE_DURATION","Duration");

// item option
define("_WEBPHOTO_ITEM_KIND_UNDEFINED","Undefined");
define("_WEBPHOTO_ITEM_KIND_NONE","No Media");
define("_WEBPHOTO_ITEM_KIND_GENERAL","General");
define("_WEBPHOTO_ITEM_KIND_IMAGE","Image (jpg,gif,png)");
define("_WEBPHOTO_ITEM_KIND_VIDEO","Video (wmv,mov,flv...");
define("_WEBPHOTO_ITEM_KIND_AUDIO","Audio (mp3...)");
define("_WEBPHOTO_ITEM_KIND_EMBED","Embed Plugin");
define("_WEBPHOTO_ITEM_KIND_EXTERNAL_GENERAL","External General");
define("_WEBPHOTO_ITEM_KIND_EXTERNAL_IMAGE","External Image");
define("_WEBPHOTO_ITEM_KIND_PLAYLIST_FEED","PlayList Web Feed");
define("_WEBPHOTO_ITEM_KIND_PLAYLIST_DIR", "PlayList Media directory");

define("_WEBPHOTO_ITEM_DISPLAYTYPE_GENERAL","General");
define("_WEBPHOTO_ITEM_DISPLAYTYPE_IMAGE","Image (jpg,gif,png)");
define("_WEBPHOTO_ITEM_DISPLAYTYPE_EMBED","Embed Plugin");
define("_WEBPHOTO_ITEM_DISPLAYTYPE_SWFOBJECT","FlashPlayer (swf)");
define("_WEBPHOTO_ITEM_DISPLAYTYPE_MEDIAPLAYER","MediaPlayer (jpg,gif,png,flv,mp3)");
define("_WEBPHOTO_ITEM_DISPLAYTYPE_IMAGEROTATOR","ImageRotator (jpg,gif,png)");

define("_WEBPHOTO_ITEM_ONCLICK_PAGE","Detail Page");
define("_WEBPHOTO_ITEM_ONCLICK_DIRECT","Direct Link");
define("_WEBPHOTO_ITEM_ONCLICK_POPUP","Image Popup");

define("_WEBPHOTO_ITEM_PLAYLIST_TYPE_DSC","What is the media file type?");
define("_WEBPHOTO_ITEM_PLAYLIST_TYPE_NONE","None");
define("_WEBPHOTO_ITEM_PLAYLIST_TYPE_IMAGE","Image (jpg,gif,png)");
define("_WEBPHOTO_ITEM_PLAYLIST_TYPE_AUDIO","Audio (mp3)");
define("_WEBPHOTO_ITEM_PLAYLIST_TYPE_VIDEO","Video (flv)");
define("_WEBPHOTO_ITEM_PLAYLIST_TYPE_FLASH","Flash (swf)");

define("_WEBPHOTO_ITEM_SHOWINFO_DESCRIPTION","Description");
define("_WEBPHOTO_ITEM_SHOWINFO_LOGOIMAGE","Thumbnail");
define("_WEBPHOTO_ITEM_SHOWINFO_CREDITS","Credits");
define("_WEBPHOTO_ITEM_SHOWINFO_STATISTICS","Statistics");
define("_WEBPHOTO_ITEM_SHOWINFO_SUBMITTER","Submitter");
define("_WEBPHOTO_ITEM_SHOWINFO_POPUP","PopUp");
define("_WEBPHOTO_ITEM_SHOWINFO_TAGS","Tags");
define("_WEBPHOTO_ITEM_SHOWINFO_DOWNLOAD","Download");
define("_WEBPHOTO_ITEM_SHOWINFO_WEBSITE","Site");
define("_WEBPHOTO_ITEM_SHOWINFO_WEBFEED","Feed");

define("_WEBPHOTO_ITEM_STATUS_WAITING","Waiting Approval");
define("_WEBPHOTO_ITEM_STATUS_APPROVED","Appoved");
define("_WEBPHOTO_ITEM_STATUS_UPDATED","Online (Updated)");
define("_WEBPHOTO_ITEM_STATUS_OFFLINE","Off Line");
define("_WEBPHOTO_ITEM_STATUS_EXPIRED","Expired");

// player option
define("_WEBPHOTO_PLAYER_STYLE_MONO","Monochrome");
define("_WEBPHOTO_PLAYER_STYLE_THEME","Color from Theme");
define("_WEBPHOTO_PLAYER_STYLE_PLAYER","Custom Player");
define("_WEBPHOTO_PLAYER_STYLE_PAGE","Custom Player/Page");

// flashvar desc
define("_WEBPHOTO_FLASHVAR_ID_DSC","[Basics] <br />Use this to set the RTMP stream identifier with the mediaplayer. <br />The ID will also be sent to statistics callbacks. <br />If you play a playlist, you can set an id for every entry. ");
define("_WEBPHOTO_FLASHVAR_HEIGHT_DSC","[Basics] ");
define("_WEBPHOTO_FLASHVAR_WIDTH_DSC","[Basics]  ");
define("_WEBPHOTO_FLASHVAR_DISPLAYHEIGHT_DSC","[Playlist] [mediaplayer] <br />Set this smaller as the height to show a playlist below the display. <br />If you set it the same as the height, the controlbar will auto-hide on top of the video. ");
define("_WEBPHOTO_FLASHVAR_DISPLAYWIDTH_DSC","[Playlist] [mediaplayer] <br />Bottom tracks:<br /> Screen = Player<br /> Side tracks:<br />Screen < Player ");
define("_WEBPHOTO_FLASHVAR_DISPLAY_DEFAULT","when 0, use value of the player.");
define("_WEBPHOTO_FLASHVAR_SCREENCOLOR_DSC","[Colors] <br />[imagerotator] change this to your HTML page's color make images of different sizes blend nicely. ");
define("_WEBPHOTO_FLASHVAR_BACKCOLOR_DSC","[Colors] <br />Backgroundcolor of the controls");
define("_WEBPHOTO_FLASHVAR_FRONTCOLOR_DSC","[Colors] <br />Texts &amp; buttons color of the controls");
define("_WEBPHOTO_FLASHVAR_LIGHTCOLOR_DSC","[Colors] <br />Rollover color of the controls");
define("_WEBPHOTO_FLASHVAR_COLOR_DEFAULT","when blank, use value of the player.");
define("_WEBPHOTO_FLASHVAR_SEARCHBAR_DSC","[Basics] <br />Set this to false to hide the searchbar below the display. <br />You can set the search destination with the searchlink flashvar. ");
define("_WEBPHOTO_FLASHVAR_IMAGE_SHOW_DSC","[Basics] <br />true = Show preview image");
define("_WEBPHOTO_FLASHVAR_IMAGE_DSC","[Basics] <br />If you play a sound or movie, set this to the url of a preview image. <br />When using a playlist, you can set an image for every entry. ");
define("_WEBPHOTO_FLASHVAR_FILE_DSC","[Basics] <br />Sets the location of the file or playlist to play. <br />The imagerotator only plays playlists. ");
define("_WEBPHOTO_FLASHVAR_LOGO_DSC","[Display] <br />Set this to an image that can be put as a watermark logo in the top right corner of the display. <br />Transparent PNG files give the best results. ");
define("_WEBPHOTO_FLASHVAR_OVERSTRETCH_DSC","[Display] <br />Sets how to stretch images/movies to make them fit the display. <br />false (default) = fit the display. <br />true = stretch them proportionally to fill the display. <br />fit = stretch them disproportionally<br />none = keep original dimensions. ");
define("_WEBPHOTO_FLASHVAR_SHOWEQ_DSC","[Display] <br />Set this to true to show a (fake) equalizer at the bottom of the display. <br />Nice for MP3 files. ");
define("_WEBPHOTO_FLASHVAR_SHOWICONS_DSC","[Display] <br />Set this to false to hide the activity icon and play button in the middle of the display. ");
define("_WEBPHOTO_FLASHVAR_TRANSITION_DSC","[Display] [imagerotator] <br />Sets the transition to use between images. ");
define("_WEBPHOTO_FLASHVAR_SHOWNAVIGATION_DSC","[Controlbar] <br />Set this to false to completely hide the controlbar. ");
define("_WEBPHOTO_FLASHVAR_SHOWSTOP_DSC","[Controlbar] [mediaplayer] <br />Set this to true to show a stop button in the controlbar. ");
define("_WEBPHOTO_FLASHVAR_SHOWDIGITS_DSC","[Controlbar] [mediaplayer] <br />Set this to false to hide the elapsed/remaining digits in the controlbar. ");
define("_WEBPHOTO_FLASHVAR_SHOWDOWNLOAD_DSC","[Controlbar] [mediaplayer] <br />Set this to true to show a button in the player controlbar which links to the link flashvar. ");
define("_WEBPHOTO_FLASHVAR_USEFULLSCREEN_DSC","[Controlbar] <br />Set this to false to hide the fullscreen button and disable fullscreen. ");
define("_WEBPHOTO_FLASHVAR_AUTOSCROLL_DSC","[Playlist] [mediaplayer] <br />Set this to true to automatically scroll through the playlist on rollover, instead of using a scrollbar. ");
define("_WEBPHOTO_FLASHVAR_THUMBSINPLAYLIST_DSC","[Playlist] [mediaplayer] <br />Set this to false to hide preview images in the display");
define("_WEBPHOTO_FLASHVAR_AUDIO_DSC","[Playback] <br />Assigns an additional, synchronized MP3. <br />Use this for a closed audio description or director's comments with the mediaplayer or background music with the rotator. <br />When using the mediaplayer and a playlist, you can assign audio to every entry. ");
define("_WEBPHOTO_FLASHVAR_AUTOSTART_DSC","[Playback] <br />Set this to true in the player to automatically start playing when the page loads, <br />or set this to false with the rotator to prevent the automatic rotation.");
define("_WEBPHOTO_FLASHVAR_BUFFERLENGTH_DSC","[Playback]  [mediaplayer] <br />Sets the number of seconds a video should be buffered before the players starts playback.<br />Set this small for fast connections or short videos and big for slow connections.  ");
define("_WEBPHOTO_FLASHVAR_CAPTIONS_DSC","[Playback] [mediaplayer] <br />Captions should be in TimedText format. <br />When using a playlist, you can assign captions for every entry. ");
define("_WEBPHOTO_FLASHVAR_FALLBACK_DSC","[Playback] [mediaplayer] <br />If you play an MP4 file, set here the location of an FLV fallback. <br />It'll automatically be picked by older flash player. ");
define("_WEBPHOTO_FLASHVAR_REPEAT_DSC","[Playback] <br />Set this to true to automatically repeat playback of all files. <br />Set this to list to playback an entire playlist once. ");
define("_WEBPHOTO_FLASHVAR_ROTATETIME_DSC","[Playback] <br />Sets the number of seconds an image is played back. ");
define("_WEBPHOTO_FLASHVAR_SHUFFLE_DSC","[Playback] <br />Set this to true to playback a playlist in random order. ");
define("_WEBPHOTO_FLASHVAR_SMOOTHING_DSC","[Playback] [mediaplayer] <br />Set this to false to turn of the smoothing of video. <br />Quality will decrease, but performance will increase. <br />Good for HD files and slower computers. ");
define("_WEBPHOTO_FLASHVAR_VOLUME_DSC","[Playback] <br />sets the startup volume for playback of sounds, movies and audiotracks. ");
define("_WEBPHOTO_FLASHVAR_ENABLEJS_DSC","[External] <br />Set this to true to enable javascript interaction. <br />This'll only work online! <br />Javascript interaction includes playback control, asynchroneous loading of media files and return of track information. ");
define("_WEBPHOTO_FLASHVAR_JAVASCRIPTID_DSC","[External] <br />If you interact with multiple mediaplayers/rotators in javascript, use this flashvar to give each of them a unique ID. ");
define("_WEBPHOTO_FLASHVAR_LINK_TYPE_DSC","[External] <br />This link is assigned to the display, logo and link button. <br >when None, assign nothing. <br />Else, assign a webpage to open. ");

//define("_WEBPHOTO_FLASHVAR_LINK_DSC","[External] <br />Set this to an external URL or downloadeable version of the file. <br />This link is assigned to the display, logo and link button. <br />With playlists, set links for every entry in the XML. ");

define("_WEBPHOTO_FLASHVAR_LINKFROMDISPLAY_DSC","[External] <br />Set this to true to make a click on the display result in a jump to the webpage assigned to the link flashvar. ");
define("_WEBPHOTO_FLASHVAR_LINKTARGET_DSC","[External] <br />Set this to the frame you want hyperlinks to open in. <br />Set it to _blank to open links in a new window or _top to open in the top frame. ");
define("_WEBPHOTO_FLASHVAR_CALLBACK_DSC","[External] <br />Set this to a serverside script that can process statistics. <br />The player will send it a POST every time an item starts/stops. <br />To send callbacks automatically to Google Analytics, set this to urchin or analytics. ");
define("_WEBPHOTO_FLASHVAR_RECOMMENDATIONS_DSC","[External] [mediaplayer] <br />Set this to an XML with items you want to recommend. <br />The thumbs will show up when the current movie stops playing, just like Youtube. ");
define("_WEBPHOTO_FLASHVAR_SEARCHLINK_DSC","[External] [mediaplayer] <br />Sets the destination of the searchbar. <br />The default is 'search.longtail.tv', but you can set other destinations. <br />Use the searchbar flashvar to hide the bar altogether. ");
define("_WEBPHOTO_FLASHVAR_STREAMSCRIPT_DSC","[External] [mediaplayer] <br />Set this to the URL of a script to use for http streaming movies. <br />The parameters file and pos are sent to the script. <br />If you use LigHTTPD streaming, set this to lighttpd. ");
define("_WEBPHOTO_FLASHVAR_TYPE_DSC","[External] [mediaplayer] <br />the mediaplayer which determines the type of file to play based upon the last three characters of the file flashvar. <br />This doesn't work with database id's or mod_rewrite, so you can set this flashvar to the correct filetype. <br />If not sure, the player assumes a playlist is loaded. ");

// flashvar option
define("_WEBPHOTO_FLASHVAR_LINK_TYPE_NONE","None");
define("_WEBPHOTO_FLASHVAR_LINK_TYPE_SITE","Website URL");
define("_WEBPHOTO_FLASHVAR_LINK_TYPE_PAGE","Detail Page");
define("_WEBPHOTO_FLASHVAR_LINK_TYPE_FILE","Media File");
define("_WEBPHOTO_FLASHVAR_LINKTREGET_SELF","Self Window");
define("_WEBPHOTO_FLASHVAR_LINKTREGET_BLANK","New Window");
define("_WEBPHOTO_FLASHVAR_OVERSTRETCH_FALSE","False");
define("_WEBPHOTO_FLASHVAR_OVERSTRETCH_FIT","Fit");
define("_WEBPHOTO_FLASHVAR_OVERSTRETCH_TRUE","True");
define("_WEBPHOTO_FLASHVAR_OVERSTRETCH_NONE","None");
define("_WEBPHOTO_FLASHVAR_TRANSITION_OFF","Slide Show Player Off");
define("_WEBPHOTO_FLASHVAR_TRANSITION_FADE","Fade");
define("_WEBPHOTO_FLASHVAR_TRANSITION_SLOWFADE","Slow Fade");
define("_WEBPHOTO_FLASHVAR_TRANSITION_BGFADE","Background Fade");
define("_WEBPHOTO_FLASHVAR_TRANSITION_CIRCLES","Circles");
define("_WEBPHOTO_FLASHVAR_TRANSITION_BLOCKS","Blocks");
define("_WEBPHOTO_FLASHVAR_TRANSITION_BUBBLES","Bubbles");
define("_WEBPHOTO_FLASHVAR_TRANSITION_FLASH","Flash");
define("_WEBPHOTO_FLASHVAR_TRANSITION_FLUIDS","Fluids");
define("_WEBPHOTO_FLASHVAR_TRANSITION_LINES","Lines");
define("_WEBPHOTO_FLASHVAR_TRANSITION_RANDOM","Random");

// edit form
define("_WEBPHOTO_CAP_DETAIL","Show Detail");
define("_WEBPHOTO_CAP_DETAIL_ONOFF","On/Off");
define("_WEBPHOTO_PLAYER","Player");
define("_WEBPHOTO_EMBED_ADD", "Add Embed Plugin" ) ;
define("_WEBPHOTO_EMBED_THUMB","The external source will provide a thumbnail.");
define("_WEBPHOTO_ERR_EMBED","You MUST set plugin");
define("_WEBPHOTO_ERR_PLAYLIST","You MUST set playlist");

// sort
define("_WEBPHOTO_SORT_VOTESA","Votes (Least)");
define("_WEBPHOTO_SORT_VOTESD","Votes (Most)");
define("_WEBPHOTO_SORT_VIEWSA","Media Views (Least)");
define("_WEBPHOTO_SORT_VIEWSD","Media Views (Most)");

// flashvar form
define("_WEBPHOTO_FLASHVARS_FORM","FlashVars");
define("_WEBPHOTO_FLASHVARS_LIST","List of Flash Variables");
define("_WEBPHOTO_FLASHVARS_LOGO_SELECT","Select a player logo");
define("_WEBPHOTO_FLASHVARS_LOGO_UPLOAD","Upload a player logo ");
define("_WEBPHOTO_FLASHVARS_LOGO_DSC","[Display] <br />Player Logos are in ");
define("_WEBPHOTO_BUTTON_COLOR_PICKUP","Color");
define("_WEBPHOTO_BUTTON_RESTORE","Restore Default");

// Playlist Cache 
define("_WEBPHOTO_PLAYLIST_STATUS_REPORT","Status Report");
define("_WEBPHOTO_PLAYLIST_STATUS_FETCHED","This webfeed has been fetched and cached.");
define("_WEBPHOTO_PLAYLIST_STATUS_CREATED","A new playlist has been cached");
define("_WEBPHOTO_PLAYLIST_ERR_CACHE","[ERROR] creating cache file");
define("_WEBPHOTO_PLAYLIST_ERR_FETCH","Failed to fetch the web feed. <br />Please confirm the web feed location and refresh the cache.");
define("_WEBPHOTO_PLAYLIST_ERR_NODIR","The media directory does not exist");
define("_WEBPHOTO_PLAYLIST_ERR_EMPTYDIR","The media directory is empty");
define("_WEBPHOTO_PLAYLIST_ERR_WRITE","can not write the cache file");

define("_WEBPHOTO_USER",  "User" ) ;
define("_WEBPHOTO_OR",  "OR" ) ;

//---------------------------------------------------------
// v0.60
//---------------------------------------------------------
// item table
//define("_WEBPHOTO_ITEM_ICON" , "Icon Name" ) ;

define("_WEBPHOTO_ITEM_EXTERNAL_MIDDLE" , "External Middle URL" ) ;

// cat table
define("_WEBPHOTO_CAT_IMG_NAME" , "Category Image Name" ) ;

// edit form
define("_WEBPHOTO_CAP_MIDDLE_SELECT", "Select the middle image");

//---------------------------------------------------------
// v0.70
//---------------------------------------------------------
// item table
define("_WEBPHOTO_ITEM_CODEINFO", "Code Info");
define("_WEBPHOTO_ITEM_PAGE_WIDTH",  "Page Width");
define("_WEBPHOTO_ITEM_PAGE_HEIGHT", "Page Height");
define("_WEBPHOTO_ITEM_EMBED_TEXT",  "Embed");

// item option
define("_WEBPHOTO_ITEM_CODEINFO_CONT","Media");
define("_WEBPHOTO_ITEM_CODEINFO_THUMB","Thumbnail Image");
define("_WEBPHOTO_ITEM_CODEINFO_MIDDLE","Middle Image");
define("_WEBPHOTO_ITEM_CODEINFO_FLASH","Flash Video");
define("_WEBPHOTO_ITEM_CODEINFO_DOCOMO","Docomo Video");
define("_WEBPHOTO_ITEM_CODEINFO_PAGE","URL");
define("_WEBPHOTO_ITEM_CODEINFO_SITE","Site");
define("_WEBPHOTO_ITEM_CODEINFO_PLAY","Playlist");
define("_WEBPHOTO_ITEM_CODEINFO_EMBED","Embed");
define("_WEBPHOTO_ITEM_CODEINFO_JS","Script");

define("_WEBPHOTO_ITEM_PLAYLIST_TIME_HOUR", "1 hour");
define("_WEBPHOTO_ITEM_PLAYLIST_TIME_DAY",  "1 day");
define("_WEBPHOTO_ITEM_PLAYLIST_TIME_WEEK", "1 week");
define("_WEBPHOTO_ITEM_PLAYLIST_TIME_MONTH","1 month");

// photo
define("_WEBPHOTO_DOWNLOAD","Download");

// file_read
define("_WEBPHOTO_NO_FILE", "Not exist file");

//---------------------------------------------------------
// v0.80
//---------------------------------------------------------
// item table
define("_WEBPHOTO_ITEM_ICON_NAME" ,   "Icon Name" ) ;
define("_WEBPHOTO_ITEM_ICON_WIDTH" ,  "Icon Width" ) ;
define("_WEBPHOTO_ITEM_ICON_HEIGHT" , "Icon Height" ) ;

// item form
define("_WEBPHOTO_DSC_SET_ITEM_TIME_UPDATE",  "Set update time");
define("_WEBPHOTO_DSC_SET_ITEM_TIME_PUBLISH", "Set publish time");
define("_WEBPHOTO_DSC_SET_ITEM_TIME_EXPIRE",  "Set expire time");

//---------------------------------------------------------
// v0.81
//---------------------------------------------------------
// vote option
define("_WEBPHOTO_VOTE_RATING_1", "1");
define("_WEBPHOTO_VOTE_RATING_2", "2");
define("_WEBPHOTO_VOTE_RATING_3", "3");
define("_WEBPHOTO_VOTE_RATING_4", "4");
define("_WEBPHOTO_VOTE_RATING_5", "5");
define("_WEBPHOTO_VOTE_RATING_6", "6");
define("_WEBPHOTO_VOTE_RATING_7", "7");
define("_WEBPHOTO_VOTE_RATING_8", "8");
define("_WEBPHOTO_VOTE_RATING_9", "9");
define("_WEBPHOTO_VOTE_RATING_10","10");

//---------------------------------------------------------
// v0.90
//---------------------------------------------------------
// edit form
define("_WEBPHOTO_GROUP_PERM_ALL" , "All Groups" ) ;

//---------------------------------------------------------
// v1.00
//---------------------------------------------------------
// item table
define("_WEBPHOTO_ITEM_EDITOR", "Editor");
define("_WEBPHOTO_ITEM_DESCRIPTION_HTML",   "HTML tags");
define("_WEBPHOTO_ITEM_DESCRIPTION_SMILEY", "Smiley icons");
define("_WEBPHOTO_ITEM_DESCRIPTION_XCODE",  "XOOPS codes");
define("_WEBPHOTO_ITEM_DESCRIPTION_IMAGE",  "Images");
define("_WEBPHOTO_ITEM_DESCRIPTION_BR",     "Linebreak");

// edit form
define("_WEBPHOTO_TITLE_EDITOR_SELECT", "Select Editor");
define("_WEBPHOTO_CAP_DESCRIPTION_OPTION", "Options");
define("_WEBPHOTO_CAP_HTML",   "Enable HTML tags");
define("_WEBPHOTO_CAP_SMILEY", "Enable smiley icons");
define("_WEBPHOTO_CAP_XCODE",  "Enable XOOPS codes");
define("_WEBPHOTO_CAP_IMAGE",  "Enable images");
define("_WEBPHOTO_CAP_BR",     "Enable linebreak");

//---------------------------------------------------------
// v1.10
//---------------------------------------------------------
// item table
define("_WEBPHOTO_ITEM_WIDTH",  "Width of Image");
define("_WEBPHOTO_ITEM_HEIGHT", "Height of Image");
define("_WEBPHOTO_ITEM_CONTENT", "Text Content");

//---------------------------------------------------------
// v1.20
//---------------------------------------------------------
// item option
define("_WEBPHOTO_ITEM_CODEINFO_PDF","PDF");
define("_WEBPHOTO_ITEM_CODEINFO_SWF","Flash swf");

// form
define("_WEBPHOTO_ERR_PDF", "Cannot create PDF");
define("_WEBPHOTO_ERR_SWF", "Cannot create Flash swf");

// jodconverter
define("_WEBPHOTO_JODCONVERTER_JUNK_WORDS", "");

// === define end ===
}

?>