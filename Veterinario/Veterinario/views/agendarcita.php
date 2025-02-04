<?php include ('./templates/header.php') ?>
<?php include ('./templates/menu.php') ?>

<section>
    <header>
        <h2>Agendar</h2>
    </header>
    <article>
        <header>
            <h4>Tipo cita</h4>
        </header>
        <fieldset>
            <form>
            <label style="display: block;">
                <h5>Mascota</h5>
                <input type="text">
            </label>
            <label  style="display: block;">
                <h5>Dia</h5>
                <input type="date">
                
            </label>
            <label style="display: block;">
                <h5>Hora</h5>
                <input type="time">
            </label>
            <button>Agendar</button>
            </form>
            <button>Cancelar</button>
        </fieldset>
    </article>
</section>

<?php include ('./templates/footer.php') ?>