<?php

const VICTORY_POINTS = 3;
const DRAW_POINTS = 1;


$team1;
$team2;

$teams = [
    "Fnatic" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0],
    "KC" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0],
    "Vitality" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0],
    "Gentle Mates" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0],
    "BBL" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0],
    "Navi" => ["points" => 0, "matches_played" => 0, "victories" => 0, "draws" => 0, "defeats" => 0]
];

function playMatch($team1, $team2)
{
    global $teams;

    $team1_score = rand(0, 5);
    $team2_score = rand(0, 5);

    return [
        'team1_score' => $team1_score,
        'team2_score' => $team2_score
    ];
}

function updateStats($team1, $team2, $team1_score, $team2_score)
{
    global $teams;

    $teams[$team1]["matches_played"] += 1;
    $teams[$team2]["matches_played"] += 1;

    if ($team1_score > $team2_score) {
        $teams[$team1]["victories"] += 1;
        $teams[$team2]["defeats"] += 1;
        $teams[$team1]["points"] += VICTORY_POINTS;
    } elseif ($team1_score < $team2_score) {
        $teams[$team2]["victories"] += 1;
        $teams[$team1]["defeats"] += 1;
        $teams[$team2]["points"] += VICTORY_POINTS;
    } elseif ($team1_score == $team2_score) {
        $teams[$team1]["draws"] += 1;
        $teams[$team2]["draws"] += 1;
        $teams[$team1]["points"] += DRAW_POINTS;
        $teams[$team2]["points"] += DRAW_POINTS;
    } else {
        echo "Aucun match enregistrée";
    }
}

function printMatchResult($team1, $team2)
{
    $result = playMatch($team1, $team2);
    $team1_score = $result['team1_score'];
    $team2_score = $result['team2_score'];
    updateStats($team1, $team2, $team1_score, $team2_score);
    echo "🎮 $team1 ($team1_score) - ($team2_score) $team2 <br>";
}

function tournoi($teams) {
    $teamNames = array_keys($teams); 
    $n = count($teamNames);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            $team1 = $teamNames[$i];
            $team2 = $teamNames[$j];
            printMatchResult($team1, $team2);
        }
    }
}

echo "<h1>Résultat des matches : <br></h1>";
tournoi($teams);

uasort($teams, function($a, $b) {
    return $b['points'] <=> $a['points'];
});
echo "<br> <h1>📊 Classement final :</h1>";
echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: center;' >";
echo "<tr style='background-color: #c5e8ffff;'>
        <th>Équipe</th>
        <th>Points</th>
        <th>Victoire</th>
        <th>Défaite</th>
        <th>Egalité</th>
        <th>Match Joués</th>
        </tr>"; 

        foreach ( $teams as $team => $stats ) {
        echo "<tr>";
        echo "<td>$team</td>";
        echo "<td>" . $stats["points"] . "</td>";
        echo "<td>" . $stats["victories"] . "</td>";
        echo "<td>" . $stats["defeats"] . "</td>";
        echo "<td>" . $stats["draws"] . "</td>";
        echo "<td>" . $stats["matches_played"] . "</td> <br>";
        echo "</tr>";
    }
echo "</table> <br>";
