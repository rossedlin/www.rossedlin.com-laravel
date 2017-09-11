<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 11/09/2017
 * Time: 13:29
 *
 * @var array $url
 * @var array $rows
 */
?>

<div class="col-xs-12">
    <label class="g-color-gray-dark-v2 g-font-size-13">Google Search Result</label>
    <div>I just scrapped this url <a href="<?= $url ?>" target="_blank" style="color: #00A8FF;"><?= $url ?></a>, here are the results</div>
</div>

<div class="col-xs-12 g-mt-20">
    <table class="table table-striped">
        <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th class="hidden-xs-down">Link</th>
            <th class="hidden-sm-down">Description</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($rows as $key => $row)
        { ?>
        <tr>
            <th scope="row"><?= $key + 1 ?></th>
            <td><?= $row['title'] ?></td>
            <td class="hidden-xs-down"><a href="<?= $row['href'] ?>" target="_blank"><?= $row['href'] ?></a></td>
            <td class="hidden-sm-down"><?= $row['description'] ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>