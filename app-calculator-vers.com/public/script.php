<?php

$ton=$_POST['cargo'];
$mounth=$_POST['mounth'];



$shrot = [
    "ton25" => ["jan" => "125", 
                "feb" => "121",
                "aug" => "137",
                "sep"=>"126",
                "oct"=>"124",
                "nov"=>"128"],
    "ton50" => ["jan" => "145", 
                "feb" => "118",
                "aug" => "119",
                "sep"=>"121",
                "oct"=>"122",
                "nov"=>"147"],
    "ton75"=> ["jan" => "136", 
                "feb" => "137",
                "aug" => "141",
                "sep"=>"137",
                "oct"=>"131",
                "nov"=>"143"],
    "ton100"=>["jan" => "138", 
                "feb" => "142",
                "aug" => "117",
                "sep"=>"124",
                "oct"=>"147",
                "nov"=>"112"]
];
$zhmyh = [
    "ton25" => ["jan" => "121", 
                "feb" => "137",
                "aug" => "124",
                "sep"=>"137",
                "oct"=>"122",
                "nov"=>"125"],
    "ton50" => ["jan" => "118", 
                "feb" => "121",
                "aug" => "145",
                "sep"=>"147",
                "oct"=>"143",
                "nov"=>"145"],
    "ton75"=> ["jan" => "137", 
                "feb" => "124",
                "aug" => "136",
                "sep"=>"143",
                "oct"=>"112",
                "nov"=>"136"],
    "ton100"=>["jan" => "142", 
                "feb" => "131",
                "aug" => "138",
                "sep"=>"112",
                "oct"=>"117",
                "nov"=>"138"]
];
$soya = [
    "ton25" => ["jan" => "137", 
                "feb" => "125",
                "aug" => "124",
                "sep"=>"122",
                "oct"=>"137",
                "nov"=>"121"],
    "ton50" => ["jan" => "147", 
                "feb" => "145",
                "aug" => "145",
                "sep"=>"143",
                "oct"=>"119",
                "nov"=>"118"],
    "ton75"=> ["jan" => "112", 
                "feb" => "136",
                "aug" => "136",
                "sep"=>"112",
                "oct"=>"141",
                "nov"=>"137"],
    "ton100"=>["jan" => "122", 
                "feb" => "138",
                "aug" => "138",
                "sep"=>"117",
                "oct"=>"117",
                "nov"=>"142"]
];

if ($_POST['type']=='shrot'){
    $answer = $shrot[$ton][$mounth];

}
else if($_POST['type']=='zhmyh'){
    $answer = $zhmyh[$ton][$mounth];

}
else $answer = $soya[$ton][$mounth];

return $answer;

//if(isset($_POST["submit"])) {   
//exit('<meta http-equiv="refresh" content="0; url=index.php" />');
//}
header('Location: /index.php');
?>