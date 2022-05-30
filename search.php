<<<<<<< HEAD
<?php 
session_start();
/**********************************поиск по место прибытия***************************************************/
function search ($query) 
{ 
  require('connect.php');

    $query = trim($query); 

    $query = mysqli_real_escape_string($link, $query);
    $query = htmlspecialchars($query);


    if (!empty($query)) 
    { 
            $q = "`to_city` LIKE '%$query%'
                  OR `to_country` LIKE '%$query%'";
               
                    $_SESSION['query'] = $q;


                    header('Location: index.php?page=search');
        
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 

if (!empty($_POST['query'])) { 
    $search_result = search ($_POST['query']); 
    echo $search_result; 
}
/********************************поиска по месту вылета*****************************************************/
function search_from ($query_from) 
{ 
  require('connect.php');

    $query_from = trim($query_from); 
    $query_from = mysqli_real_escape_string($link, $query_from);
    $query_from = htmlspecialchars($query_from);

    if (!empty($query_from)) 
    { 
        $q_from2= $link->query("SELECT `id` FROM `from_cat` WHERE `from_there` LIKE '%$query_from%'");
        $myrow =  mysqli_fetch_array($q_from2);
        $id = $myrow['id'];


            $q_from = "`from_there` LIKE '%$id%'";

                    $_SESSION['query_from'] = $q_from;

                    header('Location: index.php?page=search');

        
    } else {
        header('Location: index.php?page=index');
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 

if (!empty($_POST['query_from'])) { 
    $search_result = search_from ($_POST['query_from']); 
    echo $search_result; 
}

/****************************************поиск по времени вылета*********************************************/

function search_date_from ($query_date_from) 
{ 
  require('connect.php');

    $query_date_from = trim($query_date_from); 

    $query_date_from = mysqli_real_escape_string($link, $query_date_from);
    $query_date_from = htmlspecialchars($query_date_from);


    if (!empty($query_date_from)) 
    { 

                    $_SESSION['query_date_from'] = $query_date_from;


                    header('Location: index.php?page=search');

        
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 

if (!empty($_POST['query_date_from'])) { 
    $search_result = search_date_from ($_POST['query_date_from']); 
    echo $search_result; 
}

/*****************************************поиск по времени возвращения********************************************/

function search_date_to ($query_date_to) 
{ 
  require('connect.php');

    $query_date_from = trim($query_date_to); 

    $query_date_to = mysqli_real_escape_string($link, $query_date_to);
    $query_date_to = htmlspecialchars($query_date_to);


    if (!empty($query_date_to)) 
    { 

                    $_SESSION['query_date_to'] = $query_date_to;


                    header('Location: index.php?page=search');

        
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 

if (!empty($_POST['query_date_to'])) { 
    $search_result = search_date_to ($_POST['query_date_to']); 
    echo $search_result; 
}
=======
<?php 
session_start();
/**********************************поиск по место прибытия***************************************************/
function search ($query) 
{ 
  require('connect.php');

    $query = trim($query); 

    $query = mysqli_real_escape_string($link, $query);
    $query = htmlspecialchars($query);


    if (!empty($query)) 
    { 
            $q = "`to_city` LIKE '%$query%'
                  OR `to_country` LIKE '%$query%'";
               
                    $_SESSION['query'] = $q;


                    header('Location: index.php?page=search');
        
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 

if (!empty($_POST['query'])) { 
    $search_result = search ($_POST['query']); 
    echo $search_result; 
}
/********************************поиска по месту вылета*****************************************************/
function search_from ($query_from) 
{ 
  require('connect.php');

    $query_from = trim($query_from); 
    $query_from = mysqli_real_escape_string($link, $query_from);
    $query_from = htmlspecialchars($query_from);

    if (!empty($query_from)) 
    { 
        $q_from2= $link->query("SELECT `id` FROM `from_cat` WHERE `from_there` LIKE '%$query_from%'");
        $myrow =  mysqli_fetch_array($q_from2);
        $id = $myrow['id'];


            $q_from = "`from_there` LIKE '%$id%'";

                    $_SESSION['query_from'] = $q_from;

                    header('Location: index.php?page=search');

        
    } else {
        header('Location: index.php?page=index');
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 

if (!empty($_POST['query_from'])) { 
    $search_result = search_from ($_POST['query_from']); 
    echo $search_result; 
}

/****************************************поиск по времени вылета*********************************************/

function search_date_from ($query_date_from) 
{ 
  require('connect.php');

    $query_date_from = trim($query_date_from); 

    $query_date_from = mysqli_real_escape_string($link, $query_date_from);
    $query_date_from = htmlspecialchars($query_date_from);


    if (!empty($query_date_from)) 
    { 

                    $_SESSION['query_date_from'] = $query_date_from;


                    header('Location: index.php?page=search');

        
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 

if (!empty($_POST['query_date_from'])) { 
    $search_result = search_date_from ($_POST['query_date_from']); 
    echo $search_result; 
}

/*****************************************поиск по времени возвращения********************************************/

function search_date_to ($query_date_to) 
{ 
  require('connect.php');

    $query_date_from = trim($query_date_to); 

    $query_date_to = mysqli_real_escape_string($link, $query_date_to);
    $query_date_to = htmlspecialchars($query_date_to);


    if (!empty($query_date_to)) 
    { 

                    $_SESSION['query_date_to'] = $query_date_to;


                    header('Location: index.php?page=search');

        
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 

if (!empty($_POST['query_date_to'])) { 
    $search_result = search_date_to ($_POST['query_date_to']); 
    echo $search_result; 
}
>>>>>>> a0c31ee29a04165fa69d1161bf23b3a25b534ae3
?>