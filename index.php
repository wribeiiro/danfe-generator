<!-- 
	Name: Gerador PDF de Documentos Eletrônicos
	Description: Gere PDF da sua NFe, NFCe, MDFe e CTe facilmente usando apenas seu XML, através do Danfe Generator gratuitamente.
	Author: Wellisson Ribeiro
	Gitbub: https://github.com/wribeiiro/
	Page: https://wribeiiro.com/
	Version: 1.0
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="title" content="Gerador PDF de Documentos Eletrônicos">
	<meta name="description" content="Gere PDF da sua NFe, NFCe, MDFe e CTe facilmente usando apenas seu XML, através do Danfe Generator gratuitamente.">
	<meta name="author" content="Wellisson Ribeiro">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="place:location:latitude" content="-26.113468"/>
	<meta property="place:location:longitude" content="-49.799151"/>
	<meta property="business:contact_data:street_address" content="Mafra SC"/>
	<meta property="business:contact_data:locality" content="Mafra SC"/>
	<meta property="business:contact_data:postal_code" content="89300-677"/>
	<meta property="business:contact_data:country_name" content="Brasil"/>
	<meta property="business:contact_data:email" content="welleh10@gmail.com"/>
	<meta property="business:contact_data:phone_number" content="(47)996142411"/>
	<meta property="business:contact_data:website" content="https://www.wribeiiro.com/"/>
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Gerador PDF de Documentos Eletrônicos">
	<meta name="twitter:description" content="Gere PDF da sua NFe, NFCe, MDFe e CTe facilmente usando apenas seu XML, através do Danfe Generator gratuitamente.">
	<meta name="twitter:image" content="https://img.icons8.com/color/452/nota-fiscal-eletronica.png">
	<meta name="twitter:site" content="https://www.wribeiiro.com/danfe-generator">
	<meta name="twitter:creator" content="@wribeiiro">
	<meta property="og:title" content="Gerador PDF de Documentos Eletrônicos"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://www.wribeiiro.com/danfe-generator" />
	<meta property="og:image" content="https://img.icons8.com/color/452/nota-fiscal-eletronica.png"/>
	<meta property="og:description" content="Gerador PDF de Documentos Eletrônicos" />
	<meta property="og:site_name" content="Gerador PDF de Documentos Eletrônicos"/>

	<meta itemprop="name" content="Gerador PDF de Documentos Eletrônicos">
	<meta itemprop="description" content="Gere PDF da sua NFe, NFCe, MDFe e CTe facilmente usando apenas seu XML, através do Danfe Generator gratuitamente.">
	<meta itemprop="image" content="https://img.icons8.com/color/452/nota-fiscal-eletronica.png">
	<meta name="robots" content="index, follow">

	<title>Gerador PDF de Documentos Eletrônicos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />
	<link rel="shortcut icon" href="https://img.icons8.com/color/452/nota-fiscal-eletronica.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,600,700,800" rel="stylesheet">
</head>
<body class="body" style="padding: 0; margin: 0; width: 100%; font-family:Montserrat,sans-serif;">
	<div class="container" style="padding-top: 5%; margin-bottom: 150px">
		<div class="row">
			<div class="col-md-12 center-block">
				<div class="row text-center">
					<h1 style="font-size: 5em">DANFEOnline</h1>
					<p>Gerador de Documentos Online</p>
					<span>DANFE, DANFCE, DAMDFE, DACTE</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel-body">
					<ul class="nav nav-tabs">
                        <li class="active">
                        	<a href="#xml_tab" data-toggle="tab">XML</a>
                        </li>
                    </ul>
					<div class="tab-content">
	                	<div class="tab-pane fade in active form-group" id="xml_tab">
							<form class="form form-group" action="src/generator.php" method="POST" enctype="multipart/form-data" style="margin-top: 25px"> 
								<div class="row form-group">
									<div class="col-md-12 form-group">
										<input class="" type="file" name="xml" id="xml" accept=".xml" required>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4 col-xs-12 form-group">
										<button type="submit" class="form-control btn btn-danger"><i class="fas fa-file-pdf"></i> Gerar PDF</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<a class="text-center" href="https://github.com/wribeiiro/" style="text-decoration: none; color: #303030">
					Made with 
					<img src="https://cdn.pixabay.com/photo/2017/09/23/16/33/pixel-heart-2779422_960_720.png" width="16" alt="Wellisson Ribeiro"> Wellisson Ribeiro
				</a>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>