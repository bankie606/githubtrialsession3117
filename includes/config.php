<?php
/*
config.php - stores application configuration info

*/
define('DEBUG',TRUE); #we want to see all errors



//database credentials
include 'credentials.php';


//Allows the current page to know it's own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//here are our page links:
$nav1["template.php"] = "Template";
$nav1["about.php"] = "About";
$nav1["contact.php"] = "Contact";
$nav1["book.php"] = "Book";


$banner = "Gadgets";//default banner data

switch(THIS_PAGE)
{
    case "template.php":
        $title = "Template Title Tag";
        $banner = "Template Page";
        $bottomtext = "Howdy.";
    break;
    
    case "about.php":
        $title = "About Title Tag";
        $banner = "About This Web Page";
        $bottomtext = "Pretty interesting, eh?";
    break;
        
    case "record_list.php":
        $title = "Record List Title Tag";
        $banner = "An Inventory of Records";
        $bottomtext = "Pretty interesting, eh?";
    break;

    case "book.php":
        $title = "Book Title Tag";
        $banner = "Book Header";
        $bottomtext = "Press the left and right arrows to scroll through the book";
    break;  
    
    case "contact.php":
        $title = "Contact Title Tag";
        $banner = "Contact Us";
        $bottomtext = "We promise to eventually respond.";
    break;     

    default:
        $title = THIS_PAGE;
        $banner = "Gadgets";
    
}

/*
' . XXX . '

*/
function makeLinks($nav){
    $myReturn = '';
    
    foreach($nav as $page => $text)
    {
       
        if(THIS_PAGE == $page)
        {
            $myReturn .= '
            <li class="active">
              <a href="' . $page . '">' . $text . '</a>
           </li>
           ';
        }else{
            $myReturn .= '
            <li>
              <a href="' . $page . '">' . $text . '</a>
           </li>
           ';
        }
    }
    
  return $myReturn;
}


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}



