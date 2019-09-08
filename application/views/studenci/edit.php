<?php echo form_open('studenci/edit/' . $studenci['id'], array("class" => "form-horizontal")); ?>

    <div style="max-width: 1000px; margin: 10px auto;">
        <div class="form-group">
            <label for="nazwa_pliku" class="col-md-2 control-label">Nazwa Pliku</label>
            <div class="col-md-10">
                <input type="text" name="nazwa_pliku"
                       value="<?php echo($this->input->post('nazwa_pliku') ? $this->input->post('nazwa_pliku') : $studenci['nazwa_pliku']); ?>"
                       class="form-control" id="nazwa_pliku"/>
            </div>
        </div>
        <div class="form-group">
            <label for="sciezka" class="col-md-2 control-label">sciezka</label>
            <div class="col-md-10">
                <input type="text" name="sciezka"
                       value="<?php echo($this->input->post('sciezka') ? $this->input->post('sciezka') : $studenci['sciezka']); ?>"
                       class="form-control" id="sciezka"/>
            </div>
        </div>
        <div class="form-group">
            <label for="rozmiar" class="col-md-2 control-label">rozmiar</label>
            <div class="col-md-10">
                <input type="text" name="rozmiar"
                       value="<?php echo($this->input->post('rozmiar') ? $this->input->post('rozmiar') : $studenci['rozmiar']); ?>"
                       class="form-control" id="rozmiar"/>
            </div>
        </div>
        <div class="form-group">
            <label for="typ" class="col-md-2 control-label">typ</label>
            <div class="col-md-10">
                <input type="text" name="typ"
                       value="<?php echo($this->input->post('typ') ? $this->input->post('typ') : $studenci['typ']); ?>"
                       class="form-control" id="typ"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-success">Zapisz</button>
            </div>
        </div>
    </div>
<?php echo form_close(); ?>
