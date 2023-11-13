<!-- Script para enviar mensaje con ENTER -->
<script>
    // Espera a que el documento esté listo
    document.addEventListener("DOMContentLoaded", function() {
        // Agrega un evento de escucha al campo de texto del mensaje
        document.querySelector('textarea[name="mensaje_chat"]').addEventListener('keydown', function(e) {
            // Verifica si la tecla presionada es Enter
            if (e.key === 'Enter' && !e.shiftKey) {
                // Evita el comportamiento predeterminado del Enter (nueva línea en el textarea)
                e.preventDefault();
                // Envía el formulario
                document.querySelector('form').submit();
            }
        });
    });
</script>
<?php 
session_start();
	if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['username'])) {
    	header("location: ./login/login.php");
    	exit;
	}else{
		include "./headers/header2.php"; 
		include "./conexion/conexion.php";
		
		$sql="SELECT * FROM tbl_chat";

		$query = mysqli_query($mysqli,$sql);
	}
?>
	<style>
		h2 {
			color: white;
		}

		label {
			color: white;
		}

		span {
			color: #673ab7;
			font-weight: bold;
		}

		.container {
			margin-top: 3%;
			width: 60%;
			background-color: #26262b9e;
			padding-right: 10%;
			padding-left: 10%;
			border: #120633 5px solid;
			border-radius: 5%;
		}

		.btn-primary {
			background-color: #673AB7;
		}

		.display-chat {
			height: 300px;
			background-color: #a5d1f5;
			margin-bottom: 4%;
			overflow: auto;
			padding: 15px;
		}

		.mensaje_chat {
			background-color: #56abf1;
			color: white;
			border-radius: 5px;
			padding: 5px;
			margin-bottom: 3%;
			border: 2px ridge #000;
		}
	</style>

	<!-- <meta http-equiv="refresh" content="20"> --> <!-- para refrescar la pagina -->
	<script>
		$(document).ready(function() {
			// Set trigger and container variables
			var trigger = $('.container .display-chat '),
			container = $('#content');

			// Fire on click
			trigger.on('click', function() {
			// Set $this for re-use. Set target from data attribute
			var $this = $(this),
				target = $this.data('target');

			// Load target page into container
			container.load(target + '.php');

			// Stop normal link behavior
			return false;
		});
	});
</script>

	<div class="container">
		<center>
			<h2>Bienvenid@ <span style="color:#120633; font-weight: 600;"><?php echo $_SESSION['username']; ?> </span> a Nuestro Chat</h2>
			<label>SISTEMTAIPE &copy;Edison</label>
		</center></br>
		<div class="display-chat" id="display-chat">
			<?php
			if (mysqli_num_rows($query) > 0) {
				while ($row = mysqli_fetch_assoc($query)) {
			?>
					<div class="mensaje_chat">
						<p>
							<span><?php echo $row['usuario_chat']; ?> :</span>
							<?php echo $row['mensaje_chat']; ?>
						</p>
					</div>
				<?php
				}
			} else {
				?>
				<div class="mensaje_chat">
					<p>
						No hay ninguna conversación previa.
					</p>
				</div>
			<?php
			}
			?>

		</div>



		<form class="form-horizontal" method="post" action="enviarmensaje.php">
			<div class="form-group">
				<div class="col-sm-10">
					<textarea name="mensaje_chat" class="form-control" style="border: ridge 2px #56abf1;color: #000;" placeholder="Ingrese su Mensaje"></textarea>
				</div>

				<div class="col-sm-2">
					<button type="submit" class="btn btn-success" style="font-size: 22px;">Enviar</button>
				</div>

			</div>
		</form>
	</div>


	</body>

	</html>
