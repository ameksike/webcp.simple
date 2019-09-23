<!--------------Content---------------------------------------------------------------------------------------------------------------------------------------------------->

<link rel="stylesheet" type="text/css" href="lib/tipped/css/tipped/tipped.css"/>
<link rel="stylesheet" type="text/css" href="lib/tipped/skin/blue.css"/>

<style>
.iconnor{
	float: left;
}

.iconimp{
	float: right;
}

.iconimp img{
	width: 8%;
	margin: 27px 4px;
	float: right;
}

.newslast{
	clear: left;
	clear: right;
}

</style>

<section id="content">
	<div class="wrap-content zerogrid">

		<TABLE class="inf01" cellpadding="5" cellspacing="5" align="center">
			<TR >
				<TD COLSPAN="4"  >
					
					<div class="iconnor">
						<img class="icotitle" src="images/icos/news01.svg"> <b> NOTICIAS </b> 
					</div>
			
					<div class="iconimp"> 
						<a href="http://correo.cfg.labiofam.cu"><img class="icotitle" id="icoemail" src="images/icos/email_icon.svg">  </a>
						<a href="http://nube.cfg.labiofam.cu"><img class="icotitle"  id="icocloud" src="images/icos/ftp.svg">  </a>
						<a href="http://videoteca.cfg.labiofam.cu"><img class="icotitle"  id="icovideoteca" src="images/icos/video.svg">   </a>
						<a href="ftp://cloud.cfg.labiofam.cu/memory/"> <img class="icotitle"  id="icomemory" src="images/icos/base.de.datos.svg"> </a>
					</div>
					<div class="newslast">
						<?php include "app.news.php"; ?>
					</div>
				</TD>
			</TR>

			<TR>
				<TD COLSPAN="2" class="vi-lear" >
					<p> <img class="icotitle" src="images/icos/estadistica.svg"> <b> SISTEMAS DE CONTROL <br/>
						<ul >
							<li>Econom&iacute;a
								<ul >
									<li> <a href="http://www.bandec.cu/virtualbandec">Virtualbandec</a> </li>
									<li> <a href="http://www.bandec.cu/">Portal Bandec</a> </li>
								</ul>
							</li>
							
							<li><br></li>
							
							<li>Externos
								<ul>
									<li> <a href="http://conferencia.labiofam.cu/">Videoconferencia Empresarial</a> </li>
									<li>  <a href="ftp://ftp.eicma.cu">FTP EICMA</a> </li>
									<li> <a href="ftp://ftp.cfg.labiofam.cu">FTP LABIOFAM</a> </li>
								</ul>
							</li>
							<li><br></li>
							
							<li>Herramientas
								<ul>
								    <li> <a href="http://vinacon.cfg.labiofam.cu/vinacon/web/app.php">Vinacon CFG</a> </li>
									<li> <a href="http://vinaconosde.labiofam.cu/">Vinacon OSDE</a> </li>
									<li> <a href="http://contracts.cfg.labiofam.cu:8080/contractsEmpresa/">Contratos</a> </li>
									<li> <a href="http://sisleme.minag.gob.cu/">Sisleme</a>  </li>
									<li> <a href="http://energia.labiofam.cu/welcome/login">Energ&iacute;a</a></li>
									<li> <a href="http://mantenimiento.labiofam.cu/">Mantenimiento</a> </br></li>
									<li> <a href="https://aibalan.netcons.com.cu/">Balance Constructivo aiBalan</a> </br></li>
									
								</ul>
							</li>
						</ul>
					</p>
				</TD>
				
				<TD COLSPAN="2" class="vi-lear" >
					<p> <img class="icotitle" src="images/icos/empleado.svg"> <b> ENLACES DE INTERES <br/>
						<ul >
							<li>Interés
								<ul >
									<li> <a href="https://www.gacetaoficial.gob.cu/">Gaceta Oficial de la Republica de Cuba.</a> </li>
									<li> <a href="http://inter-nos.labiofam.cu/">Portal OSDE</a> </li>
									<li> <a href="https://www.minag.gob.cu/">Portal MINAG</a> </br></li>
								</ul>
							</li>
							<li><br></li>
							
							<li>Internos
								<ul>
									<li> <a href="ftp://cloud.cfg.labiofam.cu/docs/">Biblioteca Empresarial</a> </li>
									<li> <a href="ftp://cloud.cfg.labiofam.cu/docs/legislacion/laboral/">Legislaci&oacute;n Laboral</a> </li>
								</ul>
							</li>
							<li><br></li>
							
							<li>Redes Sociales
								<ul>									
									<li> <a href="https://mbasic.facebook.com/">Facebook Liviano</a> </li>
									<li> <a href="https://www.facebook.com/profile.php?id=321544761799582">Facebook p&aacute;gina corporativa </a> </li>
									<li> <a href="https://twitter.com/LabiofamC">Twitter p&aacute;gina corporativa </a> </li>
									<li> <a href="https://www.linkedin.com/company/empresa-labiofam-cienfuegos">Linkedin P&aacute;gina corporativa</a> </li>
								</ul>
							</li>
						</ul>
					</p>
				</TD>
			</TR
			<TR>
				<TD COLSPAN="2" class="vi-lear" > 
					<p> 
						<img class="icotitle" src="images/icos/Learning.svg"> <b> TUTORIALES </b> 
						<?php include "app.tutorial.php"; ?> 
					</p>
				</TD>
				<TD COLSPAN="2" class="vi-lear" > 
					<p> 
						<img class="icotitle" src="images/icos/Learning.svg"> <b> REFLEXIONES </b> 
						<?php include "app.tips.php"; ?> 
					</p>
				</TD>
			</TR>
		</TABLE>
		
		
	</div>
	<!--------------Content---------------------------------------------------------------------------------------------------------------------------------------------------->
</section>

<script type="text/javascript" src="lib/tipped/js/tipped/tipped.js"></script>
<script type="text/javascript" src="lib/tipped/skin/blue.js"></script>

<script>
$(document).ready(function() {
 
  Tipped.create('#icoemail', 'Correo Electrónico', {skin: 'light', position: 'bottom'} );
  Tipped.create('#icovideoteca', 'Videoteca Institucional', {skin: 'light', position: 'bottom'} );
  Tipped.create('#icomemory', 'Memoria Histórica', { behavior: 'custom-slow', skin:'blue', position: 'bottom' });
  Tipped.create('#icocloud', 'Nube', { behavior:'custom-slow', skin:'purple', position: 'bottom' });
  
});
</script>