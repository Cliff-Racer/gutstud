<?php
$camera = array(
    "torgcenter" => array(
        "obuvnoi" => array(
            "cell1",
            "cell2"
        ),
        "eda" => array(
            "cell1",
            "cell2"
        )
    ),
);

$worldspace = array(
    "nirn" => array(
        "tamriel" => array(
            "cyrodiil", "morrowind", "skyrim" => array(
                "whiterun", "winterhold", "dawnstar", "markarth"
            ), "highrock"
        ),
        "akaviri" => array(
            "hzche"
        )
    ), 
    array(
        "messer", "secunda"
    )
);

echo "<pre>";
print_r($worldspace);
echo "</pre>";
?>