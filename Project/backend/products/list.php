<?php
        $query = "SELECT id, product_id, user_id, rating_value, rating_description FROM rating WHERE product_id = ?";    
        $params = [$_GET['s']];
        require_once 'backend/dbFunctions.php';
        $ratings = getList($query, $params);
    ?>
    <?php if(count($ratings) <= 0) : ?>
        <h1>Nincs értékelés az adott termékre</h1>
    <?php else: ?>
        <table class="rateElements">
                <thead>
                    <tr>
                        <th scope="col">Értékelés</th>
                        <th scope="col">Leírás</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    <?php foreach ($ratings as $r) : ?>
                        <?php $i++; ?>
                        <tr>
                            <td><?=$r['rating_value']?></td>
                            <td><?=$r['rating_description']?></td>                
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    <?php endif; ?>