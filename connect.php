<?php
    $echo "now";
    $client = new MongoClient('mongodb+srv://louie:19950810@cluster0-q0y0c.mongodb.net/test?retryWrites=true&w=majority');
    echo "Connection to mongodb successfully";
    $db = $client->ratemyta;
    echo "Database ratemyta selected";
    $collection = $db->tatable;
    echo "Table tatable selected";
?>
