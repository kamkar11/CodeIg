
    <div class="pull-right">
        <a href="<?php echo site_url('studenci/add'); ?>" class="btn btn-success" style="margin: 10px;">Dodaj</a>
    </div>

    <table class="table table-striped table-bordered" style="max-width: 1000px; margin: 10px auto;">
        <tr>
            <th>ID</th>
            <th>Nazwa Pliku</th>
            <th>Sciezka</th>
            <th>Rozmiar</th>
            <th>Typ</th>
            <th>Dostępne akcje</th>
        </tr>
        <?php foreach ($studenci as $s) { ?>
            <tr>
                <td><?php echo $s['id']; ?></td>
                <td><?php echo $s['nazwa_pliku']; ?></td>
                <td><?php echo $s['sciezka']; ?></td>
                <td><?php echo $s['rozmiar']; ?></td>
                <td><?php echo $s['typ']; ?></td>
                <td>
                    <a href="<?php echo site_url('studenci/edit/' . $s['id']); ?>" class="btn btn-info btn-xs">Edytuj</a>
                    <a href="<?php echo site_url('studenci/remove/' . $s['id']); ?>" class="btn btn-danger btn-xs">Usuń</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="pull-right">
        <?php echo $this->pagination->create_links(); ?>
    </div>
