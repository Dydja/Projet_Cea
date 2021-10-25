<script type="text/javascript">
    function Calculer(){

     var nbr1, nbr2, sum;
             nbr1 = Number(document.getElementById("cout").value );
             nbr2 = Number(document.getElementById("frais").value);
             document.getElementById("amount").value = nbr1 + nbr2;
             //document.getElementById("sum").value = sum;
             //alert(sum);
    }
</script>
@extends("espaces.template")

@section("menu")
 @include("espaces.menu.menu3")
@endsection

@section("container")

      
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
                        

                        <div class="box-footer small-footer">
                            <a href="{{ route('manager.dashboard') }}" class="btn btn-warning me-1" ><i class="ti-trash"></i> Annuler</a>

                            <button type="submit" class="btn btn-primary">
                              <i class="ti-save-alt"></i> Envoyer
                            </button>

                        </div>
                    </div>
                    <!-- /.box-body -->

                </form>


				<!-- /.box-header -->
				<!-- form start -->
				<!--<form class="form-horizontal form-element">
				  <div class="box-body">
					<div class="form-group row">
					  <label for="title" class="col-sm-2 form-label">Titre</label>

					  <div class="col-sm-10">
						<input type="text" class="form-control" name="title" placeholder="Entrer le titre du document">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="inputPassword3" class="col-sm-2 form-label">Password</label>

					  <div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="ms-auto col-sm-10">
						<div class="checkbox">
							<input type="checkbox" id="Remember">
							<label for="Remember">Remember me</label>
						</div>
					  </div>
					</div>
				  </div>
				  /.box-body
				  <div class="box-footer">
					<button type="submit" class="btn btn-danger">Cancel</button>
					<button type="submit" class="btn btn-info pull-right">Sign in</button>
				  </div>
				   /.box-footer
				</form>-->
			  </div>
			  <!-- /.box -->

			</div>
			<!--/.col (right) -->
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->

@endsection




