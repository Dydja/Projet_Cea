  <!--Message d'alerte de succes-->
  @if(session()->has("success"))
  <div class="alert alert-success alert-dismissible">
  <h3>  {{ session()->get('success') }}</h3>
  </div>
@endif
<!--EndMessage -->
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


  <form class="form" method="post" action="{{ route('traitement.factures') }}" enctype="multipart/form-data" role="form">
    @csrf
    <div class="modal center-modal fade" id="manager-modal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Valider les paiements selon les modalités de vos clients</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
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
                </div>
            </div>


            <div class="modal-footer modal-footer-uniform">
             <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary float-end">Save changes</button>-->

              <div class="box-footer small-footer">
                <a href="{{ route('manager.dashboard') }}" class="btn btn-warning me-1" ><i class="ti-trash"></i> Annuler</a>

                <button type="submit" class="btn btn-primary">
                  <i class="ti-save-alt"></i> Envoyer
                </button>

            </div>

            </div>
          </div>
        </div>
      </div>
 </form>



















  <!--<div class="col-12" >
     Horizontal Form
    <div class="box" >
    <p>Vous avez //{ auth()->user()->file->count() }} documents <button>Voir les documents</button></p>
    <div class="box-header with-border">
     <h4 class="box-title">Formulaire de soumission des factures</h4>
    </div-->

 <!-- Modal -->


