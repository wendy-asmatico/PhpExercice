<?php

$title = "Mon évaluation";
$css = "eval.css";
require_once 'includes/header.php';

$notation = [
    [ 'titre' => '1', 'note' => '10', 'commentaire' => 'Au commencement, dieu créea PHP' ],
    [ 'titre' => '2', 'note' => '10', 'commentaire' => 'EZ comme on dit' ],
    [ 'titre' => '3', 'note' => '9', 'commentaire' => ' ça va ça se maîtrise vite' ],
    [ 'titre' => '4', 'note' => '10', 'commentaire' => 'On ne peux pas vivre sans ça' ],
    [ 'titre' => '5', 'note' => '7', 'commentaire' => 'Je me sers pas souvent de WHILE mais FOR le feu &#x1F525; !' ],
    [ 'titre' => '6', 'note' => '6', 'commentaire' => 'Je déteste les tableaux, je galère toujours dessus' ],
    [ 'titre' => '7', 'note' => '10', 'commentaire' => 'LA BASE' ],
    [ 'titre' => '8', 'note' => '10', 'commentaire' => 'On se lasse jamais de toutes ses fonctions ! Miam Miam' ],
    [ 'titre' => '9', 'note' => '8', 'commentaire' => 'Il y a plein de global non expérimenter encore' ],
    [ 'titre' => '10', 'note' => '9', 'commentaire' => 'Le sujet était bien expliqué et les exemples ont bien aider' ],
    [ 'titre' => '11', 'note' => '0', 'commentaire' => 'Mais...où est le module 11 ?' ],
    [ 'titre' => '12', 'note' => '10', 'commentaire' => 'Je trouve mon site particulièrement bien' ],
];
?>
<main>
        <h1>Mon Evaluation</h1>
        <hr>
    <table>
        <thead>
            <tr>
                <th>Module</th>
                <th>Note</th>
                <th>Commentaire</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notation as $note): ?>
                <tr>
                    <td><?= $note['titre'] ?></td>
                    <td>
                        <?= $note['note'] ?>
                        <?php if ($note['note'] > 9): ?>
                            <img src="./assets/img/iconsCool.png" class="icons" />
                        <?php elseif ($note['note'] >= 6): ?>
                            <img src="./assets/img/iconsHappy.png" class="icons" />
                        <?php else: ?>
                            <img src="./assets/img/iconsTriste.png" class="icons" />
                        <?php endif; ?>
                    </td>
                    <td><?= $note['commentaire'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <hr>
</main>


<?php include 'includes/footer.php'; ?>
