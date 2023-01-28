<?php
    include('../control/dbConf.php');

    $anpast = ($_GET['anpasto']);

    include('../control/eff-ex.php');
?>
<style>
    @import url("../public/css/eff.css");
</style>

<script src="../public/js/work.js"></script>

<section class="eff-section">
    <h3>Effectifs</h3>

    <div class="pasto-div">
        <select name="pasto-select" id="pasto-select"> 
            <option value="2" <?php if($anpast == 2){echo 'selected';} ?>>2022-2023</option>
            <option value="1" <?php if($anpast == 1){echo 'selected';} ?>>2021-2022</option>
        </select>
    </div>

    <div class="eff-div" id="eff-div">
        <div class="eff-box" id="benjamins">
            <h4>Benjamins : <?= $benjamins ?></h4>
            <hr>

            <table>
                <tr>
                    <th colspan="2">par Doyenné</th>
                </tr>
                <tr>
                    <td>Monseigneur Vital Komenan YAO</td>
                    <td><?= $ben[0] ?></td>
                </tr>
                <tr>
                    <td>Monseigneur André Duirat</td>
                    <td><?= $ben[1] ?></td>
                </tr>
                <tr>
                    <td>Père Alfred Kouakou</td>
                    <td><?= $ben[2] ?></td>
                </tr>
                <tr>
                    <td>Père Adrien Jeanne</td>
                    <td><?= $ben[3] ?></td>
                </tr>
            </table>

            <div class="eff-btn">
                <a href="list.php?anneepasto=<?= $anpasto ;?>&amp;niveau=1">Voir la liste</a>
            </div>
        </div>
        
        <div class="eff-box" id="cadets">
            <h4>Cadets : <?= $cadets ?></h4>
            <hr>

            <table>
                <tr>
                    <th colspan="2">par Doyenné</th>
                </tr>
                <tr>
                    <td>Monseigneur Vital Komenan YAO</td>
                    <td><?= $cad[0] ?></td>
                </tr>
                <tr>
                    <td>Monseigneur André Duirat</td>
                    <td><?= $cad[1] ?></td>
                </tr>
                <tr>
                    <td>Père Alfred Kouakou</td>
                    <td><?= $cad[2] ?></td>
                </tr>
                <tr>
                    <td>Père Adrien Jeanne</td>
                    <td><?= $cad[3] ?></td>
                </tr>
            </table>

            <div class="eff-btn">
                <a href="list.php?anneepasto=<?= $anpasto ;?>&amp;niveau=2">Voir la liste</a>
            </div>
        </div>
        
        <div class="eff-box" id="aines">
            <h4>Ainés : <?= $aines ?></h4>
            <hr>

            <table>
                <tr>
                    <th colspan="2">par Doyenné</th>
                </tr>
                <tr>
                    <td>Monseigneur Vital Komenan YAO</td>
                    <td><?= $ain[0] ?></td>
                </tr>
                <tr>
                    <td>Monseigneur André Duirat</td>
                    <td><?= $ain[1] ?></td>
                </tr>
                <tr>
                    <td>Père Alfred Kouakou</td>
                    <td><?= $ain[2] ?></td>
                </tr>
                <tr>
                    <td>Père Adrien Jeanne</td>
                    <td><?= $ain[3] ?></td>
                </tr>
            </table>

            <div class="eff-btn">
                <a href="list.php?anneepasto=<?= $anpasto ;?>&amp;niveau=3">Voir la liste</a>
            </div>
        </div>
        
        <div class="eff-box" id="meneurs">
            <h4>Meneurs : <?= $meneurs ?></h4>
            <hr>

            <table>
                <tr>
                    <th colspan="2">par Doyenné</th>
                </tr>
                <tr>
                    <td>Monseigneur Vital Komenan YAO</td>
                    <td><?= $men[0] ?></td>
                </tr>
                <tr>
                    <td>Monseigneur André Duirat</td>
                    <td><?= $men[1] ?></td>
                </tr>
                <tr>
                    <td>Père Alfred Kouakou</td>
                    <td><?= $men[2] ?></td>
                </tr>
                <tr>
                    <td>Père Adrien Jeanne</td>
                    <td><?= $men[3] ?></td>
                </tr>
            </table>

            <div class="eff-btn">
                <a href="list.php?anneepasto=<?= $anpasto ;?>&amp;niveau=4">Voir la liste</a>
            </div>
        </div>
        
        <div class="eff-box" id="aas">
            <h4>Aspirants Accompagnateurs : <?= $aas ?></h4>
            <hr>

            <table>
                <tr>
                    <th colspan="2">par Doyenné</th>
                </tr>
                <tr>
                    <td>Monseigneur Vital Komenan YAO</td>
                    <td><?= $aa[0] ?></td>
                </tr>
                <tr>
                    <td>Monseigneur André Duirat</td>
                    <td><?= $aa[1] ?></td>
                </tr>
                <tr>
                    <td>Père Alfred Kouakou</td>
                    <td><?= $aa[2] ?></td>
                </tr>
                <tr>
                    <td>Père Adrien Jeanne</td>
                    <td><?= $aa[3] ?></td>
                </tr>
            </table>

            <div class="eff-btn">
                <a href="list.php?anneepasto=<?= $anpasto ;?>&amp;niveau=7">Voir la liste</a>
            </div>
        </div>
        
        <div class="eff-box" id="acs">
            <h4>Accompagnateurs : <?= $acs ?></h4>
            <hr>

            <table>
                <tr>
                    <th colspan="2">par Doyenné</th>
                </tr>
                <tr>
                    <td>Monseigneur Vital Komenan YAO</td>
                    <td><?= $ac[0] ?></td>
                </tr>
                <tr>
                    <td>Monseigneur André Duirat</td>
                    <td><?= $ac[1] ?></td>
                </tr>
                <tr>
                    <td>Père Alfred Kouakou</td>
                    <td><?= $ac[2] ?></td>
                </tr>
                <tr>
                    <td>Père Adrien Jeanne</td>
                    <td><?= $ac[3] ?></td>
                </tr>
            </table>

            <div class="eff-btn">
                <a href="list.php?anneepasto=<?= $anpasto ;?>&amp;niveau=10">Voir la liste</a>
            </div>
        </div>
        
        <div class="eff-box" id="aps">
            <h4>Accompagnateurs Principaux : <?= $aps ?></h4>
            <hr>

            <table>
                <tr>
                    <th colspan="2">par Doyenné</th>
                </tr>
                <tr>
                    <td>Monseigneur Vital Komenan YAO</td>
                    <td><?= $ap[0] ?></td>
                </tr>
                <tr>
                    <td>Monseigneur André Duirat</td>
                    <td><?= $ap[1] ?></td>
                </tr>
                <tr>
                    <td>Père Alfred Kouakou</td>
                    <td><?= $ap[2] ?></td>
                </tr>
                <tr>
                    <td>Père Adrien Jeanne</td>
                    <td><?= $ap[3] ?></td>
                </tr>
            </table>

            <div class="eff-btn">
                <a href="list.php?anneepasto=<?= $anpasto ;?>&amp;niveau=13">Voir la liste</a>
            </div>
        </div>

        <div class="eff-box" id="total">
            <h4>Tous les militants : <?= $all ?></h4>
            <hr>

            <table>
                <tr>
                    <th colspan="2">par Doyenné</th>
                </tr>
                <tr>
                    <td>Monseigneur Vital Komenan YAO</td>
                    <td><?= $all1 ?></td>
                </tr>
                <tr>
                    <td>Monseigneur André Duirat</td>
                    <td><?= $all2 ?></td>
                </tr>
                <tr>
                    <td>Père Alfred Kouakou</td>
                    <td><?= $all3 ?></td>
                </tr>
                <tr>
                    <td>Père Adrien Jeanne</td>
                    <td><?= $all4 ?></td>
                </tr>
            </table>

            <div class="eff-btn">
                <a href="list.php?anneepasto=<?= $anpasto ;?>&amp;niveau=20">Voir la liste</a>
            </div>
        </div>
    </div>
</section>