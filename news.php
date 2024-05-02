<?php 
$html = " <div class='news-item'>
    <a class='article-link'></a>
    <div class='image-container'>
       <a href='' class='category cat-1'>News</a>
       <a href='' class='image-standard'><img src='images/news-item1.png' alt='News Item 1'></a>
    </div>
    <div class='news-content'>
        <h3>
            <a href ='#'>
                Emily Mackley - Netmatters 5 Year Legend
            </a>
        </h3>
        <p>Today, we celebrate the brilliant accomplishments of Emily Mackley as she receives the 5 Year Legend...</p>
    <a class='btn btn-cat-1 cat-1' href='#'>Read More</a>
    <div class='news-user'>
        <div class = 'news-user-avatar'>
            <img src='images/netmatters-avatar.webp' alt>
        </div>
        <div class='news-user-details'>
            <strong>Posted by Netmatters</strong>
            <br>
            <span>6th March 2024</span>

        </div>
    </div>
    </div>
</div>";
include 'databaseconnect.php';
// $query = "SELECT * FROM news_item ORDER BY date DESC";
// $res = $conn->query($query);
function foreignQuery($id,$col,$loc_conn){
    $fq = "SELECT * FROM author WHERE id = $id";
    $loc = $loc_conn->query($fq);
    //Should only be one return
    foreach($loc as $lrow){
        return $lrow[$col];
    }
    
    
}
function dateQuery($id,$loc_conn){
    $dq = "SELECT DATE_FORMAT(date, '%D %M %Y') date FROM news_item WHERE id = $id";
    $loc = $loc_conn->query($dq);
    //Should only be one return
    foreach($loc as $lrow){
        return $lrow['date'];
    }
    
    
}

foreignQuery(0,'name',$conn);
$query = "SELECT * FROM news_item ORDER BY date DESC";
$res = $conn->query($query);

// if($res->rowCount()>=3){
// for($i =0;$i<3;$i++){//($res as $row){
//   echo $res->fetch($i)['description'];

// }
// }
 //echo $res[0]['description'];
// echo $res->fetch()['description'];
// echo $res->fetch()['description'];
$counter = 0;
    foreach($res as $row){
      $overflow =  $counter == 2 ? 'news-overflow' : '';
        echo " <div class='news-item " . $overflow . "'>
        <a href='" . $row['link'] . "' class='article-link'></a>
        <div class='image-container'>
           <a href='' class='category cat-1' style='background-color: ". $row['colour'] .";'>" . $row['category'] . "</a>
           <a href='' class='image-standard'><img src='" . $row['image_src'] . "' alt='News Item 1'></a>
        </div>
        <div class='news-content' >
            <h3 style='color: ". $row['colour'] . "'>
                <a href ='#'>
                " . $row['headline'] . "
                </a>
            </h3>
            <p>" . $row['description'] . "</p>
        <a class='btn btn-cat-1 cat-1' href='#' style='background-color: ". $row['colour'] ."; border-color: ". $row['colour'] .";'>Read More</a>
        <div class='news-user'>
            <div class = 'news-user-avatar'>
                <img src='" . foreignQuery($row['author_id'],'image_src',$conn) . "' alt>
            </div>
            <div class='news-user-details'>
                <strong>Posted by " . foreignQuery($row['author_id'],'name',$conn) . "</strong>
                <br>
                <span>" . dateQuery($row['id'],$conn) . "</span>
    
            </div>
        </div>
        </div>
    </div>";
    $counter++;
    }
?>