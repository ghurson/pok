<table class="hover stack">
    <caption>Below you will find all your documents.</caption>
    <thead>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Last Modified</th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach($files as $c => $file):
        $url = $file['file']['url'];
        $title = $file['title'];
        $description = $file['description'];
    ?>

        <tr>
            <td><a href="<?php print $url ?>"><?php print $title ?></a></td>
            <td><?php print $description ?></td>
            <td><?php print get_the_time('F j, Y', $file['file']['id']); ?></td>
        </tr>

    <?php endforeach; ?>


    </tbody>
</table>
