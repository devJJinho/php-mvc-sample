<body>
    <h1>Board View</h1>
    <ul>
    <?php
    foreach($this->res as $row){
        foreach($row as $each){
            echo "<li>{$each}</li>";
        }
    }
    ?>
    </ul>
