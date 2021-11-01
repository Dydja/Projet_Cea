<!-- Main content -->
<section class="content" >

    <!--/.col (left) style="display: flex;align-item;position:absolute;justify-content:space-between;top:50px;left:50px;transform:translate(-50%,50%)"-->
    <!-- right column -->

     <!--Message d'alerte de succes-->
        @if(session()->has("success"))
            <div class="alert alert-success alert-dismissible">
            <h3>  {{ session()->get('success') }}</h3>
            </div>
        @endif
    <!--EndMessage -->

    <div class="col-12" >
      <!-- Horizontal Form -->
      <div class="box" >
        <!--<p>Vous avez //{ auth()->user()->file->count() }} documents <button>Voir les documents</button></p>-->
        <div class="box-header with-border">
          <h4 class="box-title">Formulaire de soumission des factures</h4>
        </div>
        <!--gestion des erreurs-->
           @if ($errors->any())
           <div class="alert alert-danger alert-dismissible">
               <ul>
                @foreach ($errors->all() as $error )
                  <li>{{ $error }}</li>
                @endforeach
               </ul>
           </div>
           @endif
            <!--End gestion -->
        <form class="form" method="post" enctype="multipart/form-data" action="{{ route('traitement.factures') }}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <h5 class="form-label">Coût de la prestation<span class="text-danger">*</span></h5>
                    <div class="input-group mb-3">
                        <input type="text" name="cout_prestation" id="cout" class="form-control" placeholder="le coût" >
                    </div>
                </div>
                <div class="form-group">
                    <h5 class="form-label">Frais de la prestation<span class="text-danger">*</span></h5>
                    <div class="input-group mb-3">
                        <input type="text" name="frais_dossier" id="frais" class="form-control"  placeholder="Les frais de prestation">
                    </div>
                </div>
                <div class="form-group">
                    <h5>Nom du client<span class="text-danger">*</span></h5>
                    <div class="input-group mb-3">
                        <input type="text" name="clients" class="form-control"  placeholder="Les frais de prestation">
                    </div>

                <div class="form-group">
                    <h5>Montant total<span class="text-danger">*</span></h5>
                    <div class="input-group mb-3">
                        <input type="text" name="amount_total" id="amount" class="form-control"  placeholder="Les frais de prestation">
                         <input type="button" value="Calculer" class="btn btn-warning btn-sm" onclick="Calculer();">
                    </div>
                </div>
                <div class="form-group">
                    <h5>Type du document<span class="text-danger">*</span></h5>
                    <select class="form-select" name="staus_amount">
                        <option>Choose</option>
                        <option value="paie">Payés</option>
                         <option value="faild">Impayés</option>

                    </select>
                </div


                <div class="box-footer small-footer">
                    <a href="{{ route('manager.dashboard') }}" class="btn btn-warning me-1" ><i class="ti-trash"></i> Annuler</a>

                    <button type="submit" class="btn btn-primary">
                      <i class="ti-save-alt"></i> Envoyer
                    </button>

                </div>
            </div>
            <!-- /.box-body -->

        </form>



      </div>
      <!-- /.box -->

    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
