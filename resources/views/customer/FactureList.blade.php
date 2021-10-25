
  @extends('espaces.template')

    @section("menu")
    @include("espaces.menu.menu2")
   @endsection

  @section('container')

  	<!-- Main content -->
      <section class="content">

        <!-- tabs -->

        <div class="row">
         <!-- /.col -->

			<div class="col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">La Liste de vos factures payé et les modalités pour chaques type d'options choisies</h4>
                    <!--<h6 class="box-subtitle">Use default tab with class <code>customtab</code></h6>-->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs customtab2" role="tablist">
                          <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Factures Proformat</span></a> </li>
                          <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Factures soldées</span></a> </li>
                         
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                          <div class="tab-pane active" id="home7" role="tabpanel">
                              <div class="p-15">
                                  
                                <div class="row">
                                    <div class="col-12">
                                          <div class="mt-4">
                                              <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal-center">
                                                Modalités option commerciale
                                              </button>
                        
                                              <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-primary">
                                                Modalités option  finance
                                              </button>
                        
                                              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-danger">
                                               Modalités option Gestion
                                              </button>
                        
                                              <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal-warning">
                                                Modalités option  Assistance
                                              </button>
                        
                                              <!--<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-success">
                                                Launch Success Modal
                                              </button>	-->				
                                          </div>
                                    </div>
                                  </div>
                                
                                <!-- Modal -->
                                <div class="modal center-modal fade" id="modal-center" tabindex="-1">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Modalalitées de paiemant option commerciale</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                                <h4>Coût de la prestation : 250,000 FCFA</h4>
                                                <h4>Frais de dossier : 100,000 FCFA</h4></h4>
                                                <p></p>   
                                        </div>
                                        <div class="modal-footer modal-footer-uniform">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                        <button type="button" class="btn btn-primary fa fa-download float-end">Download</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- /.modal -->

                                  <!-- Modal -->
                                  <div class="modal center-modal fade" id="modal-primary" tabindex="-1">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Modalalitées option financière</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Coût de la prestation : 350,000 FCFA</h4>
                                            <h4>Frais de dossier : 200,000 FCFA</h4></h4>
                                            <p></p>
                                        </div>
                                        <div class="modal-footer modal-footer-uniform">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                        <button type="button" class="btn btn-primary fa fa-download float-end">Download</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- /.modal -->

                                  <!-- Modal -->
                                  <div class="modal center-modal fade" id="modal-danger" tabindex="-1">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Modalalitées option Gestion</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Coût de la prestation : 350,000 FCFA</h4>
                                            <h4>Frais de dossier : 150,000 FCFA</h4></h4>
                                            <p></p>
                                        </div>
                                        <div class="modal-footer modal-footer-uniform">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                        <button type="button" class="btn btn-primary fa fa-download float-end">Download</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- /.modal -->

                                  <!-- Modal -->
                                  <div class="modal center-modal fade" id="modal-warning" tabindex="-1">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Modalalitées option Assistance</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Coût de la prestation : 200,000 FCFA</h4>
                                            <h4>Frais de dossier : 150,000 FCFA</h4></h4>
                                            <p></p>
                                        </div>
                                        <div class="modal-footer modal-footer-uniform">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                        <button type="button" class="btn btn-primary fa fa-download float-end">Download</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- /.modal -->

                                  <!-- Modal -->
                                  <!--<div class="modal center-modal fade" id="modal-success" tabindex="-1">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <p>Your content comes here</p>
                                        </div>
                                        <div class="modal-footer modal-footer-uniform">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary float-end">Save changes</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>-->
                                <!-- /.modal -->






                              </div>
                          </div>
                          <div class="tab-pane" id="profile7" role="tabpanel">
                             <!-- Main content -->

                             <div class="box mt-4">
                                <div class="box-header with-border">						
                                    <h4 class="box-title">Invoice List</h4>
                                    <h6 class="box-subtitle">Export Invoice List to Copy, CSV, Excel, PDF & Print</h6>
                                </div>
                                <div class="box-body">						
                                    <div class="table-responsive">
            
                                        <table id="example" class="table table-lg invoice-archive">
                                            <thead>
                                                <tr>
                                                    <!--<th>#</th>-->
                                                    <th>Titre du document</th>
                                                    <th>Frais de dosssier</th>
                                                    <th>Coût prestation</th>
                                                    <th>Status</th>
                                                    <th>Délivré par</th>
                                                    <th>Date de paiement</th>
                                                    <th>Montant Total</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            @foreach ($factures as $facture)  
                                              <tbody>
                                                <tr>
                                                  <!--  <td></td>-->
                                                    <td>{{ $facture->title }}</td>
                                                    
                                                    <td> {{ $facture->frais_dossier }} </td>
                                                    <td> {{ $facture->cout_prestation }} </td>
                                                    <td><span class="badge badge-pill badge-warning">{{ $facture->status }}</span></td>
                                                    <td> {{ $facture->name }}  </td>   
                                                    <td>
                                                        <span class="badge badge-pill badge-success">{{ $facture->status }}-{{ $facture->created_at }}</span>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-0 fw-bold"><span class="d-block text-muted fw-normal">{{ $facture->amount_total }} FCFA</span></h6>
                                                    </td>
                                                    <!--<td class="text-center">
                                                        <div class="list-icons d-inline-flex">
                                                            <a href="#" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>-->
                                                </tr>
                                            </tbody>
                                             @endforeach
                                        </table>
            
                                    </div>
                                </div>
                            </div>
		
                          </div>

                         
                                 
                        </div>
                              
                         
                          <!-- /.content -->
                        
                 </div>
                                         
               </div>
          </div>
                                  
      </div>
                                
    </section>
                               
  @endsection
 
  
 


  

  

 
	
	
  
