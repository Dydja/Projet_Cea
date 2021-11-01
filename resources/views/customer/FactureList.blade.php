
  @extends('espaces.template')

  @section("menu")
  @include("espaces.menu.menu2")
  @endsection

  @section('container')

    <!-- Main content -->
    <section class="content">

      <!-- tabs -->

      <div class="row ">
       <!-- /.col -->

          <div class="col-12">
              <div class="box">
                <div class="box-header with-border">
                  <h4 class="box-title">La Liste de vos factures payé et les modalités pour chaques type d'options choisies</h4>
                  <!--<h6 class="box-subtitle">Use default tab with class <code>customtab</code></h6>-->
                </div>

              <div class="col-lg-4 col-12">
                  <div class="box-body">
                      <button type="button" class="waves-effect waves-light btn btn-outline btn-rounded btn-success-light mb-5" data-bs-toggle="modal" data-bs-target="#modal-invoice">
                    Scanner vos factures ici
                      </button>
                  </div>
              </div><!-- /.col -->
                <!--Message d'alerte de succes-->
                @if(session()->has("success"))
                <div class="alert alert-success alert-dismissible">
                <h3>  {{ session()->get('success') }}</h3>
                </div>
                @endif
                <!--EndMessage -->


                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs customtab2" role="tablist">
                     <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Factures Proformat</span></a> </li>
                      <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#file7" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down"> Factures scannés</span></a> </li>
                      <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#amount7" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Factures soldées</span></a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content ">
                        <div class="tab-pane active" id="home7" role="tabpanel">
                            <div class="p-15">

                              <div class="row">

                                      <div class="col-lg-4 col-12" >
                                          <div class="box ">
                                          <div class="box-body ">
                                              <h4 class="box-title d-block "> Commerciale</h4>
                                              <button type="button" class="waves-effect waves-light bg-gradient-success btn btn-rounded btn-default mb-5" data-bs-toggle="modal" data-bs-target="#modal-center">
                                              Voir prix
                                              </button>
                                          </div>
                                          </div>
                                      </div><!-- /.col -->

                                      <div class="col-lg-4 col-12">
                                          <div class="box">
                                          <div class="box-body">
                                              <h4 class="box-title d-block">  Finance</h4>
                                              <button type="button" class="waves-effect waves-light bg-gradient-success btn btn-rounded btn-default mb-5" data-bs-toggle="modal" data-bs-target="#modal-primary">
                                            Voir prix
                                              </button>
                                          </div>
                                          </div>
                                      </div><!-- /.col -->

                                      <div class="col-lg-4 col-12">
                                          <div class="box">
                                          <div class="box-body">
                                              <h4 class="box-title d-block"> Gestion</h4>
                                              <button type="button" class="waves-effect waves-light bg-gradient-success btn btn-rounded btn-default mb-5" data-bs-toggle="modal" data-bs-target="#modal-danger">
                                             Voir prix
                                              </button>
                                          </div>
                                          </div>
                                      </div><!-- /.col -->

                                      <div class="col-lg-4 col-12">
                                          <div class="box">
                                          <div class="box-body">
                                              <h4 class="box-title d-block">Gestion des employées</h4>
                                              <button type="button" class="waves-effect waves-light bg-gradient-success btn btn-rounded btn-default mb-5" data-bs-toggle="modal" data-bs-target="#modal-show">
                                             Voir prix
                                              </button>
                                          </div>
                                          </div>
                                      </div><!-- /.col -->

                                      <div class="col-lg-4 col-12">
                                          <div class="box">
                                          <div class="box-body">
                                              <h4 class="box-title d-block">  Assistance</h4>
                                              <button type="button" class="waves-effect waves-light bg-gradient-success btn btn-rounded btn-default mb-5" data-bs-toggle="modal" data-bs-target="#modal-warning">
                                            Voir Prix
                                              </button>
                                          </div>
                                          </div>
                                      </div><!-- /.col -->

                                      <div class="col-lg-4 col-12">
                                          <div class="box">
                                          <div class="box-body">
                                              <h4 class="box-title d-block"> Corrections</h4>
                                              <button type="button" class="waves-effect waves-light bg-gradient-success btn btn-rounded btn-default mb-5" data-bs-toggle="modal" data-bs-target="#modal">
                                             Voir prix
                                              </button>
                                          </div>
                                          </div>
                                          @include('customer.modal.InvoiceScanned')
                                      </div><!-- /.col -->

                                </div>



                              <!-- Modal -->
                              <div class="modal center-modal fade" id="modal-center" tabindex="-1">
                                  <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title">Modalitées de paiemant option commerciale</h5>
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
                                      <h5 class="modal-title">Modalitées option financière</h5>
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
                                      <h5 class="modal-title">Modalitées option Gestion</h5>
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
                                      <h5 class="modal-title">Modalitées option Assistance</h5>
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

                              <div class="modal center-modal fade" id="modal-show" tabindex="-1">
                                  <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title">Modalités pour la gestion des employés</h5>
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
                                <div class="modal center-modal fade" id="modal" tabindex="-1">
                                  <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title">Modalités pour des corrections</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <h4>Coût de la prestation : 200,000 FCFA</h4>
                                          <h4>Frais de dossier : 150,000 FCFA</h4>
                                      </div>
                                      <div class="modal-footer modal-footer-uniform">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary float-end">Save changes</button>
                                      </div>
                                  </div>
                                  </div>
                              </div>
                              <!-- /.modal -->
                            </div>
                        </div>

                        <div class="tab-pane" id="file7" role="tabpanel">
                                <div class="box mt-4">
                                   <div class="box-header with-border">
                                     <h3 class="box-title">La Liste des factures scannées</h3>
                                   </div>
                                   <!-- /.box-header -->
                                   <div class="box-body">
                                       <div class="table-responsive">
                                         <table id="example1" class="table table-bordered table-striped">
                                           <thead>
                                               <tr>
                                                   <th style="text-align:center">Rapports</th>
                                               </tr>
                                           </thead>
                                           @foreach ($key as $invoice)
                                           <tbody>
                                               <tr>
                                                   <a href="#" style="text-decoration: none"><td>{{ $invoice->scanned_invoices }}</td></a>
                                               </tr>
                                           </tbody>
                                           @endforeach
                                         </table>
                                       </div>
                                   </div>
                                   <!-- /.box-body -->
                                 </div>
                                 <!-- /.box -->

                        </div>

                        <div class="tab-pane" id="amount7" role="tabpanel">
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
                                                <th>#</th>
                                                <th>Envoyé à</th>
                                                <th>Frais de dossier</th>

                                                <th>Coût de la prestation</th>
                                                <th>Status</th>
                                                <th>Date de paiement</th>
                                                <th>Total versé</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        @foreach ($data as $factures )
                                        <tbody>
                                            <tr>
                                                <td>#00{{ $factures->id }}</td>
                                                <td><option value="{{ $factures->user_id }}">{{ $factures->name }}</option> </td>
                                                <td>
                                                    <h6 class="mb-0">
                                                     {{ $factures->frais_dossier }} FCFA

                                                    </h6>
                                                </td>
                                                <td>
                                                   {{ $factures->cout_prestation }} FCFA
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-success">{{ $factures->staus_amount }}</span>
                                                </td>
                                                <td>
                                                   {{ $factures->created_at }}
                                                </td>
                                                <td>
                                                    <h6 class="mb-0 fw-bold badge badge-pill badge-warning">{{ $factures->amount_total }}<span class="d-block text-muted fw-normal">FCFA</span></h6>
                                                </td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="{{ route('factures.pdf') }}" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
                                                                <a href="#" class="dropdown-item"><i class="fa fa-print"></i> Voir</a>
                                                                <div class="dropdown-divider"></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>

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








































