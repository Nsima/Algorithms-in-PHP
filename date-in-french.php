
function get_date($timestamp){

 $date = date("D d F, Y H:i:s A", $timestamp);
 
$date = str_replace(array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Janvier', 'Février', 'Mars', 'avril', 'Mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembrer', 'décembre'), $date);

$date = str_replace(array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"), array("Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"), $date);

return $date;
    
}