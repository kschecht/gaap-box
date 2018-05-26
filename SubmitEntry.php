<?php

// determine if user submitted an entry, should never be false
if (isset($_POST['entryTxt'])) {

    //connect to database
    $db_connection = new mysqli($host, $user, $password, $database);
    //kill if error connecting to db
    if ($db_connection->connect_error) {
        die($db_connection->connect_error);
    }

    // get id of highest entry in db, 1+id# will be new id#
    // TODO: validate all this functions correctly
    // TODO: may want to hash ids for security reasons
    $idQuery = <<<QER
        select EntryID from EntryTable order by EntryID desc;
QER;
    $idResult = $db_connection->query($idQuery);
    if ($result2->num_rows > 0) {
        // at least 1 entry in the table
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $id = ((int)$row['EntryID']) + 1;
    } else {
        // first entry added to table
        $id = 1;
    }

    // query to add entry to db
    // TODO: quotes may be needed around values
    $query = <<<QER
        insert into EntryTable values ($id, $_POST["entryTxt"], NULL);
QER;

    // runs query to submit entry to db
    $result = $db_connection->query($query);
}

header("Location: index.html");

?>