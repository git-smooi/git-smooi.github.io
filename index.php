<?php
function htmltop ()
{
	$html = '<!DOCTYPE html>';
	$html .= '<html>';
	$html .= '<head>';
	$html .= '</head>';
	$html .= '<body>';
	$html .= '<p>';
	$html .= 'SMOOI';
	$html .= '</p>';
	return $html;
}

function htmlbottom ()
{
	$html = '</body>';
	$html .= '</html>'
	return $html;
}


$html = htmltop();
$html .= htmlbottom();

echo $html;

?>