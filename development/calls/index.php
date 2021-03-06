<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Babel Project Development Meetings";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Jess Garms";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Call Info</h2>
		<p>Toll-free in the US and Canada: (877)421-0038</p>
		<p>Participant Passcode: 118422</p>
		<p>Call time: Mondays, 10 AM Pacific Time (1 PM Eastern Time)</p>
		
		<h2>New Call Archives have been moved to <a href="http://wiki.eclipse.org/Babel_/_Development_Status_Meetings">http://wiki.eclipse.org/Babel_/_Development_Status_Meetings</a></h2>

		<h2>Call Archives</h2>
		<ul>
			<li><a href="20090223.php">February 23, 2009</a></li>
			<li>February 16, 2009 - meeting cancelled</li>
			<li><a href="20090209.php">February 9, 2009</a></li>
			<li><a href="20090202.php">February 2, 2009</a></li>
			<li><a href="20090126.php">January 26, 2009</a></li>
			<li><a href="20090119.php">January 19, 2009</a></li>
			<li><a href="20090112.php">January 12, 2009</a></li>
			<li><a href="20090105.php">January 5, 2009</a></li>
			<li>December 29, 2008 - meeting cancelled</li>
			<li><a href="12-22-08.php">December 22, 2008</a></li>
			<li><a href="12-15-08.php">December 15, 2008</a></li>
			<li><a href="12-08-08.php">December 8, 2008</a></li>
			<li><a href="12-01-08.php">December 1, 2008</a></li>
			<li><a href="11-24-08.php">November 24, 2008</a></li>
			<li><a href="11-17-08.php">November 17, 2008</a></li>
			<li><a href="11-10-08.php">November 10, 2008</a></li>
			<li><a href="11-03-08.php">November 3, 2008</a></li>
			<li><a href="10-27-08.php">October 27, 2008</a></li>
			<li><a href="10-20-08.php">October 20, 2008</a></li>
			<li>October 13, 2008 - meeting cancelled</li>
			<li><a href="10-06-08.php">October 6, 2008</a></li>
			<li><a href="09-29-08.php">September 29, 2008</a></li>
			<li><a href="09-22-08.php">September 22, 2008</a></li>
			<li><a href="09-15-08.php">September 15, 2008</a></li>
			<li><a href="09-08-08.php">September 9, 2008</a></li>
			<li>September 1, 2008 - meeting cancelled</li>
			<li><a href="08-25-08.php">August 25, 2008</a></li>
			<li><a href="08-11-08.php">August 11, 2008</a></li>
			<li><a href="08-04-08.php">August 4, 2008</a></li>
			<li><a href="07-28-08.php">July 28, 2008</a></li>
			<li><a href="07-21-08.php">July 21, 2008</a></li>
			<li><a href="07-14-08.php">July 14, 2008</a></li>
			<li>July 7, 2008 - meeting cancelled</li>
			<li>June 30, 2008 - meeting cancelled</li>
			<li><a href="06-23-08.php">June 23, 2008</a></li>
			<li><a href="06-16-08.php">June 16, 2008</a></li>
			<li><a href="06-09-08.php">June 9, 2008</a></li>
			<li><a href="06-02-08.php">June 2, 2008</a></li>
			<li>May 26, 2008 - meeting cancelled</li>
			<li><a href="05-19-08.php">May 19, 2008</a></li>
			<li><a href="05-12-08.php">May 12, 2008</a></li>
			<li><a href="05-05-08.php">May 5, 2008</a></li>
			<li><a href="04-28-08.php">April 28, 2008</a></li>
			<li><a href="04-21-08.php">April 21, 2008</a></li>
			<li><a href="04-14-08.php">April 14, 2008</a></li>
			<li><a href="04-07-08.php">April 7, 2008</a></li>
			<li><a href="03-31-08.php">March 31, 2008</a></li>
			<li><a href="03-24-08.php">March 24, 2008</a></li>
			<li><a href="EclipseConBOF.php">March 19, 2008 (EclipseCon BOF)</a></li>
			<li><a href="EclipseWorkingSession.php">March 17, 2008 (EclipseCon Working Session)</a></li>
			<li><a href="03-10-08.php">March 10, 2008</a></li> 
			<li><a href="03-03-08.php">March 3, 2008</a></li>
			<li><a href="02-25-08.php">February 25, 2008</a></li>
			<li><a href="02-11-08.php">February 18, 2008 (Canceled)</a></li>
			<li><a href="02-11-08.php">February 11, 2008</a></li>
			<li><a href="02-04-08.php">February 04, 2008</a></li>
			<li><a href="01-28-08.php">January 28, 2008</a></li>
			<li><a href="01-21-08.php">January 21, 2008</a></li>
			<li><a href="01-14-08.php">January 14, 2008</a></li>
			<li><a href="12-17-07.php">December 17, 2007</a></li>
			<li><a href="12-10-07.php">December 10, 2007</a></li>
			<li><a href="12-03-07.php">December 3, 2007</a></li>
			<li><a href="11-26-07.php">November 26, 2007</a></li>
			<li><a href="11-12-07.php">November 12, 2007</a></li>
			<br/>
		</ul>		
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
