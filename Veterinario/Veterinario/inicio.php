<?php include ('./templates/header.php'); ?>
<?php include ('./templates/menu.php');
    //En menu están las dependencias de session_start()
?>

    <header class="text-center">
        <h2>Opciones</h2>
    </header>
    <article class="card border-primary text-center">
        <article class="card-body">
            <a href="./agendarCita.php">
                <header ><h5>Agendar citas</h5></header>
                <p>Establece un cita de cualquier tipo </p>
            </a>
        </article>
    </article><br>
    <article class="card border-primary text-center">
        <article class="card-body">
        <a href="./registrarMascota.php">
            <header ><h5>Registrar mascotas</h5></header>
            <p>Registra a tus mascotas</p>
        </a>
        </article>
    </article><br>
    <article class="card border-primary text-center">
        <article class="card-body">
        <a href="./agenda.php">
            <header ><h5>Consultar citas</h5></header>
            <p>Consulta tus citas progradas</p>
        </a>
        </article>
    </article><br>
    <article class="card border-primary text-center">
        <article class="card-body">
        <a href="#inicio">
            <header ><h5>Titulo </h5></header>
            <p>Funcion </p>
        </a>
        </article>
    </article>

<?php include ('./templates/footer.php'); ?>