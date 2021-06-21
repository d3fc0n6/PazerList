<?php
header("Content-Type: application/json");

// Use the ?as=<...> parameter to override the attribute (cheater, suspicious, exploiter, racist)
$markType = "cheater";
if (isset($_GET["as"])) {
    $markType = $_GET["as"];
}

$chList = file_get_contents("https://raw.githubusercontent.com/d3fc0n6/PazerList/master/list.cfg");

// Convert all players
$playerArray = [];
foreach(preg_split("/((\r?\n)|(\r\n?))/", $chList) as $chLine) {
    $matches = [];
    preg_match("/\d+/", $chLine, $matches);

    if (count($matches) == 1) {
        $bdPlayer = [
            "attributes" => [ $markType ],
            "steamid" => "[U:1:" . $matches[0] . "]"
        ];
        array_push($playerArray, $bdPlayer);
    }
} 

// Create Bot Detector Array
$bdArray = [
    "\$schema" => "https://raw.githubusercontent.com/PazerOP/tf2_bot_detector/master/schemas/v3/playerlist.schema.json",
    "file_info" => [
        "authors" => [ "WalterWhite3", "d3fc0n6" ],
        "description" => "List of Bot Detector users found by d3fc0n6.",
        "title" => "Bot Detector users",
        "update_url" => "https://raw.githubusercontent.com/d3fc0n6/PazerList/master/playerlist.tf2bd.json"
    ],
    "players" => $playerArray
];

echo json_encode($bdArray, JSON_PRETTY_PRINT);
