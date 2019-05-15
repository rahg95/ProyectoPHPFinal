<?php
	require('Modulos_generales/header.inc.php');
?>

<body>
    <div id="pagewrap">

        <?php
			require ('Modulos_generales/nav.inc.php');
		?>
		<br>
        <center>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-7">
                        <div id="CalendarioWeb"></div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>

            <!-- Modal -->


            <script>
            $(document).ready(function() {
                $('#CalendarioWeb').fullCalendar({

                    header: {
                        left: 'today,prev,next',
                        center: 'title',
                        right: 'month,basicWeek,agendaDay'
                    },

                    dayClick: function(date, jsEvent, view) {
                        // alert("valor seleccionado: "+date.format());
                        // alert("vista actual: "+view.name);
                        //$("#exampleModal").modal();
                    },

                    // events:[
                    //     {
                    //         title: 'evento 1, izi',
                    //         descripcion: "izi la wea",
                    //         start: '2019-05-05',
                    //         imagen: 'asdasdasd.png',
                    //         otracosa: 'otracosita'
                    //     },
                    //     {
                    //         title: 'evento 2, izi',
                    //         descripcion: "izi la wea 2 full",
                    //         start: '2019-05-05',
                    //         end: '2019-05-07'
                    //     },


                    // ],

                    events: 'http://localhost/AgendaElectronica/publica/EventoCalendar.php',

                    eventClick: function(calEvent, jsEvent, view) {
                        $('#tituloEvento').html(calEvent.title);
                        $('#descripcionEvento').html(calEvent.descripcion);
						$('#finicio').html(calEvent.finicio);
						$('#ffinal').html(calEvent.ffinal);
						$('#nom').html(calEvent.Nombres);
						$('#ape').html(calEvent.Apellidos);
                        $("#exampleModal").modal();


                    },

                });

            })
            </script>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
							<h3 class="modal-title" id="tituloEvento"></h3>						
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
						<p class="modal-title"> Creador: <spam id="nom" style="color:green"> </spam> <spam id="ape" style="color:green"> </spam></p>	
                            <div id="descripcionEvento"></div>
                        </div>
                        <div class="modal-footer">
						
						<p >Fecha Inicio: <spam id="finicio" style="color:green"></spam></p>
						<p >Fecha Final: <spam id="ffinal" style="color:green"></spam></p>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                        </div>
                    </div>
                </div>
            </div>
		</center>
		<br>

        <?php
			require ('Modulos_generales/footer.inc.php');
		?>
    </div>
</body>

</html>