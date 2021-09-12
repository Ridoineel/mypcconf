<div class="container-fluid mt-3">
    <form action="../controlers/addConfig.php" method="POST" class="col-12 col-md-6 container-fluid container-md">
        
        <h3 class="form-text mint-box">Formulaire de renseignement du matériel utilisé pour le cours de INF113</h3>
        <div class="form-group">
            <input type="number" max="600000" min="500000" class="form-control" placeholder="Numéro de carte" name="card_number" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nom" name="name" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Prénom(s)" name="first_name" required>
        </div>

        <div class="form-group">
            <label for="" class="font-weight-bold">Spécialité</label>

            <select name="speciality" class="form-control">
                <option value="GL">GL</option>
                <option value="MRI">MRI</option>
            </select>
        </div>

        <div class="form-group">
            <label for="" class="font-weight-bold">Machine</label>

            <select name="machine" class="form-control">
                <option value="Laptop">Laptop</option>
                <option value="Dektop">Desktop</option>
                <option value="Android">Android</option>
            </select>
        </div>

        <div class="form-group">
            <input type="number" max="2048" class="form-control" placeholder="HD: en Go" name="hd" required>
        </div>

        <div class="form-group">
            <input type="number" max="16" class="form-control" placeholder="RAM: en Go" name="ram" required>
        </div>

        <div class="form-group">
            <input type="number" max="4000" class="form-control" placeholder="CPU: en Mhz" name="cpu" required>
        </div>

        <div class="form-group">
            <label for="" class="font-weight-bold">Batterie</label>

            <select name="battery" class="form-control">
                <option value="PnP">Pnp</option>
                <option value="Chargeagle">Chargeable</option>
            </select>
        </div>

        <div class="form-group">
            <label for="" class="font-weight-bold">Clavier</label>

            <select name="keyboard" class="form-control">
                <option value="Interne">Interne</option>
                <option value="Externe">Externe</option>
                <option value="Interne + Externe">Interne + Externe</option>
            </select>
        </div>

        <div class="form-group">
            <label for="" class="font-weight-bold">Ecran</label>

            <select name="screen" class="form-control">
                <option value="RAS">RAS</option>
                <option value="Cassé">Cassé</option>
            </select>
        </div>

        <p class="form-text text-primary"><strong>NB:</strong> Pour des modifications, recommencer l'opération</p>

        <input type="submit" class="btn btn-secondary col" value="Envoyer">
    </form>
</div>