<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">

        <h5 class="card-header" style="background-color: rgb(242, 192, 93)">Cadastro de Produtos</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="bg-light py-3 py-md-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                                <div class="card border border-light-subtle rounded-3 shadow-sm">
                                    <div class="card-body p-3 p-md-4 p-xl-5">

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Ex: Macarronada" wire:model.defer="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ingredientes" class="form-label">Ingredientes</label>
                                            <textarea class="form-control" id="ingredientes" name="ingredientes" placeholder="Ex: Massa, molho de tomate, orégano"
                                                wire:model.defer="ingredientes"></textarea>

                                        </div>

                                        <div class="mb-3">
                                            <label for="valor" class="form-label">Preço</label>
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="valor" class="col-form-label">R$</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="text" id="valor" class="form-control"
                                                        aria-describedby="passwordHelpInline" name="valor"
                                                        placeholder="Digite o valor" wire:model.defer="valor">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="rememberMe" id="rememberMe">
                                            <label class="form-check-label text-secondary" for="rememberMe">Salvar
                                                Informações</label>
                                        </div>

                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>

</div>
