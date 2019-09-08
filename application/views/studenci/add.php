<?php echo form_open('studenci/add', array("class" => "form-horizontal")); ?>

    <div style="max-width: 1000px; margin: 10px auto;">
        <div class="form-group">
            <label for="nazwa_pliku" class="col-md-2 control-label">Nazwa Pliku</label>
            <div class="col-md-10">
                <input type="text" name="nazwa_pliku" value="<?php echo $this->input->post('nazwa_pliku'); ?>"
                       class="form-control" id="nazwa_pliku"/>
            </div>
        </div>
        <div class="form-group">
            <label for="sciezka" class="col-md-2 control-label">sciezka</label>
            <div class="col-md-10">
                <input type="text" name="sciezka" value="<?php echo $this->input->post('sciezka'); ?>" class="form-control"
                       id="sciezka"/>
            </div>
        </div>
        <div class="form-group">
            <label for="rozmiar" class="col-md-2 control-label">rozmiar</label>
            <div class="col-md-10">
                <input type="text" name="rozmiar" value="<?php echo $this->input->post('rozmiar'); ?>"
                       class="form-control" id="rozmiar"/>
            </div>
        </div>
        <div class="form-group">
            <label for="typ" class="col-md-2 control-label">typ</label>
            <div class="col-md-10">
                <input type="text" name="typ" value="<?php echo $this->input->post('typ'); ?>" class="form-control"
                       id="typ"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Zapisz</button>
            </div>
        </div>
    </div>
<?php echo form_close(); ?>
