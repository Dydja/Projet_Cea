
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
               <!-- <div class="box-header with-border">
                  <h6 class="box-subtitle">Use default tab with class <code>customtab</code></h6>
                </div>-->
              <div class="col-lg-4 col-12">
                  <div class="box-body">

                      <button type="button" class="waves-effect waves-light btn btn-outline btn-rounded btn-success-light mb-5" data-bs-toggle="modal" data-bs-target="#manager-modal">
                  Valider les paiements
                      </button>

                  </div>
              </div><!-- /.col -->
              @include('manager.modal.index')
                <!-- /.box-header -->
             </div>
        </div>

    </div>

    <div class="box-body">
        <div class="col-12">
            <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">La Liste des factures scanées payées</h4>
                <div class="box-controls pull-right">
                  <div class="lookup lookup-circle lookup-right">
                    <input type="text" name="s">
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <tr>
                        <th>Invoice</th>
                        <th>User</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Country</th>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #123456</a></td>
                        <td>Lorem Ipsum</td>
                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
                        <td>$158.00</td>
                        <td><span class="badge badge-pill badge-danger">Pending</span></td>
                        <td>CH</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #458789</a></td>
                        <td>Lorem Ipsum</td>
                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
                        <td>$55.00</td>
                        <td><span class="badge badge-pill badge-warning">Shipped</span></td>
                        <td>US</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #84532</a></td>
                        <td>Lorem Ipsum</td>
                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
                        <td>$845.00</td>
                        <td><span class="badge badge-pill badge-danger">Prossing</span></td>
                        <td>IG</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #48956</a></td>
                        <td>Lorem Ipsum</td>
                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
                        <td>$145.00</td>
                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                        <td>EN</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #92154</a></td>
                        <td>Lorem Ipsum</td>
                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
                        <td>$450.00</td>
                        <td><span class="badge badge-pill badge-warning">Shipped</span></td>
                        <td>UK</td>
                      </tr>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          </div>

    <!-- /.content -->
   </div>

  </section>

  @endsection








































