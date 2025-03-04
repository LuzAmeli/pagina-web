<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michi World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, nav, main, aside, footer {
            padding: 10px;
            margin: 10px;
        }
        header {
            background-color: #D779B9;
            color: #1A55AB;
            text-align: center;
        }
        nav {
            background-color: #C5F7FC;
            text-align: center;
        }
        nav a {
            color: black;
            text-decoration: none;
            margin: 10px;
        }
        main {
            display: flex;
        }
        section {
            flex: 3;
            padding: 15px;
        }
        aside {
            flex: 1;
            background-color: #DEC5FC;
			padding: 15px;
			height: auto;
			aling-self: flex-start;
        }
        footer {
            background-color: #D779B9;
            color: white;
            text-align: center;
        }
        button {
            background-color: #4495E6;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
		main {
            display: flex;
            align-items: flex-start;
        }
		
    </style>
</head>
<body>

    <header>
        <h1>El Mundo de los Gatos</h1>
        <p><i>Aprende a cuidar a tu gato de la mejor manera para tener un gato contento.</i></p>
    </header>

    <nav>
        <a href="index.html">Tipos</a>
        <a href="cuidados.php">Cuidados</a>
        <a href="alimentacion.php">Alimentación</a>
        <a href="#contacto">Contacto</a>
        <a href="https://www.mundogatos.com/foros/salud">Foro</a>
    </nav>

    <main>
        <section>
            <h2>Cuidados Básicos</h2>
            <p>Asegurarte de que tu gato esté sano y feliz requiere ciertos cuidados esenciales:</p>

        <article>
		<p>Los gatos domésticos, sea cual sea su raza, son miembros de la misma especie, Felis catus. Los antiguos egipcios fueron los primeros
		en domesticarlos, hace ya 4 mil años e incluso empezaron a adorar a los gatos y hasta los momificaron para que los acompañaran en su vida 
		después de la muerte.Al igual que sus parientes salvajes, los gatos domésticos son cazadores natos, capaces de acechar a atrapar a su presa.
		La mayoría duerme durante casi todo el día, Al igual que todos los felinos, son ágiles, rápidos y con oídos muy desarrollados.
		Llegan a vivir más de 13 años con el cuidado apropiado y su peso de adulto llega a ser entre 3 a 5 kg, dependiendo de la raza.
		Existen varios problemas de salud en los gatos, estos varían de acuerdo con la edad, peso y raza. Es imposible enumerarte todos los problemas
		de salud que puede llegar a tener tu michi, pero dentro de los más comunes se encuentra la diarrea, las bolas de pelo y los ácaros.</p>
		<p>Los gatos deben mantenerse en el interior para su seguridad y la de otros animales. Recuerda brindarles lugares altos (muebles para gatos, árboles),
		rascadores, escondites, y lugar para descansar (cama).Debes tener 1 arenero por gato y al menos un arenero en cada piso de la casa.
		El arenero se debe limpiar dos veces al día</p>
		</article>
		<img src="1200.jpg" alt="Cuidados" width="300">
		<article>
		<h3>Comportamiento</h3>
		<p><li>Juguetones, especialmente cuando son pequeños, necesitan interacción diaria, tanto un gato adulto como un gatito.</li></p>
		<p><li> Es necesario 15 minutos de juego al día.</li></p>
		<p><li>Frotan su cabeza y cuerpo contra objetos y sus dueños.Es una forma de marcar por feromona y decir que esto es familiar.</li></p>
		<p><li>Gruñir o sisear es una señal de miedo. Ronroneos, maullidos cortos y suaves en general son muestras de alegría y afecto.</li></p>
		<p><li>Durante el día es normal que duerman entre 10 y 16 horas diarias.</li></p>
		<p><li>Estimula el consumo de agua con fuentes especiales para gato.</li></p>
		</article>
		
        </section>

        <aside>
            <h2 id="datos_curiosos">Aseo e Higiene</h2>
            <p><li>Se auto asean y limpian de manera natural</li></p>
			<p><li>Pueden necesitar un baño ocasional</li></p>
			<p><li>Los gatos de pelo largo y mediano necesitan de un cepillado diario y tratamiento ocasional para evitar las bolas de pelo</li></p>
			<p><li>Los gatos de pelo corto requieren un cepillado de 2 a 3 veces por semana</li></p>
			<p><li>Se deben recortar las uñas cuando sea necesario</li></p>
			<p><li>También necesitan que se le limpien los dientes, por lo menos 2 veces a la semana.</li></p>
			<img src="infografia.png" alt="gatos infografia" width="400">
        </aside>
    </main>


    <footer>
        <p id="contacto">Contacto: elmundodelosgatos@gmail.com | Tel: 123-456-789</p>
        <form>
            <label for="email">Suscríbete:</label>
            <input type="email" id="email" name="email" placeholder="Tu correo">
            <button type="submit">Enviar</button>
        </form>
    </footer>

</body>
</html>
