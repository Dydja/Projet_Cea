<!--<form method="post" action="{{ route('traitement.invoice') }}" enctype="multipart/form-data">
    @csrf
     <div class="modal-body">
         <div class="form-group">
             <h5>Selectionne le document<span class="text-danger">*</span></h5>
             <div class="controls">
                 <input type="file" name="scanned_invoices" multiple class="form-control" accept="image/pdf,image/docx" required>
             </div>
         </div>
     </div>
     <input type="submit" value="save">


 </form>-->

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
                                                  <th>Modalité</th>
                                                  <th>Clients</th>
                                                  <th>Date de paiement</th>
                                                  <th>Montant Total</th>
                                                  <th class="text-center" colspan="2">Actions</th>
                                              </tr>
                                          </thead>
                                          @foreach ($data as $factures)
                                            <tbody>
                                              <tr>
                                                <!--  <td></td>-->
                                                  <td>{{ $factures->title }}</td>

                                                  <td> {{ $factures->frais_dossier }} </td>
                                                  <td> {{ $factures->cout_prestation }} </td>
                                                  <td><span class="badge badge-pill badge-warning">{{ $factures->staus_amount }}</span></td>
                                                  <td> {{ Auth::user()->name }}  </td>
                                                  <td>
                                                      <span class="badge badge-pill badge-success">{{ $factures->status }}-{{ $factures->created_at }}</span>
                                                  </td>
                                                  <td>
                                                      <h6 class="mb-0 fw-bold"><span class="d-block text-muted fw-normal">{{ $factures->amount_total }} FCFA</span></h6>
                                                  </td>
                                                  <td class="text-center" style="display:inline-block">
                                                      <a href="" class="fa-shower">Voir</a>
                                                      <a href="{{ URL::to('/customer/factures/pdf') }}" class="fa-download">Download</a>
                                                     <!-- <div class="list-icons d-inline-flex">
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
                                                      </div>-->
                                                  </td>
                                              </tr>
                                          </tbody>
                                           @endforeach
                                      </table>

                                  </div>
                              </div>
                          </div>












                          < class="col-12">
                            <div class="box mt-4">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Support Ticket List</h4>
                                    <h6 class="box-subtitle">List of ticket opend by customers</h6>
                                </div>
                                <div class="box-body p-15">
                                    <div class="table-responsive">
                                        <table id="tickets" class="table mt-0 table-hover no-wrap" data-page-size="10">
                                            <thead>
                                                <tr>
                                                    <th>#ID</th>
                                                    <!--<th>Titre du document</th>-->
                                                    <th>Frais de dosssier</th>
                                                    <th>Coût prestation</th>
                                                    <th>Clients</th>
                                                    <th>Modalité</th>
                                                    <th>Date de paiement</th>
                                                    <th>Montant Total</th>
                                                    <th class="text-center" colspan="2">Actions</th>
                                                </tr>
                                            </thead>
                                            @foreach ($data as $factures )

                                            @endforeach
                                            <tbody>
                                                <tr>
                                                    <td>{{ $factures->id }}</td>
                                                    <td>
                                                       {{ $factures->frais_dossier }}
                                                    </td>
                                                    <td>{{ $factures->cout_prestation }}</td>
                                                    <td> {{ Auth::user()->name }} </td>
                                                    <td><span class="badge badge-success">{{ $factures->staus_amount }}</span> </td>
                                                    <td>{{ $factures->amount_total }} FCFA</td>
                                                    <td>{{ $factures->created_at }}</td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>










                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


















                <div class="box">
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
										<th>Period</th>
										<th>Issued to</th>
										<th>Status</th>
										<th>Issue date</th>
										<th>Due date</th>
										<th>Amount</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#0025</td>
										<td>February 2018</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Jacob</a>
												<span class="d-block text-muted">Payment method: Skrill</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-select" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold" selected>On hold</option>
												<option value="pending">Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											April 18, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-success">Paid on Mar 16, 2018</span>
										</td>
										<td>
											<h6 class="mb-0 fw-bold">$36,890 <span class="d-block text-muted fw-normal">VAT $4,859</span></h6>
										</td>
										<td class="text-center">
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
										</td>
									</tr>


								</tbody>
							</table>

						</div>
					</div>
				</div>














  <!-- Main content -->
                              <!-- Main content -->
                              <!--<section class="content">
                                  <div class="box">
                                      <div class="box-header">
                                          <h4 class="box-title">Televerser vos factures</h4>
                                          <h6 class="box-subtitle">Télécharger le justificatif de paiement des modalités dûes <code>ici</code></h6>
                                      </div>
                                      <div class="box-body">
                                         <form action=" class="dropzone" method="post" enctype="multipart/form-data">

                                          <div class="fallback">
                                              <input name="scanned_invoice" type="file" multiple />
                                          </div>
                                          <button type="submit" class="btn btn-secondary">
                                              <i class="ti-save-alt"></i> Envoyer
                                            </button>

                                       </form>
                                      </div>
                                  </div>
                              </section>-->
                              <!-- /.content -->
