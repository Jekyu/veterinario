<?php include ('./templates/header.php') ?>
<?php include ('./templates/menu.php') ?>

    <header class="text-center">
        <h2>Agendar</h2>
    </header>
    <article class="card border-secondary">
        <article class="card-body">
        <fieldset>
            <form>
            <label style="display: block;" class="mb-3">
                <h5>Tipo cita</h5>
                <select class="form-control">
                    <option>
                        Selecciona tipo cita
                    </option>
                </select>
            </label>
            <label style="display: block;" class="mb-3">
                <h5>Mascota</h5>
                <select class="form-control">
                    <option>
                        Selecciona una mascota
                    </option>
                </select>
            </label>
            <label  style="display: block;" class="mb-3">
                <h5>Dia</h5>
                <input type="date" class="form-control">
            </label>
            <label style="display: block;" class="mb-3">
                <h5>Hora</h5>
                <input type="time" class="form-control">
            </label>
            <footer class="text-center">
                <button class="btn btn-primary btn-block mt-3">Agendar</button>
            </footer>
            </form>
            <footer class="text-center">
                <a href="./inicio.php"><button class="btn btn-secondary btn-block mt-3 ">Cancelar</button></a>
            </footer>
            </fieldset>
    </article>

<?php include ('./templates/footer.php') ?>