<?php
function clearString($innerString){
    $innerString=trim($innerString);
    $innerString=stripslashes($innerString);
    $innerString=str_ireplace("<script>", "", $innerString);
    $innerString=str_ireplace("</script>", "", $innerString);
    $innerString=str_ireplace("<script src", "", $innerString);
    $innerString=str_ireplace("<script type=", "", $innerString);
    $innerString=str_ireplace("SELECT * FROM", "", $innerString);
    $innerString=str_ireplace("DELETE FROM", "", $innerString);
    $innerString=str_ireplace("INSERT INTO", "", $innerString);
    $innerString=str_ireplace("DROP TABLE", "", $innerString);
    $innerString=str_ireplace("DROP DATABASE", "", $innerString);
    $innerString=str_ireplace("TRUNCATE TABLE", "", $innerString);
    $innerString=str_ireplace("SHOW TABLES;", "", $innerString);
    $innerString=str_ireplace("SHOW DATABASES;", "", $innerString);
    $innerString=str_ireplace("<?php", "", $innerString);
    $innerString=str_ireplace("?>", "", $innerString);
    $innerString=str_ireplace("--", "", $innerString);
    $innerString=str_ireplace("^", "", $innerString);
    $innerString=str_ireplace("<", "", $innerString);
    $innerString=str_ireplace("[", "", $innerString);
    $innerString=str_ireplace("]", "", $innerString);
    $innerString=str_ireplace("==", "", $innerString);
    $innerString=str_ireplace(";", "", $innerString);
    $innerString=str_ireplace("::", "", $innerString);
    $innerString=trim($innerString);
    $innerString=stripslashes($innerString);
    return $innerString;

}
?>