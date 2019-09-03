<?php
echo "<BR><B>string:</B>$string";
echo "<BR><B>regular expression:</B>&nbsp;$pattern";
if (get_magic_quotes_gpc()){
    echo "<BR><BR>";
    echo "<BR>Stripping magic quotes....";
    $string = stripslashes($string);
    $pattern = stripslashes($pattern);
    echo "<BR><B>string:</B>&nbsp;$string";
    echo "<BR><B>regular expression:</B>&nbsp;$pattern";
}
$found = ereg($pattern, $string, $matches);
echo "<BR><BR>";
if ($found)
{
    echo "<BR><B>valid:</B>&nbsp;true";
    echo "<BR><BR>";
    echo "<BR><B>Components:&nbsp</B>";
    for ($i = 0; $i < count($matches); $i++)
    {
        echo "<BR>$matches[$i]";
    }
}
else
    echo "<BR><B>valid:</B>&nbsp;false";
?>
