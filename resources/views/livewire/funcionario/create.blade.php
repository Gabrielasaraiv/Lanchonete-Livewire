<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
       
            <h5 class="card-header" style="background-color: rgb(242, 192, 93)">Cadastro de Funcionário</h5>
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
                                                    placeholder="Nome Completo" wire:model.defer="name">
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror                                            </div>
                                           
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    name="email" placeholder="Digite seu email"
                                                    wire:model.defer="email">
                                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="cpf" class="form-label">CPF</label>
                                                <input type="cpf" class="form-control" id="cpf" name="cpf"
                                                    placeholder="xxx.xxx.xxx-xx" wire:model.defer="cpf">
                                                    @error('cpf') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="password" class="form-label">Senha</label>
                                                <input type="text" class="form-control" id="password" name="password"
                                                    placeholder="Digite sua senha" wire:model.defer="password">
                                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
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
